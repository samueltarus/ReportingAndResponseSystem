
@extends('admin.private_app')
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
                                    <th>Finding</th>
                                    <th> Recommendation</th>
                                    <th >Recommender</th>
                                    <th>Recomendation Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidences as $incidence)
                                <tr>
                                    <th>{{$incidence->incident_id}}</th>
                                    <td>{{$incidence->investiagtion_statement}}</td>
                                    <td>{{$incidence->investiagtion_recomendation}}</td>
                                    <td>{{$incidence->user_id}}</td>
                                    <td>{{$incidence->created_at}}</td>

                                    <td class="col-lg-2">
                                        <a href="{{url('/edit-incidence/'.$incidence->incidence_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/show-incidence/'.$incidence->incidence_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-incidence/'.$incidence->incidence_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
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
