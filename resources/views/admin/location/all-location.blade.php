
@extends('admin.private_app')
@section('content')




            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card ">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Country</th>
                                    <th>County</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $location)
                                <tr>
                                    <td>{{$location->partner_id}}</td>
                                    <td>{{$location->country}}</td>
                                    <td>{{$location->county}}</td>
                                    <td>{{$location->location}}</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                          @if ($location->status==1)
                                          <a class="btn btn-success">Active</a>
                                              @else
                                              <a class="btn btn-warning" >In Active </a>
                                              @endif
                                           </div>
                                      </td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-location/'.$location->location_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/show-location/'.$location->location_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-location/'.$location->location_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



@endsection
