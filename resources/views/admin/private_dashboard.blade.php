


@extends('admin.private_app')

@section('content')

<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">{{ $employees->count() }}</h2>
                    <span class="desc">Companies Registered</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">{{ $incidence->count() }}</h2>
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

        </div>
    </div>
</section>




</div>
@endsection
