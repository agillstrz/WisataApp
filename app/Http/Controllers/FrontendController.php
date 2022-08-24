<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Manggarai;
use App\Models\Riview;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $souvenir =  Manggarai::where('kate_id','2')->get();
        $manggarai =  Manggarai::where('kate_id','1')->get();
        return view('frontend.home', compact('manggarai','souvenir'));
    }

    public function detail($id) 
    {
        $riview =  Riview::where('manggarai_id',$id)->latest()->get();
        $detail =  Manggarai::where('id',$id)->get();
        return view('frontend.detail' , compact('detail','riview'));
    }
}
