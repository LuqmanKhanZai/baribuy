<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::with('state:id,name')->get();
        $states    = State::all();
        return view('admin.city.index', compact('states','cities'));
    }

    public function store(Request $request)
    {
        try {
            $row           = new City();
            $row->state_id = $request->state_id;
            $row->name     = $request->name;
            $run           = $row->save();
            if($run){
                Alert::success('Success Title', $request->name. ' Added SuccessFully');
                return redirect()->route('city.index')->with('success','City Added SuccessFull..!');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function status(Request $request)
    {
         $row = City::where('id',$request->id)->first();
        if($row->status == 'Active')
        {
            $row->status = 'Disabled';
        }else{
            $row->status = 'Active';
        }
        $run = $row->update();
        if($run){
            return $rows = City::where('id',$request->id)->first();
        }
    }
}
