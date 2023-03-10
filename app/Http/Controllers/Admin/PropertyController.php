<?php

namespace App\Http\Controllers\Admin;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyToImage;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Image;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $countries  = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('admin.property.create',get_defined_vars());
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

            $image        = $request->file('thumbnail');
            $extension    = $image->getClientOriginalExtension();
            $filename     = time() . '.'.$extension;
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(427 ,320);
            $image_resize->save(public_path('images/thumbnail/'.$filename));
            $url = '/images/thumbnail/'.$filename;

            $request['user_id'] = 1;
            $request['thumbnail'] = $filename;
            $request['thumbnail_url']   = $url;

            $run = Property::create($request->except('submit'));

            if($run){
                Alert::success('Success Title', $request->title. ' Added SuccessFully');
                return redirect()->route('property.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $Property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $categories = Category::all();
        $countries  = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('admin.property.edit',get_defined_vars());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Property::find($id);
        $row->category_id = $request->category_id;
        $row->country_id = $request->country_id;
        $row->state_id = $request->state_id;
        $row->city_id = $request->city_id;
        $row->title = $request->title;
        $row->bed = $request->bed;
        $row->bath = $request->bath;
        $row->square_feet = $request->square_feet;
        $row->purchase_price = $request->purchase_price;
        $row->repair_price = $request->repair_price;
        $row->closing_cost = $request->closing_cost;
        $row->total_amount = $request->total_amount;
        $row->per_share = $request->per_share;
        $row->total_share = $request->total_share;
        $row->hold_period = $request->hold_period;
        $row->management_fee = $request->management_fee;
        $row->monthly_tax = $request->monthly_tax;
        $row->monthly_rent = $request->monthly_rent;
        $row->description = $request->description;
        $row->location = $request->location;

        if($request->thumbnail){
            $image        = $request->file('thumbnail');
            $extension    = $image->getClientOriginalExtension();
            $filename     = time() . '.'.$extension;
            $image_resize = \Image::make($image->getRealPath());
            $image_resize->resize(427 ,320);
            $image_resize->save(public_path('images/thumbnail/'.$filename));
            $url = 'images/thumbnail/'.$filename;
            $row->thumbnail = $filename;
            $row->thumbnail_url   = $url;
        }

        $run = $row->update();

        if($run){
            Alert::success('Success Title', $request->title. ' Updated SuccessFully');
            return redirect()->route('property.index');
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
        $row = Property::find($id);
        PropertyToImage::where('property_id',$id)->delete();
        $run = $row->delete();
        if ($run){
            return "Property Deleted";
            // Alert::success('Success Title', 'Property deleted SuccessFully');
            // return redirect()->back();
        }
    }


    public function upload_images(Request $request)
    {
        foreach($request->images as $key => $image){
            $filename    = $request->images[$key]->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(350,350);
            $image_resize->save(public_path('images/property/'.$filename));
            $url = 'images/property/'.$filename;
            PropertyToImage::create([
                'property_id' => $request->property_id,
                'image'      => $filename,
                'url'        => $url
            ]);
        }
        Alert::success('Success Title', 'Images Upload SuccessFully');
        return redirect()->route('property.index');
    }
}
