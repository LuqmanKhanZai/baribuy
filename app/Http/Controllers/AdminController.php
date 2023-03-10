<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index()
    {
        if(Auth::user()->admin) {
            $users_count = User::where('admin', 0)->count();
            // return "000";
            // return view('Admin.adminPanel', compact('users_count'));
            return view('home', compact('users_count'));
        }
        else {
            return redirect('/home');
        }
    }
}
