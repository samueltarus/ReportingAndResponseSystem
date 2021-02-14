


@extends('operations.operations_app')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-8">Security Firm </strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">Names:  {{ Auth::user()->name }}</h5>
                    <h4 class="text-sm-center mt-2 mb-1">Phone Number:   {{ Auth::user()->email }}</h4>
                    <div class="location text-sm-center">
                        <i class="fa fa-user"></i> Responsibility:{{ Auth::user()->role_id }}</div>
                </div>
                <hr>

            </div>
        </div>
    </div>




</div>
@endsection
