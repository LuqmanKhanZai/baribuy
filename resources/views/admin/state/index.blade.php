@extends('layouts.admin_app')

{{-- For Title --}}
@section('title')  State @endsection

{{-- Main Content --}}
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>State List</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>State</a>
            </li>
            <li class="active">
                <strong>State List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="" class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal6" style="margin-top:40px;">Add State</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>State List</h5>
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
                                    <th>Country Name</th>
                                    <th>State Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($states as $key=> $state)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$state->name}}</td>
                                    <td>{{$state->country->name}}</td>
                                    <td id="{{$state->id}}">
                                        @if($state->status == 'Active')
                                        <span class="btn badge badge-info">{{$state->status}}</span>
                                        @else
                                        <span class="btn badge badge-danger">{{$state->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a onclick="StatusUpdate({{$state->id}})" class="btn btn-warning"><i class="fa fa-ban"></i></a>
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
                <h4 class="modal-title">Add State</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('state.store')}}" method="POST" id="form">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country_id" id="" class="form-control">
                                <option value="0" selected disabled>Please Select Country</option>
                                @foreach ($countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
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
                url:'{{url("state/status")}}',
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
