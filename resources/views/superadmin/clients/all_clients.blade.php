
@extends('superadmin.superadmin_app')
@section('content')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Clients</b></h2>
					</div>
					<div class="col-sm-6">
                    <a href="{{url('create-client')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add Employee</span></a>
						<a href="{{url('Clients')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Manage Employees</span></a>
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th> Email</th>
                                    <th> Phone Number</th>
                                    <th >Status</th>

                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{$client->username}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->phone_number}}</td>
                                    <td>{{$client->is_active}}</td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/admin_edit-client/'.$client->client_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/admin_show-client/'.$client->client_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/admin_delete-client/'.$client->client_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
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



@endsection
