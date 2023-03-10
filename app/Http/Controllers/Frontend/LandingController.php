<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {

        // return "00";
        // return view('welcome');
        if (Auth::guest()) {
            return view('welcome');
        } else {
            if (Auth::user()->admin == 1) {
                return redirect()->route('home');
                
            } else {
                return redirect('/home');
            }
        }
    }
}
