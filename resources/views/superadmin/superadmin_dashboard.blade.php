


@extends('superadmin.superadmin_app')

@section('content')
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">{{Auth::user()->count()}}</h2>
                    <span class="desc">Active  Users</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">{{ $companies->count() }}</h2>
                    <span class="desc">Companies Registered</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">{{ $incidences->count() }}</h2>
                    <span class="desc">Cases Reported</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">{{ $investigations->count() }}</h2>
                    <span class="desc">Completed Investigations</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">{{ $users->count() }}</h2>
                    <span class="desc">Total Users</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card">
    <div class="card-body">
        <div class="chart-container">
            <div class="chart has-fixed-height" id="bars_basic"></div>
        </div>
    </div>
</div>
{{--
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
                        <th>Complete Report</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidences as $incidence)
                    <tr>
                        <td>{{$incidence->incident_id}}</td>
                        <td class="process">{{$incidence->user_id}}</td>
                        <td>{{$incidence->incident_type}}</td>
                        <td>{{$incidence->incident_description}}</td>
                        <td class="denied">{{$incidence->created_at}}</td>
                        <td class="col-lg-3">
                             <a href="{{URL::to('/incident-report/'.$incidence->incident_id)}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to PDF</span></a>

                        </td>
                        <td class="col-lg-2">
                            <a href="{{URL::to('/summary-report/'.$incidence->incident_id)}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to PDF</span></a>

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
{{-- {!! $incidences->render() !!} --}}

</div>



@endsection

