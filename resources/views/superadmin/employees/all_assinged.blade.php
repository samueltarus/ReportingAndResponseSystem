@extends('superadmin.superadmin_app')

@section('content')



            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card ">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Employee Email</th>
                                    <th> Employee Security Company</th>
                                     <th>Location</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assing_employees as $assing_employees)
                                <tr>
                                    <td>{{$assing_employees->employee_id}}</td>
                                    <td>{{$assing_employees->assignment_id}}</td>

                                    <td>{{$assing_employees->location}}</td>
                                    <td class="col-lg-3">
                                        <a href="{{url('/admin_edit-employee/'.$assing_employees->id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/admin_show-employee/'.$assing_employees->id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/admin_delete-employee/'.$assing_employees->id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection
