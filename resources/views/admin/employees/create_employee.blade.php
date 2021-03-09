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
                                    <form method="POST" action="{{url('save-employee')}}">
                                      @csrf
                                        <div class="form-group">
                                            <label for="name">Username</label>
                                            <input  id="name" name="name" value="{{ old('name') }}" class="au-input au-input--full" type="text" name="name" placeholder="username" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input  id="email" name="email" value="{{ old('email') }}" class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input  id="password"  class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm"> Confirm Password</label>
                                            <input  id="password-confirm"  class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password" required>
                                        </div>


                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> {{ __('Register') }}</button>

                                    </form>

                                </div>


                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection
