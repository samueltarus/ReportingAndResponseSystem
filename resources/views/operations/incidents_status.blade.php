@extends('operations.operations_app')

@section('content')
{{-- <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid"> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-5">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>OB Reference Number</th>
                                    <th>Reported By</th>
                                    <th>Investigation Statement</th>
                                    <th class="text-right">Investigation Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($investigations as $investigations)
                                <tr>
                                    <td>{{$investigations->incident_id}}</td>
                                    <td>{{$investigations->user_id}}</td>
                                    <td>{{$investigations->investiagtion_statement}}</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                          @if ($investigations->investigation_status==1)
                                          <a class="btn btn-danger" href="#">Open Investiagtion

                                              </a>
                                              @elseif($investigations->investigation_status==2)
                                              <a class="btn btn-info" href="#">Recomendation

                                            </a>
                                                                                         @else
                                              <a class="btn btn-warning" href="#">Final Report

                                              </a>
                                              @endif

                                           </div>

                                      </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

@endsection
