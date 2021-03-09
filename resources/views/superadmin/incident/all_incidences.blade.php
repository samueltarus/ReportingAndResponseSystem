@extends('superadmin.superadmin_app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>OB Number</th>
                                    <th>Incident Type</th>
                                    <th>Client</th>
                                    <th> Assingment  Name</th>
                                    <th >Location</th>
                                    <th>Name Affected</th>
                                    <th> Description</th>
                                    <th >Injuries</th>
                                    <th> Witness Names</th>
                                    <th >Withness Statement</th>
                                    <th >Video</th>
                                    <th >Images</th>

                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidences as $incidence)
                                <tr>
                                    <td>{{$incidence->incident_type}}</td>
                                    <td>{{$incidence->client_id}}</td>
                                    <td>{{$incidence->assignment_id}}</td>
                                    <td>{{$incidence->location_id}}</td>
                                    <td>{{$incidence->name_affcted_inividual}}</td>
                                    <td>{{$incidence->description}}</td>
                                    <td>{{$incidence->injuries}}</td>
                                    <td>{{$incidence->witness_name}}</td>
                                    <td>{{$incidence->witness_statement}}</td>
                                    <td>{{$incidence->video}}</td>
                                    <td>{{$incidence->image}}</td>


                                    <td class="col-lg-3">
                                        <a href="{{url('/admin_edit-incidence/'.$incidence->incidence_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/admin_show-incidence/'.$incidence->incidence_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/admin_delete-incidence/'.$incidence->incidence_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
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


@endsection
