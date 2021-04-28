




@extends('operations.operations_app')

@section('content')

    <div class="container">
        <section class="content-header">

            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Incidents</h1>
                  <hr>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">

                    {{-- <li class="breadcrumb-item"><a href="{{ action('TenantController@index')}}" class="btn btn-secondary">Home</a></li> --}}

                    {{-- <li class="breadcrumb-item"><a href="{{ action('TenantController@create')}}" class="btn btn-secondary">Add New Tenant</a></li> --}}
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>



        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Incidents</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>OB Reference Number</th>
                    <th>Reported BY Guard</th>
                    <th>Incident Type</th>
                    <th>Incident Description</th>
                    <th>Parties Involved</th>
                    <th>Incident Witness</th>
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
                    <td>{{$incidence->name_of_parties_involved}}</td>
                    <td>{{$incidence->name_of_witness}}</td>
                    <td class="denied">{{$incidence->created_at}}</td>

                    <td class="col-lg-2">
                             <a href="{{URL::to('/summary-report/'.$incidence->incident_id)}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to PDF</span></a>

                        </td>
                <tr>
                    @endforeach

                </tbody>
            </table>

          </div>

          <hr>

          <div class="card-header">
            <h3 class="card-title">  Investigations</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>

          <hr>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Investigation Carried By</th>
                    <th>Investigation Statement</th>
                    <th>Investigation Recomendation</th>
                    <th>Investigation Status</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($investigations  as $investigation)
                <tr>
                    <td class="process">{{$investigation->user_id}}</td>
                    <td>{{$investigation->investiagtion_statement}}</td>
                    <td>{{$investigation->investiagtion_recomendation}}</td>
                    <td>{{$investigation->investigation_status}}</td>

                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    {{-- <a href="{{route('tenant.edit',$tenant->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a> --}}
                      {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a> --}}
                    </div>
                  </td>
                <tr>
                    @endforeach

                </tbody>
            </table>
          </div>
          {!! $incidences->render() !!}


        </div>
        <!-- /.card -->

    </div>



</div>
@endsection






