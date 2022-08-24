<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Manggarai;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ManggaraController extends Controller
{
    public function index()
    {   
        $manggarai = Manggarai::all();
        return view('dashboard.manggarai-wisata', compact('manggarai'));
    }
    
    public function store(Request $request)
    {
        $manggarai = new Manggarai();
        if ($request->hasFile('image')) 
        {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/',$filename);
                $manggarai->image=$filename;
                
            }
        $manggarai->kate_id = $request->input('kate_id');
        $manggarai->name = $request->input('name');
        $manggarai->deskripsi = $request->input('deskripsi');
        $manggarai->excerpt= Str::limit(strip_tags($request->deskripsi), 50);
        $manggarai->alamat = $request->input('alamat');
        $manggarai->waktu = $request->input('waktu');
        $manggarai->save();
        return redirect('wisata-manggarai')->with('status','Kategori berhasil ditambahkan');
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('dashboard.tambah-manggarai', compact('kategori'));
    }

    public function edit($id)
    {   
        $manggarai = Manggarai::find($id);
        $kategori = Kategori::all();
        return view('dashboard.edit-manggarai', compact('manggarai','kategori'));
    }

    public function update(Request $request, $id)
    {
        $manggarai = Manggarai::find($id);
        
        if ($request->hasFile('image')) 
        {
            $path = 'assets/uploads/'.$manggarai->image;

            if(File::exists($path)) {
                
                File::delete($path);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/',$filename);
        $manggarai->image=$filename;
}

        $manggarai->name = $request->input('name');
        $manggarai->deskripsi = $request->input('deskripsi');
        $manggarai->excerpt= Str::limit(strip_tags($request->deskripsi), 50);
        $manggarai->alamat = $request->input('alamat');
        $manggarai->waktu = $request->input('waktu');
        $manggarai->update();
        return redirect('wisata-manggarai');


    }

    public function hapus($id){
        $manggarai = Manggarai::find($id);
        if ($manggarai->image) 
        {  
            
            $path = 'assets/uploads/'.$manggarai->image;
            if(File::exists($path)) {
                
                File::delete($path);
            }

        }
        $manggarai->delete();
        return redirect('wisata-manggarai');
    }



}
