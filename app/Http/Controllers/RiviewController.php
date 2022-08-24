<?php

namespace App\Http\Controllers;

use App\Models\Riview;
use App\Models\Manggarai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiviewController extends Controller
{
    public function insert(Request $request)
    {
        $riview = new Riview();
        $riview->name =  $request->input('name');
        $riview->riview =  $request->input('riview');
        $riview->manggarai_id =  $request->input('manggarai_id');
        $riview->save();
        return back();
    }

    public function lihatkomentar($id)
    {
        {
            $riview =  Riview::where('manggarai_id',$id)->latest()->get();
            $detail =  Manggarai::where('id',$id)->get();
            return view('dashboard.detail' , compact('detail','riview'));
        }
    }
    public function hapuskomen($id)
    {
        $riview = Riview::find($id);
        $riview->delete();
        return back();
    }

}
