<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class StateController extends Controller
{

    public function index()
    {
        $states = State::with('country:id,name')->get();
        $countries    = Country::all();
        return view('admin.state.index', compact('countries','states'));
    }

    public function store(Request $request)
    {
        try {
            $row           = new State();
            $row->country_id = $request->country_id;
            $row->name     = $request->name;
            $run           = $row->save();
            if($run){
                Alert::success('Success Title', $request->name. ' Added SuccessFully');
                return redirect()->route('state.index')->with('success','State Added SuccessFull..!');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function status(Request $request)
    {
         $row = State::where('id',$request->id)->first();
        if($row->status == 'Active')
        {
            $row->status = 'Disabled';
        }else{
            $row->status = 'Active';
        }
        $run = $row->update();
        if($run){
            return $rows = State::where('id',$request->id)->first();
        }
    }
}
