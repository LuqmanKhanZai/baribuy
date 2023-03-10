@extends('layouts.admin_app2')

{{-- For Title --}}
@section('title')  Property Form @endsection

{{-- Main Content --}}
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Property Update Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>Property Update</a>
            </li>
            <li class="active">
                <strong>Property Update Form</strong>
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
            <form action="{{route('property.update',$property->id)}}" method="POST" id="supplierform" enctype="multipart/form-data">
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
                                    <option value="{{$category->id}}" {{($category->id == $property->category_id)? 'selected' : ''}}>{{$category->name}}</option>
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
                                <option value="{{$country->id}}" {{($country->id == $property->country_id)? 'selected' : ''}}>{{$country->name}}</option>
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
                                <option value="{{$state->id}}" {{($state->id == $property->state_id)? 'selected' : ''}}>{{$state->name}}</option>
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
                                <option value="{{$city->id}}" {{($city->id == $property->city_id)? 'selected' : ''}}>{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$property->title}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bed</label>
                            <input type="number" class="form-control" name="bed"  value="{{$property->bed}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Bath</label>
                            <input  type="number" name="bath" class="form-control"  value="{{$property->bath}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Square Feet</label>
                            <input  type="number" name="square_feet" class="form-control"  value="{{$property->square_feet}}">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Purchase Price</label>
                            <input  type="number" name="purchase_price" class="form-control"  value="{{$property->purchase_price}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Repair Reserves</label>
                            <input  type="number" name="repair_price" class="form-control"  value="{{$property->repair_price}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Closing Cost</label>
                            <input  type="number" name="closing_cost" class="form-control"  value="{{$property->closing_cost}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Total Amount</label>
                            <input  type="number" name="total_amount" class="form-control"  value="{{$property->total_amount}}">
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Per Share</label>
                            <input  type="number" name="per_share" class="form-control"  value="{{$property->per_share}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Total Share</label>
                            <input  type="number" name="total_share" class="form-control"  value="{{$property->total_share}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Hold Period</label>
                            <input  type="number" name="hold_period" class="form-control"  value="{{$property->hold_period}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Management Fee</label>
                            <input  type="number" name="management_fee" class="form-control"  value="{{$property->management_fee}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Property Taxes</label>
                            <input  type="number" name="monthly_tax" class="form-control"  value="{{$property->monthly_tax}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Property Insurance</label>
                            <input  type="number" name="monthly_tax" class="form-control"  value="{{$property->monthly_tax}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Monthly Rent</label>
                            <input  type="number" name="monthly_rent" class="form-control"  value="{{$property->monthly_rent}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input  type="file" name="thumbnail" class="form-control"  value="{{$property->thumbnail}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description"  rows="3" class="form-control">{{$property->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Location</label>
                            <input  type="text" name="location" class="form-control" value="{{$property->location}}">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <label for="">&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Update Property') }}
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

                    'item_id[]': {
                        required: true,
                        min : 1
                    },
                    'stock[]' : {
                        required: true,
                        // min: 1
                    },
                    // 'price[]' : {
                    //     required: true,
                    //     min: 1
                    // },
                    'purchase_price[]' : {
                        required: true,
                        min: 1
                    },
                    'quantity[]' : {
                        required: true,
                        min: 1
                    },
                    remain: {
                        required: true,
                        min: 1
                    },

                    description:{
                        required : true,
                        minlength: 10
                    },
                },
            messages: {
                user_id:"Supplier Name is required",
                'stock[]': "Stock Value Is 0",
                'price[]': "Select item to set Price",
                'purchase_price[]': "Enter Purchase Price",
                'quantity[]': "Enter Quantity",
                'item_id[]': "Item Name Is Required",
                remain:"Please Click On the Paid Input",
                description:"Please Enter A description To find the invoice minimum 10 Character",
            }
        });
    </script>
@endsection
