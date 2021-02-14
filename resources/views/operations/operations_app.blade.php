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
    <title>Reporting and Tracking  Incidence System</title>


    <!-- Fontfaces CSS-->
    <link href="{{asset('guards-clients/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('guards-clients/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('guards-clients/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('guards-clients/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('guards-clients/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('guards-clients/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('guards-clients/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="  {{ URL::asset('/private/images/icon/login.jpg') }}">
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>

                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg"  />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->name }}</a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>


                                    <div class="account-dropdown__footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->


        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-20 p-b-20">

            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">

                                        <li class="active has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-trophy"></i>Dashboard
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{url('Operations')}}">Dashboard</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" active has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-users"></i>Incidents
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{url('Incidents-Investigations')}}">Incidents</a>
                                                </li>


                                            </ul>
                                        </li>
                                        <li class=" active has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-users"></i>Investigations Status
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{url('Incidents_Status')}}">Investigations Status</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class=" active has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-users"></i>Investigation Report
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{url('Investigation')}}">Investigation</a>
                                                </li>


                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                              @yield('content')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('guards-clients/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('guards-clients/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('guards-clients/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('guards-clients/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('guards-clients/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('guards-clients/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('guards-clients/vendor/select2/select2.min.js')}}">

    </script>

    <!-- Main JS-->
    <script src="{{asset('guards-clients/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
