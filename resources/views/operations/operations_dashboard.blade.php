


@extends('operations.operations_app')

@section('content')
<div class="row">
    <div class="col-lg-12">
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
            <div class="filters m-b-55">
                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                    <select class="js-select2" name="property">
                        <option value="">Approved</option>
                        <option value="">Pending</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                    <select class="js-select2 au-select-dark" name="time">
                        <option selected="selected">All Time</option>
                        <option value="">By Month</option>
                        <option value="">By Day</option>
                    </select>
                    <div class="dropDownSelect2"></div>
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
