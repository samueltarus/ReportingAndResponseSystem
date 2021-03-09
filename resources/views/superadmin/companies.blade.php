@extends('superadmin.superadmin_app')


@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Companies</th>
                        <th>Email</th>
                        <th>Phone Number</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $companies)
                    <tr>
                         <td>{{$companies->name}}</td>
                         <td>{{$companies->email}}</td>
                        <td class="process">{{$companies->phone_number}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE                  -->
    </div>
</div>

@endsection
