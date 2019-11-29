<?php

namespace App\Http\Controllers;

use App\Bin;
use Illuminate\Http\Request;

class BinController extends Controller
{
    public function index()
    {
        $bins = Bin::get();
        return view('adminpanel.bins',compact('bins'));
    }

    public function change($id, Request $request)
    {
        $bin = Bin::find($id);
        if($request->level < 40){
            $bin->status = 0;
        }elseif ($request->level < 80){
            $bin->status = 1;
        }else{
            $bin->status = 2;
        }
        return $bin->status;
    }
}
