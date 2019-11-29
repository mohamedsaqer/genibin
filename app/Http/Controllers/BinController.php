<?php

namespace App\Http\Controllers;

use App\Bin;
use Illuminate\Http\Request;

class BinController extends Controller
{
    public function index()
    {
        $bins = Bin::orderBy('status', 'desc')->get();
        return view('adminpanel.bins',compact('bins'));
    }

    public function change($id, Request $request)
    {
        $bin = Bin::find($id);
        if($request->level < 40){
            $bin->status = 0;
            $bin->save();
        }elseif ($request->level < 80){
            $bin->status = 1;
            $bin->save();
        }else{
            $bin->status = 2;
            $bin->save();
        }
        return $bin->status;
    }

    public function check($id)
    {
        $bin = Bin::find($id);
        if($bin->status != 2){
            return [true, 'msg' => 'Wish you happy day'];
        }else{
            $bin = Bin::where('status','!=',2)->first();
            return [false,$bin, 'msg' => 'Full Bin'];
        }
    }
}
