@extends('layouts.admin_app')

{{-- For Title --}}
@section('title')  Property List @endsection

{{-- Main Content --}}

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Property List</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>Property</a>
            </li>
            <li class="active">
                <strong>Property List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="{{route('property.create')}}" class="btn btn-info btn-outline" style="margin-top:40px;">Add Property</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Property List</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Bed</th>
                                    <th>Bath</th>
                                    <th>Square Feet</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $key=> $property)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td title="Contact = {{$property->title}} |  Location = {{$property->location
                                        }}"><a href="#"><strong>{{$property->title}}</strong></a> </td>
                                        <td>{{$property->bed}}</td>
                                        <td>{{$property->bath}}</td>
                                        <td>{{$property->square_feet}}</td>
                                        <td>{{$property->description}}</td>
                                        <td>
                                            @if($property->images)
                                                <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#PropertyImages" onclick="PropertyImages({{$property->images}})">Check</a>
                                            @endif
                                            <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal6" onclick="PassId({{$property->id}})">Upload Images</a>
                                            <!-- @if($property->status == 'Active')
                                            <span class="btn badge badge-info">{{$property->status}}</span>
                                            @else
                                            <span class="btn badge badge-danger">{{$property->status}}</span>
                                            @endif -->
                                        </td>
                                        <td>

                                            <div class="btn-group btn-group-xs">
                                                <a onclick="PropertyDetailsShow({{$property}})" data-toggle="modal" data-target="#PropertyDetailsShow" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a onclick='PropertyDelete({{$property->id}})' class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="{{route('property.edit',$property->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Images  Upload -->
<div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Add Images</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('property.upload_images')}}" method="POST" id="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Images</label>
                            <input type="hidden" class="form-control" name="property_id" id="property_id">
                            <input type="file" class="form-control" name="images[]" multiple="multiple">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-info  btn-block" name="submit" value="Save">
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Image Upload -->

<!-- Get Images -->
<div class="modal inmodal fade" id="PropertyImages" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Property Images</h4>
            </div>
            <div class="modal-body">
                <div class="ibox">
                    <div class="ibox-content">
                        <!-- <h3>Product Images</h3> -->
                        <div class="user-friends" id="ProductImages">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Get Images -->


<!-- Property Detail Show Start -->
<div class="modal inmodal fade" id="PropertyDetailsShow" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-lg-12">
                    <h5>Property Details</h5>
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Category</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                        </tr>
                                        <tr>
                                            <td id="category"></td>
                                            <td id="country"></td>
                                            <td id="state"></td>
                                            <td id="city"></td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="contact-box">
                                    <a href="#">
                                        <div class="lightBoxGallery">
                                            <a href="" title="Image from Unsplash" data-gallery="">
                                                <img src="{{asset('admin_file/img/gallery/1.jpg')}}" width="100%" height="200">
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="m-t-xs font-bold" id="title"></div>
                                                <div class="m-t-xs font-bold" id="about">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                        Nesciunt ad dignissimos sapiente, non, corporis laboriosam possimus eius blanditiis 
                                                    error voluptates veritatis fugiat sint inventore ex aut, suscipit porro incidunt maiores!</p>
                                                </div>
                                        </div>
                                        <p class="font-bold">Description : <strong id="description"></strong></p>
                                        <p class="font-bold">Location : <strong id="location"></strong></p>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ibox contact-box">
                                    <h3 class="text-center">Property Images</h3>
                                    <div class="ibox-content">
                                        <div class="user-friends" id="PropertyImagesSHow">
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox contact-box">
                                    <h3 class="text-center">Property Details</h3>
                                    <div class="ibox-content">
                                        <p>bed : <strong id="bed"></strong></p>
                                        <p>bath : <strong id="bath"></strong></p>
                                        <p>Square Feet : <strong id="square_feet"></strong></p>
                                        <p>Purchase Price :<strong id="purchase_price"> </strong></p>
                                        <p>Repair Reserves :<strong id="repair_price"> </strong></p>
                                        <p>Total Amount :<strong id="total_amount"></strong></p>
                                        <p>Per Share :<strong id="per_share"> </strong></p>
                                        <p>Total Share :<strong id="total_share"> </strong></p>
                                        <p>Hold Period :<strong id="hold_period">  </strong></p>
                                        <p>Management Fee : <strong id="management_fee"></strong></p>
                                        <p>Property Taxes : <strong id="monthly_tax"></strong></p>
                                        <p>Property Insurance : <strong id="item_type"></strong></p>
                                        <p>Monthly Rent : <strong id="monthly_rent"></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Property Details Ended -->


<script type="text/javascript">

     function PropertyDetailsShow(property){
        // console.log(property.images);

        // document.getElementById('category').innerHTML = property.category.name;
        // document.getElementById('country').innerHTML = property.country.name;
        // document.getElementById('state').innerHTML = property.state.name;
        // document.getElementById('city').innerHTML = property.city.name;

        // console.log('LUqman', property.images);

        var html = '';
        var counter = 1;
        for(let i=0;i<property.images.length;i++){
              html +=`<a href=""><img alt="image" class="img-circle" src=http://127.0.0.1:8000/`+property.images[i].url+`></a>`;
            counter++;
        }

        document.getElementById('PropertyImagesSHow').innerHTML = html;
        document.getElementById('title').innerHTML = property.title;
        document.getElementById('bed').innerHTML = property.bed;
        document.getElementById('bath').innerHTML = property.bath;
        document.getElementById('square_feet').innerHTML = property.square_feet;
        document.getElementById('purchase_price').innerHTML = property.purchase_price;
        document.getElementById('repair_price').innerHTML = property.repair_price;
        document.getElementById('total_amount').innerHTML = property.total_amount;
        document.getElementById('per_share').innerHTML = property.per_share;
        document.getElementById('total_share').innerHTML = property.total_share;
        document.getElementById('hold_period').innerHTML = property.hold_period;
        document.getElementById('management_fee').innerHTML = property.management_fee;
        document.getElementById('monthly_tax').innerHTML = property.monthly_tax;
        document.getElementById('monthly_insurance').innerHTML = property.monthly_insurance;
        document.getElementById('monthly_rent').innerHTML = property.monthly_rent;
        document.getElementById('location').innerHTML = property.location;
        document.getElementById('description').innerHTML = property.description;

        // Images

    }

    function PassId(property_id){
        document.getElementById('property_id').value = property_id;
    }

    function PropertyImages(images)
    {
        var htm = '';
        var counter = 1;
        for(let i=0;i<images.length;i++){
              htm +=`<a href=""><img alt="image" class="img-circle" src=http://127.0.0.1:8000/`+images[i].url+`></a>`;
            counter++;
        }
        document.getElementById('ProductImages').innerHTML = htm;
    }

    function PropertyDelete(id) {
        swal.fire({
            title             : "Are you sure?",
            text              : "You will not be able to recover this imaginary file!",
            type              : "warning",
            showCancelButton  : true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText : "Yes, delete it!",
        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    type: "GET",
                    url : '{{url("property/delete")}}/' + id,

                    success: function(data){
                        // console.log(data)
                    // $('#default-ordering').DataTable().ajax.reload();
                    // toastr.error('Some Thing Went Wrong','ERROR !')
                    swal.fire("Success", " Property delted successfully", "success");
                    location.reload();
                    },
                        error: function (error){
                        toastr.error('Some Thing Went Wrong','ERROR !')
                    }
                });
            }else {
                Swal.fire('Property not deleted', '', 'info')
            }
        });
    }
</script>


@endsection


