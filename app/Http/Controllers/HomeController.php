<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Category;
use App\Models\Property;
use App\Models\UserFund;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return "000";
        // admin == 0  mean User else Customer
        if (Auth::user()->admin == 0) {
            $user_id = Auth::user()->id;
            $docs   = UserDocument::where('user_id', $user_id)->get();
            $funds  = UserFund::where('user_id', $user_id)->where('is_active', 1)->first();
            $user = User::with('customerInfo')->find($user_id);
            return view('customer.profile.index', compact('user','docs','funds'));
        } else {
            $total_user = User::where('admin',0)->count();
            $total_customer = User::where('admin',3)->count();
            $total_property = Property::count();
            $total_city = City::count();
            $total_country = Country::count();
            $total_state = State::count();
            $total_category = Category::count();
            return view('home',get_defined_vars());
        }
    }
}
