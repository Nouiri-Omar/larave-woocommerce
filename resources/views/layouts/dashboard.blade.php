<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="{{asset('assets/js/config.navbar-vertical.min.js')}}"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet">

</head>

<body>
<header>@include('layouts.partials.sidebar')
@include('layouts.partials.topbar')
<!-- Left Sidebar End -->
</header>
    <!-- Begin page -->
    <div id="wrapper" style="margin-top: 5rem">
          <!-- Top Bar Start -->
<!-- Top Bar End -->

        <!-- Left Sidebar Start -->

        <!-- Content -->
        <main class="main my-10 mr-10  ">

            <div class="container" data-layout="">
                <div class="content d-flex flex-row ">
                    <div class="row justify-content-lg-start mr-lg-n1 mt-lg-n8  mb-9  w-100 h-100" >
                        <div class="col-lg-12  mb-   " id="top">
                @yield('content')
                        </div>
                    </div>
                </div>
            </div>
                    <footer class="footer">
                        © 2021 GINF3 <span class="d-none d-sm-inline-block"> - Atelier E-commerce | Nouiri Omar </span>.
                    </footer>
        </main>
            </div>

    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset(('assets/js/bootstrap.min.js'))}}"></script>
    <script src="{{asset('assets/lib/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/lib/@fortawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/lib/stickyfilljs/stickyfill.min.js')}}"></script>
    <script src="{{asset('assets/lib/sticky-kit/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/lib/is_js/is.min.js')}}"></script>
    <script src="{{asset('assets/lib/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/lib/prismjs/prism.js')}}"></script>
    <script src="{{asset('assets/lib/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>

</body>

</html>
