<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    /**
     * Display a learn pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function learn()
    {
        return view('frontendPages.learn');
    }

    /**
     * Display a about pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontendPages.about');
    }
    /**
     * Display a about pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view('frontendPages.contactUs');
    }
        /**
     * Display a Signup pages.
     *
     * @return \Illuminate\Http\Response
     */

    public function signup()
    {
        return view('frontendPages.signup');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        
        $newUser = User::create([
            'email' => $request['email'],
            'name' => '',
            'password' => Hash::make($request['password']),
        ]);
        Auth::login($newUser);
        return view('frontendPages.basic-info');    
    }

    public function basicInfo(Request $request)
    {
        if(Auth::check()){
            if(Customer::where('user_id',Auth::id())->count() == 0){
                return view('frontendPages.basic-info');
            }else{
                return redirect()->route("page.registerCustomerInfo");
            }    
        }
    }

    public function storeBasicInfo(Request $request)
    {
       $request->validate([
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:3',
        'investment_range_in_12_month' => 'required',
        'term_Service_agreed_check' => 'required',
       ],[
        'investment_range_in_12_month.required' => 'please select investment range in next 12 month',
        'first_name.required' => 'please provide first name',
        'last_name.required' => 'please provide last name',
        'term_Service_agreed_check.accepted' => "To continue you must agreed upon terms and consitions"
       ]);

       $customerCreated = Customer::Create([
            'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'investment_range_in_12_month' => $request->investment_range_in_12_month,
            'term_Service_agreed_check' => $request->term_Service_agreed_check,
            'step_in_complete' => 3
       ]);

       return redirect()->route('page.registerCustomerInfo');
    }

    public function register()
    {
        if(Auth::check()){
            if(Customer::where('user_id',Auth::id())->count() == 1){

                $customerInfo = auth()->user()->customerInfo;
                
                if($customerInfo->step_in_complete != 0){
                    return view('frontendPages.customer.register-info',compact("customerInfo"));
                }else{
                    return back();
                }
            }
        }else{
            return redirect('/login');
        }
    }

    public function emailverify()
    {
        return view('frontendPages.emailverify');
    }
    
}
