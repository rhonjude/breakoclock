<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;
        $user=Auth::user();
        if($role=='1')
        {
            return view('admin.dashboard',['user'=>$user]);
        }
        else
        {
            return view('dashboard',['user'=>$user]);
        }

    }
}
