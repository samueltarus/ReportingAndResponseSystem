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
                            <form enctype="multipart/form-data" action="{{url('admin_save-employee-role',$employees->id)}}" method="post" >

                            @csrf
                            <div class="form-group">
                                <label for="role_id" class=" form-control-label">Role Name </label>
                                <select class="form-control" name="role_id" id="role_id" required>
                                    @foreach ($roles as $roles)
                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
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
