<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>


        <!-- Fontfaces CSS-->
        <link href="{{asset('private/css/font-face.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('private/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('private/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('private/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{asset('private/vendor/animsition/animsition.min.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('private/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/slick/slick.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/select2/select2.min.css" rel="stylesheet')}}" media="all">
        <link href="{{asset('private/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{asset('private/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h4>Kenya Security Industry Association</h4>
                            <a href="#">


                                 <img src="  {{ URL::asset('/private/images/icon/login.jpg') }}">
                                 <br>
                                 <hr>
                                 <b>{{ __('Login') }}</b>

                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                 {{ csrf_field() }}

                                 <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Login') }}</button>
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> --}}
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{ route('register') }}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

      <!-- Jquery JS-->
        <script src="{{asset('private/vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('private/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('private/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('private/vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{asset('private/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('private/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('private/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('private/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('private/vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('private/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('private/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('private/vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('private/vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{asset('private/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
