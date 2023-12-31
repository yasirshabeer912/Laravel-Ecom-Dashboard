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
    <link href="{{ asset('assets/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-4.7/css/font-awesome.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('assets/admin/vendor/mdi-font/css/material-design-iconic-font.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    {{-- <link href="{{asset('assets/admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('assets/admin/vendor/circle-progress/circle-progress.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('assets/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/css-hamburgers/hamburgers.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/admin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="CoolAdmin">
                                {{-- <img src="images/icon/logo.png" alt="CoolAdmin"> --}}
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('admin/auth') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign
                                    in</button>
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/admin/vendor/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    {{-- <script src="vendor/chartjs/Chart.bundle.min.js"></script> --}}
    <script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
