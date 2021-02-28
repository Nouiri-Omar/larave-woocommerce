<!DOCTYPE html>
<html lang="en">

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
<div class="accountbg"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center"><i class="fas fa-business-time fa-10x" style="color: #0eb4fd" ></i></div>
                    <h5 class="font-18 text-center">Please provide your Credentials</h5>
                    <form class="form-horizontal m-t-30" action="{{url('/Connection')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col-12">
                                <label>Store Link</label>
                                <input name="host" class="form-control" type="text" required="" placeholder="Host">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <label>API customer key</label>
                                <input name="key" class="form-control" type="password" required="" placeholder="api key">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <label>API Secret key</label>
                                <input name="secret" class="form-control" type="password" required="" placeholder="secret key">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
