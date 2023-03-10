<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('admin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $run = Country::create($request->except('submit'));
            if($run){
                Alert::success('Success Title', $request->name. ' Added SuccessFully');
                return redirect()->route('country.index');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Change The Status the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        $row = Country::where('id',$request->chart_id)->first();
        if($row->status == 'Active')
        {
            $row->status = 'Disabled';
        }else{
            $row->status = 'Active';
        }
        $run = $row->update();
        if($run){
            return $rows = Country::where('id',$request->chart_id)->first();
        }
    }

    /**
     * Show the form for Data the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function modal(Request $request){
        return $row = Country::where('id',$request->id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $row         = Country::find($request->category_id);

        if($request->name != '' || $request->name != null){
            if($request->name != $row->name){
                $row->update(['name'=> $request->name]);
            }
        }
        $row->status = "Active";
        $run         = $row->update();
        if($run){
            Alert::success('Success Title', $request->name. ' Updated SuccessFully');
            return redirect()->route('country.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Country::find($id);
        $run = $row->delete();
        if ($run){
            Alert::success('Success Title', 'Country deleted SuccessFully');
            return redirect()->back();
        }
    }
}
