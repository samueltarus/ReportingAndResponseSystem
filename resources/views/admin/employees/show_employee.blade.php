@extends('admin.private_app')
@section('content')
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="{{url('Employees')}}}">Home</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Employee Details</li>
                        </ul>
                    </div>
                <form class="au-form-icon--sm" action="{{url('/Employee')}}" method="GET">
                       @csrf
                        <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for Client &amp; Data...">
                        <button class="au-btn--submit2" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Employee First Name</th>
                                    <th>Employee Last Name</th>
                                    <th> Employee  Email</th>
                                    <th >Employee Phone Number</th>
                                    <th >Employee Status</th>

                                    {{-- <th class="text-center">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone_number}}</td>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <p>Employee Assingments</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    {{-- <th>Client Name</th> --}}

                                    <th> Assingment Name</th>
                                    <th> Location</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assingment as $assingment)
                                <tr>

                                    <td>{{$assingment->assingment_name}}</td>
                                    <td>{{$assingment->location}}</td>
                                    <td>{{$assingment->is_active}}</td>
                                </tr>
                               @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
                {{-- {{ $Invoices->links() }} --}}
            </div>
        </div>
    </div>
</div>


@endsection
