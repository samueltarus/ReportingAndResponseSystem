




@extends('operations.operations_app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>OB Reference Number</th>
                        <th>Reported BY</th>
                        <th>Incident Type</th>
                        <th>Incident Description</th>
                        <th>Date Reported</th>
                        <th>Print</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidences  as $incidence)
                    <tr>
                        <td>{{$incidence->incident_id}}</td>
                        <td class="process">{{$incidence->user_id}}</td>
                        <td>{{$incidence->incident_type}}</td>
                        <td>{{$incidence->incident_description}}</td>
                        <td class="denied">{{$incidence->created_at}}</td>
                        <td class="col-lg-2">
                             <a href="{{URL::to('/incident-report/'.$incidence->incident_id)}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to PDF</span></a>

                        </td>
                        {{-- <td class="col-lg-3">
                            <a href="{{url('/edit-incidence/'.$incidence->incidence_id)}}" class="btn btn-warning col-lg-5"><span style="margin-right: 10px" class="fas fa-edit"></span>Edit</a>
                             <a href="{{url('/show-incidence/'.$incidence->incidence_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>
                             <a href="{{url('/delete-incidence/'.$incidence->incidence_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
                        </td> --}}
                    </tr>
                    {{-- {{$incidences->links()}} --}}

                    @endforeach


                </tbody>


            </table>

        </div>
        {!! $incidences->render() !!}
        <!-- END DATA TABLE                  -->
    </div>
</div>

</div>
@endsection






