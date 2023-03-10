@extends('layouts.admin_app')
{{-- For Title --}}
@section('title')  Country @endsection
{{-- Main Content --}}
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Country List</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>Country</a>
            </li>
            <li class="active">
                <strong>Country List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal6" style="margin-top:40px;">Add Country</a>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" style="margin-top:40px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach ($errors->all() as $error)
                        <p style="text-align: center;"><strong >{{ $error }}</strong></p>
                    @endforeach
            </div>
        @endif
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Country List</h5>
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
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $key=> $country)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{$country->name}}</td>
                                    <td id="{{$country->id}}">
                                        @if($country->status == 'Active')
                                        <span class="btn badge badge-info">{{$country->status}}</span>
                                        @elseif ($country->status == 'Permanent')
                                        <span class="btn badge badge-primary">{{$country->status}}</span>
                                        @else
                                        <span class="btn badge badge-danger">{{$country->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a onclick="StatusUpdate({{$country->id}})" class="btn btn-warning"><i class="fa fa-ban"></i></a>
                                            <a onclick="ChartModel({{$country->id}})" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('country/delete',$country->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                <h4 class="modal-title">Add Country</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('country.store')}}" method="POST" id="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
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

<div class="modal inmodal fade" id="ModalUpdate" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Update Country</h4>
            </div>
            <div class="modal-body">
                <form  method="POST" action="{{route('country.update')}}">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="categoryname" class="form-control" name="name">
                            <input type="hidden" id="category_id" class="form-control" name="category_id">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-info  btn-block" value="Update">
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script>
    function StatusUpdate(chart_id){
        // alert(chart_id);
        // return false;
        $.ajax({
            url:'{{url("country/status")}}',
            data: {
                "_token"    :"{{csrf_token()}}",
                chart_id:chart_id,
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
                document.getElementById(chart_id).innerHTML=html;

                toastr.success("Status Update");
            },

            error: function(error){
                toastr.error('Some Thing Went Wrong','ERROR !')
            }
        });
    }

    function ChartModel(id){
        $.ajax({
            url:'{{url("country/modal")}}',
            data:    {
                "_token"    :"{{csrf_token()}}",
                id:id,
            },
            type: "POST",
            success: function(data){
                    $("#ModalUpdate").modal('show');
                    $("#categoryname").val(data.name);
                    $("#category_id").val(data.id);
            },
            error: function(error){
                toastr.error('Some Thing Went Wrong','ERROR !')
            }
        });
    }

    // function UpdateChart(){

    //     var formdata = $('#form_update').serialize();
    //     console.log(formdata);
    //     $.ajax({
    //         type : "POST",
    //         url:'{{url("category/update")}}',
    //         data: formdata,
    //         success: function(data){
    //             toastr.success('Account Update');
    //         },
    //         error: function (error){
    //             toastr.error('Some Thing Went Wrong','ERROR !')
    //         }
    //     });
    // }
</script>
@endsection
