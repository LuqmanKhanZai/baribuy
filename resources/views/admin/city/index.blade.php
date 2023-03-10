@extends('layouts.admin_app')

{{-- For Title --}}
@section('title')  City @endsection

{{-- Main Content --}}
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>City List</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>City</a>
            </li>
            <li class="active">
                <strong>City List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="" class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal6" style="margin-top:40px;">Add City</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>City List</h5>
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
                                    <th>State Name</th>
                                    <th>City Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $key=> $city)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$city->state->name}}</td>
                                    <td>{{$city->name}}</td>
                                    <td id="{{$city->id}}">
                                        @if($city->status == 'Active')
                                        <span class="btn badge badge-info">{{$city->status}}</span>
                                        @else
                                        <span class="btn badge badge-danger">{{$city->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a onclick="StatusUpdate({{$city->id}})" class="btn btn-warning"><i class="fa fa-ban"></i></a>
                                            <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
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

<div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Add City</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('city.store')}}" method="POST" id="form">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">State</label>
                            <select name="state_id" id="" class="form-control">
                                <option value="0" selected disabled>Please Select State</option>
                                @foreach ($states as $satate )
                                    <option value="{{$satate->id}}">{{$satate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">State Name</label>
                            <input type="text" class="form-control" name="name">
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


    @section('script')
    <script>
        function StatusUpdate(id){
            // alert(id);
            // return false;
            $.ajax({
                url:'{{url("city/status")}}',
                data: {
                    "_token"    :"{{csrf_token()}}",
                    id:id,
                },
                type: "POST",
                success: function(data){
                    var val = data.status
                    var html = '';
                    if(val == "Active"){
                        html = "<span class='btn badge badge-info'>Active</span>";
                    }else{
                        html = "<span class='btn badge badge-danger'>Disabled</span>";
                    }
                    document.getElementById(id).innerHTML=html;

                    toastr.success("Status Update");
                },

                error: function(error){
                    toastr.error('Some Thing Went Wrong','ERROR !')
                }
            });
        }
    </script>
    @endsection

@endsection
