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
}
