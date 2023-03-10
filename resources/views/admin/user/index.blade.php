@extends('layouts.admin_app')

{{-- For Title --}}
@section('title')  Users List @endsection

{{-- Main Content --}}
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">

        <h2>Users List</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('home')}}">Home</a>
            </li>
            <li>
                <a>Users</a>
            </li>
            <li class="active">
                <strong>Users List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="" class="btn btn-info btn-outline" data-toggle="modal" data-target="#myModal6" style="margin-top:40px;">Add User</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>User List</h5>
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
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $key=> $customer)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->contact}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td id="{{$customer->id}}">
                                            @if($customer->status == 'Active')
                                                <span class="btn badge badge-info">{{$customer->status}}</span>
                                            @else
                                                <span class="btn badge badge-danger">{{$customer->status}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a onclick="StatusUpdate({{$customer->id}})" class="btn btn-warning"><i class="fa fa-ban"></i></a>
                                                <a onclick="CustomerModal({{$customer->id}})" class="btn btn-success"><i class="fa fa-edit"></i></a>
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
                <h4 class="modal-title">Add User</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('user.store')}}" id="form" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{old('contact')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Adress</label>
                            <input type="text" class="form-control" name="address" value="{{old('address')}}">
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
                <h4 class="modal-title">Update Customer</h4>
            </div>
            <div class="modal-body">
                <form  id="form_update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="name" class="form-control" name="name">
                            <input type="hidden" id="id" class="form-control" name="id">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div> 
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="">Adress</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="button" onclick="UpdateCustomer()" class="btn btn-info  btn-block" value="Update">
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

    function StatusUpdate(id){
        $.ajax({
            url:'{{url("user/status")}}',
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

    function CustomerModal(id){
        $.ajax({
            url:'{{url("user/modal")}}',
            data:    {
                "_token"    :"{{csrf_token()}}",
                id:id,
            },
            type: "POST",
            success: function(data){
                $("#ModalUpdate").modal('show');
                $("#name").val(data.name);
                $("#id").val(data.id);
                // $("#email").val(data.email);
                $("#contact").val(data.contact);
                // $("#cnic").val(data.identity);
                $("#address").val(data.address);
            },
            error: function(error){
                toastr.error('Some Thing Went Wrong','ERROR !')
            }
        });
    }

    function UpdateCustomer(){

        var formdata = $('#form_update').serialize();
        $.ajax({
            type : "POST",
            url:'{{url("user/update")}}',
            data: formdata,
            success: function(data){
                $("#ModalUpdate").modal('hide');
                setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                }, 100);
                toastr.success('User Account Updated');
            },
            error: function (error){
                toastr.error('Some Thing Went Wrong','ERROR !')
            }
        });
    }

</script>
@endsection
