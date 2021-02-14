


@extends('admin.private_app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Companies</th>
                        <th>Location</th>
                        <th>status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $companies)
                    <tr>
                         <td>{{$companies->company_name}}</td>
                         <td>{{$companies->location}}</td>
                        <td class="process">{{$companies->status}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE                  -->
    </div>
</div>

@endsection
