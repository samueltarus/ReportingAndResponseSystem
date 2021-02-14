@extends('admin.private_app')


@section('content')

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" >

                <div class="col-sm-9 mx-auto ">

                    <div class="card">
                        <div class="card-header">

                            <small> News</small>
                            <strong>Assignment</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('save-assignment')}}" method="post" >

                            @csrf

                            <div class="form-group">
                                <label for="assingment_name" class=" form-control-label">Assignment Name</label>
                                <input type="text" placeholder="Enter Assignment Name" class="form-control"   id="assignment_name" name="assingment_name"required>
                            </div>

                            <div class="form-group">
                                <label for="client_id" class=" form-control-label">Client </label>
                                <select class="form-control" name="client_id" id="client_id" required>
                                @foreach ($clients as $client)
                                <option value="{{$client->client_id}}">{{$client->username}}</option>

                                @endforeach
                                </select>

                            </div>


                            <div class="form-group">
                                <label for="location" class=" form-control-label">Assignment Location</label>
                                <input type="text" id="location" name="location" placeholder="Enter location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="number_of_employees" class=" form-control-label">Number of Guards(Employees)</label>
                                <input type="number" id="number_of_employees" name="number_of_employees" placeholder="Enter Number Of Guards" class="form-control" required>
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
