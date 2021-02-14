
@extends('admin.private_app')
@section('content')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>assingment</b></h2>
					</div>
					<div class="col-sm-6">
                    <a href="{{url('create-assingment')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add assingment</span></a>
						<a href="{{url('Assingments')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Manage Category</span></a>
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Assingment Name</th>
                                    <th>Client</th>
                                    <th>Number Of Employees</th>
                                    <th >Location</th>
                                    <th >Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assingments as $assingment)

                                <tr>
                                    <td>{{$assingment->assingment_name}}</td>
                                    <td>{{$assingment->client_id}}</td>
                                    <td>{{$assingment->number_of_employees}}</td>
                                    <td>{{$assingment->location}}</td>

                                    <td>{{$assingment->is_active}}</td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-assingment/'.$assingment->assingment_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/show-assingment/'.$assingment->assingment_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-assingment/'.$assingment->assingment_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
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
