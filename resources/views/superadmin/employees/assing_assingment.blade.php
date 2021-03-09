@extends('superadmin.superadmin_app')

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
                            <form enctype="multipart/form-data" action="{{url('admin_save-assing')}}" method="post" >

                            @csrf


                            <div class="form-group">
                                <label for="employee_id" class=" form-control-label">Employee </label>
                                <select class="form-control" name="employee_id" id="employee_id" required>
                                @foreach ($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->email}}</option>

                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="assignment_id " class=" form-control-label">Assingement Name </label>
                                <select class="form-control" name="assignment_id" id="assignment_id" required>
                                    @foreach ($assingments as $assingments)
                                    <option value="{{$assingments->assignment_id}}">{{$assingments->assingment_name}}</option>
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
