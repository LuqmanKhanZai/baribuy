<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\UserFund;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function show()
    {
        if (Auth::user()->admin == 1) {
            $user   = Auth::user();
            $docs   = UserDocument::where('user_id', $user->id)->get();
            $funds  = UserFund::where('user_id', $user->id)->where('is_active', 1)->first();
            return view('customer.profile.index', compact('user', 'docs', 'funds'));
        } else {
            return redirect()->route('home');

        }
    }

    public function edit()
    {
        if (Auth::user()->admin == 0) {
            $id = Auth::user()->id;
            $user = User::find($id);
            return view('profile.edit', compact('user'));
        } else {
            return redirect()->route('home');
        }
    }

    public function update(Request $request)
    {
        $rule = [];
        if ($request['name']) {
            $rule['name'] = 'required:max:40';
        }

        // if ($request['email']) {
        //     $rule['email'] = 'required|max:190';
        // }

        if ($request['password']) {
            $rule['password'] = 'nullable|min:8|confirmed';
        }

        if ($request['phone']) {
            $rule['phone'] = 'required|min:11|numeric';
        }

        if ($request['current_password']) {
            $rule['current_password'] = ['required', new MatchOldPassword];
            $rule['new_password'] = 'required';
            $rule['new_confirm_password'] = 'same:new_password';
        }

        $validatedData = $request->validate($rule);

        if (Auth::user()->admin == 0) {
             $id = Auth::user()->id;
            $user = User::find($id);
            if (isset($request->name)) {
                $user->name = $request->name;
            }

            // if (isset($request->email)) {
            //     $user->email = $request->email;
            // }

            if (isset($request->phone)) {
                $user->phone = $request->phone;
            }

            if (isset($request->address)) {
                $user->address = $request->address;
            }

            if (isset($request->accredited_investor)) {
                $user->accredited_investor = $request->accredited_investor;
            }

            if (isset($request->us_citizen)) {
                $user->us_citizen = $request->us_citizen;
            }

            if (isset($request->backup_tax_withholding_exempt)) {
                $user->backup_tax_withholding_exempt = $request->backup_tax_withholding_exempt;
            }

            if (isset($request->annual_income)) {
                $user->annual_income = $request->annual_income;
            }

            if (isset($request->net_worth)) {
                $user->net_worth = $request->net_worth;
            }

            if (Hash::check($request->password, $user->password)) {
            }

            if ($user->password) {
                $user->password = Hash::make($request->password);
            }

            if ($request->hasFile('image')) {
                $user->image = $request->image->store('profile_pics', 'public');
            }

            $run = $user->update();
            Alert::success('Your Profile is Updated!');
            return redirect()->route('home');
            // return redirect()->route('home')->with('msg_success', 'Your Profile is Updated');
        } else {
            return redirect()->route('home');


        }
    }

    public function upload_photo(Request $request)
    {

        $rule =  [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $request->validate($rule);
        $input = $request->all();
        $input['image'] = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/userProfile'), $input['image']);
        if ($input['image'] && Auth::user()) {
            $user = User::where('id', Auth::user()->id)->first();
            if (isset($user->img) && \File::exists(public_path('images/userProfile/' . $user->img))) {
                \File::delete(public_path('images/userProfile/' . $user->img));
            }
            $user->img = $input['image'];
            $user->save();
        }

        return response()->json(['success' => 'done']);

    }

}
