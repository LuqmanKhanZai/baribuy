@extends('layouts.admin_app')

{{-- For Title --}}
@section('title')  Property Form @endsection

{{-- Main Content --}}
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Property Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>Property</a>
            </li>
            <li class="active">
                <strong>Property Form</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="{{route('property.index')}}" class="btn btn-info btn-outline" style="margin-top:40px;">Property List</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mb-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <form action="{{route('property.store')}}" method="POST" id="supplierform" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            @php
                            date_default_timezone_set("Asia/Karachi");
                                $date = date('Y-m-d');
                            @endphp
                            <label for="">Date</label>
                            <input type="date" class="form-control" value="{{$date}}" name="date">
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="0" selected disabled>Please Select Category</option>
                                @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country_id" id="" class="form-control">
                                <option value="0" selected disabled>Please Select Country</option>
                                @foreach ($countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">State</label>
                            <select name="state_id" id="" class="form-control">
                                <option value="0" selected disabled>Please Select State</option>
                                @foreach ($states as $state )
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">City</label>
                            <select name="city_id" id="" class="form-control">
                                <option value="0" selected disabled>Please Select City</option>
                                @foreach ($cities as $city )
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bed</label>
                            <input type="number" class="form-control" name="bed">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bath</label>
                            <input  type="number" name="bath" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Square Feet</label>
                            <input  type="number" name="square_feet" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Purchase Price</label>
                            <input  type="number" name="purchase_price" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Repair Reserves</label>
                            <input  type="number" name="repair_price" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Closing Cost</label>
                            <input  type="number" name="closing_cost" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Total Amount</label>
                            <input  type="number" name="total_amount" class="form-control">
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Per Share</label>
                            <input  type="number" name="per_share" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Total Share</label>
                            <input  type="number" name="total_share" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Hold Period</label>
                            <input  type="number" name="hold_period" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Management Fee</label>
                            <input  type="number" name="management_fee" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Property Taxes</label>
                            <input  type="number" name="monthly_tax" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Property Insurance</label>
                            <input  type="number" name="monthly_tax" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Monthly Rent</label>
                            <input  type="number" name="monthly_rent" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input  type="file" name="thumbnail" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea name="about"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                    
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Property Available</label>
                        <div class="i-checks">
                            <label> <input type="radio" checked="" value="1" name="available"> <i></i> Yes </label>
                        </div>
                        <div class="i-checks">
                            <label> <input type="radio" value="0" name="available"> <i></i> No </label>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <label for="">&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Add Property') }}
                            </button>
                        </div>
                    </div>
                </div>
               
            </form>
        </div>
    </div>

</div>






@endsection

@section('script')
    <script>
        $("#supplierform").validate({
            rules: {
                    user_id: {
                        required: true,
                        min: 1
                    },
                    category_id:{
                        required : true,
                    },
                    city_id:{
                        required : true,
                    },
                    state_id: {
                        required: true,
                    },
                    country_id:{
                        required : true,
                    },
                    title:{
                        required : true,
                    },
                    bed:{
                        required : true,
                    },
                    bath:{
                        required : true,
                    },
                    squar_feet:{
                        required : true,
                    },
                    purchase_price:{
                        required : true,
                    },
                    repair_price:{
                        required : true,
                    },
                    closing_cost:{
                        required : true,
                    },
                    total_amount:{
                        required : true,
                    },
                    total_share:{
                        required : true,
                    },
                    per_share:{
                        required : true,
                    },
                    hold_period:{
                        required : true,
                    },
                    management_fee:{
                        required : true,
                    },
                    monthly_tax:{
                        required : true,
                    },
                    monthly_rent:{
                        required : true,
                    },
                    about:{
                        required : true,
                    },
                    thumbnail:{
                        required : true,
                    },
                    location:{
                        required : true,
                    },
                    description:{
                        required : true,
                    },
                    
                },
            messages: {
                user_id:"Supplier Name is required",
                remain:"Please Click On the Paid Input",
                description:"Please Enter A description To find the invoice minimum 10 Character",
            }
        });
    </script>
@endsection
