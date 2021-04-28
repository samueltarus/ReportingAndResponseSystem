@extends('superadmin.superadmin_app')


@section('content')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" >

                <div class="col-sm-9 mx-auto ">

                    <div class="card">
                        <div class="card-header">

                            <small> Assign</small>
                            <strong>Company</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('admin_save-employee-company',$employees->id)}}" method="post" >

                            @csrf

                            <div class="form-group">
                                <label for="security_company" class=" form-control-label">Security Company Name </label>
                                <select class="form-control" name="security_company" id="security_company" required>
                                    @foreach ($companies as $companies)
                                    <option value="{{$companies->id}}">{{$companies->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>


                         </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>


@endsection
