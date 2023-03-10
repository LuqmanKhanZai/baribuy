<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
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
            $run = Category::create($request->except('submit'));
            if($run){
                Alert::success('Success Title', $request->name. ' Added SuccessFully');
                return redirect()->route('category.index');
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
        $row = Category::where('id',$request->chart_id)->first();
        if($row->status == 'Active')
        {
            $row->status = 'Disabled';
        }else{
            $row->status = 'Active';
        }
        $run = $row->update();
        if($run){
            return $rows = Category::where('id',$request->chart_id)->first();
        }
    }

    /**
     * Show the form for Data the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function modal(Request $request){
        return $row = Category::where('id',$request->id)->first();
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
         $row         = Category::find($request->category_id);

        if($request->name != '' || $request->name != null){
            if($request->name != $row->name){
                $row->update(['name'=> $request->name]);
            }
        }
        $row->status = "Active";
        $run         = $row->update();
        if($run){
            Alert::success('Success Title', $request->name. ' Updated SuccessFully');
            return redirect()->route('category.index');
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
        $row = Category::find($id);
        $run = $row->delete();
        if ($run){
            Alert::success('Success Title', 'Category deleted SuccessFully');
            return redirect()->back();
        }
    }
}
