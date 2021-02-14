
@extends('admin.private_app')
@section('content')




            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card ">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Employee Email</th>
                                    <th> Employee Security Company</th>
                                     <th>Employee Roles</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td> <a class="btn btn-success" href="{{URL::to('/assign-employee-company/'.$employee->id)}}">{{$employee->security_company }}
                                        <i class="fas fa-thumbs-up"></i>
                                    </a></td>
                                    {{-- roles assign --}}
                                    
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                          @if ($employee->role_id==1)
                                          <a class="btn btn-danger" href="{{URL::to('/assign-employee-role/'.$employee->id)}}">Admin

                                              </a>
                                              @elseif($employee->role_id==2)
                                              <a class="btn btn-info" href="{{URL::to('/assign-employee-role/'.$employee->id)}}">Guards

                                            </a>
                                            @elseif($employee->role_id==3)
                                            <a class="btn btn-success" href="{{URL::to('/assign-employee-role/'.$employee->id)}}">Operations

                                          </a>
                                              @else
                                              <a class="btn btn-warning" href="{{URL::to('/assign-employee-role/'.$employee->id)}}">No Role

                                              </a>
                                              @endif

                                           </div>

                                      </td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-employee/'.$employee->id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/show-employee/'.$employee->id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-employee/'.$employee->id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



@endsection
