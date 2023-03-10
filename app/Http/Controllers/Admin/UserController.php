<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $customers = User::where('admin',3)->get();
        return view('admin.user.index', compact('customers'));
    }

    public function store(Request $request)
    {
        try{

            $data = array(
                'name'     => $request->name,
                'email'    => $request->email,
                'contact'    => $request->contact,
                'address'    => $request->address,
                'admin'    => 3,
                'password' => Hash::make($request->password),
            );

            // return $data;
            $run = User::create($data);

            if ($run) {
                return redirect()->route('user.index')->with('success','User Added SuccessFull..!');
            }
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function status(Request $request)
    {
        $row = User::where('id',$request->id)->first();
        if($row->status == 'Active')
        {
            $row->status = 'Disabled';
        }else{
            $row->status = 'Active';
        }
        $run = $row->update();
        if($run){
            return $rows = User::where('id',$request->id)->first();
        }
    }

    public function modal(Request $request)
    {
        return $row = User::where('id',$request->id)->first();
    }

    public function update(Request $request)
    {
        $row           = User::where('id',$request->id)->first();
        $row->name     = $request->name;
        // $row->email    = $request->email;
        $row->contact  = $request->contact;
        // $row->identity = $request->identity;
        $row->address  = $request->address;
        $run           = $row->update();
        if($run){
            return $row;
        }
    }

    public function customerlist()
    {
        $customers = User::where('admin',0)->get();
        return view('admin.customer.index', compact('customers'));
    }
}
