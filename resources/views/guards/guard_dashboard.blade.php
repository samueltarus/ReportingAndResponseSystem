


@extends('guards.guards_app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <!-- RECENT REPORT-->
        <div class="recent-report3 m-b-40">
            <div class="title-wrap">
                <h3 class="title-3">recent reports</h3>
                <div class="chart-info-wrap">
                    <div class="chart-note">
                        <span class="dot dot--red"></span>
                        <span>Approved</span>
                    </div>
                    <div class="chart-note mr-0">
                        <span class="dot dot--green"></span>
                        <span>Pending</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrap">
                <canvas id="recent-rep3-chart"></canvas>
            </div>
        </div>
        <!-- END RECENT REPORT-->
    </div>

</div>

@endsection
