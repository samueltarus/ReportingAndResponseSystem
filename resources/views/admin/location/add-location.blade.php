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
                                    <form method="POST" action="{{url('save-location')}}">
                                      @csrf
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input  id="country" name="country" value="{{ old('Country') }}" class="au-input au-input--full" type="text" name="country" placeholder="Country" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="county">County</label>
                                            <input  id="county" name="county" value="{{ old('COunty') }}" class="au-input au-input--full" type="text" name="county" placeholder="County" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input  id="location"  class="au-input au-input--full" type="text" name="location" placeholder="Location" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active" class="form-check-label ">
                                                <input type="radio" id="status" name="status" value="1" class="form-check-input">Active
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active" class="form-check-label ">
                                                <input type="radio" id="status" name="status" value="0" class="form-check-input">In Active
                                            </label>
                                        </div>



                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> {{ __('Add Location') }}</button>

                                    </form>

                                </div>


                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection
