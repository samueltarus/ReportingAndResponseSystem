@extends('admin.private_app')

@section('content')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" >

                <div class="col-sm-9 mx-auto ">

                    <div class="card">
                        <div class="card-header">

                            <small> Add</small>
                            <strong>Employee</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('save-client')}}" method="post" >

                            @csrf

                            <div class="form-group">
                                <label for="first_name" class=" form-control-label">First Name</label>
                                <input type="text" id="first_name"  name="first_name" placeholder="Enter Fist  Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class=" form-control-label">Last Name</label>
                                <input type="text" id="last_name"  name="last_name" placeholder="Enter Fist  Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class=" form-control-label">Email</label>
                                <input type="email" id="email"  name="email" placeholder="Enter Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class=" form-control-label">Phone Number</label>
                                <input type="number" id="phone_number" name="phone_number" placeholder="Enter Phone Number" class="form-control" required>
                            </div>
                                <div class="form-group">
                                    <label for="is_active" class="form-check-label ">
                                        <input type="radio" id="is_active" name="is_active" value="1" class="form-check-input">Active

                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="is_active" class="form-check-label ">

                                        <input type="radio" id="is_active" name="is_active" value="0" class="form-check-input">In Active
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


            </div>

        </div>
    </div>
</div>

@endsection
