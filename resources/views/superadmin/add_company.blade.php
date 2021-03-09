@extends('superadmin.superadmin_app')

@section('content')

            <div class="row" >
                <div class="col-sm-9 mx-auto ">
                    <div class="card">
                        <div class="card-header">
                            <small> Add</small>
                            <strong>Company</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('admin_save-company')}}" method="post" >
                            @csrf

                            <div class="form-group">
                                <label for="company_name" class=" form-control-label">Company Name</label>
                                <input type="text" id="company_name"  name="company_name" placeholder="Enter Company name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="location" class=" form-control-label">Location</label>
                                <input type="text" id="location"  name="location" placeholder="Enter Location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                    <label for="status" class="form-check-label ">
                                        <input type="radio" id="status" name="status" value="1" class="form-check-input">Active

                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="form-check-label ">

                                        <input type="radio" id="status" name="status" value="0" class="form-check-input">In Active
                                    </label>
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


@endsection
