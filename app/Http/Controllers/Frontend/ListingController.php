<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function index()
    {
        $properties = Property::where('active', 1)->with('images')->get();
        // ->paginate(15);
        $categories=  Category::where('status','=','Active')->get();
        return view('frontendPages.listings', compact('properties','categories'));
    }
}
