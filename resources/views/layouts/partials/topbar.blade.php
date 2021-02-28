<nav class="navbar  navbar-light  bg-glass  navbar-glass-shadow nav-bar-center navbar-expand fixed-top mb-9 " >
    <div class="toggle-icon-wrapper">
        <a class="btn navbar-toggler-humburger-icon navbar-vertical-toggle mr-1 mr-sm-3 mt-2" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></a>

    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="form-group">
                <div class="d-flex mt-2 w-100">
                    <label class="left mt-1 mr-3" for="name">last four characters of the consumer key:</label>
                    <input class="form-control w-25 mb-1 ml-5 " id="name" name="name" type="text" placeholder="{{ substr(Session::get('woo_key'),-4)}}" value="{{ substr(Session::get('woo_key'),-4)}}" readonly>
                </div>
            </div>
        </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{url('/Logout')}} "  class="waves-effect">
                    <div class="d-flex align-items-center"><i class="fa fa-reply-all fa-2x" aria-hidden="true"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
