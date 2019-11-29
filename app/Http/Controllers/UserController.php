<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('isAdmin',0)->get();
        return view('adminpanel.users', compact('users'));
    }
}
