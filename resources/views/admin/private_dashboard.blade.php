


@extends('admin.private_app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>OB Number</th>
                        <th>Reported BY</th>
                        <th>Incident Type</th>
                        <th>Incident Description</th>
                        <th>Date Reported</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidence as $incidence)
                    <tr>
                        <td>{{$incidence->incident_id}}</td>
                        <td class="process">{{$incidence->user_id}}</td>
                        <td>{{$incidence->incident_type}}</td>
                        <td>{{$incidence->incident_description}}</td>
                        <td class="denied">{{$incidence->created_at}}</td>
                        <td class="col-lg-3">
                             <a href="{{URL::to('/incident-report/'.$incidence->incident_id)}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to PDF</span></a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{-- {!! $incidence->render() !!} --}}
        <!-- END DATA TABLE                  -->
    </div>
</div>

</div>
@endsection
