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
    <title>
        @yield('title')
    </title>

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
    <link href="{{ asset('assets/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
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

        @include('admin.inc.mobile')

        @include('admin.inc.sidebar')

        <div class="page-container">

            @include('admin.inc.header')

            <div class="main-content">

                @yield('content')

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
    <script src="{{ asset('assets/admin/vendor/select2/select2.min.js') }}"></script>
    
    <!-- Main JS-->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/admin/js/sweetalert.min.js') }}"></script>

    @if (session('status'))
        <script>
            swal({
                title: "Good job!",
                text: "{{ session('status') }}",
                icon: "success",
                button: "Aww yiss!",
            });
            // swal("{{ session('status') }}");
        </script>
    @endif

</body>

</html>
<!-- end document-->
