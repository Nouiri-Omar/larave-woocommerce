<nav class="navbar navbar-vertical navbar-expand-lg   navbar-inverted navbar-light navbar-card mb-n11  " style="width: auto">
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

        </div>

        <a class="navbar-brand" href="">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="" alt="" width="40" /><span class="text-sans-serif"><span class=" icon-title"></span></span><span class="sticky-sidebar"></span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse collap" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
        <!--- Sidemenu -->

            <!-- Left Menu Start -->
            <ul class="navbar-nav flex-column">
                <!--breadcrumb-->

                <li class="nav-item">
                    <a class="nav-link" href=" {{url('/dashboard/products/create')}} "  class="waves-effect">
                        <div class="d-flex align-items-center">   <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i><span  class="nav-link-text"> Add Product </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">                    <a class="nav-link" href="{{url('/dashboard/products')}}" class="waves-effect">
                        <div class="d-flex align-items-center">  <i class="fa fa-shopping-bag  fa-2x" aria-hidden="true"></i><span class="nav-link-text"> List Products </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard/orders')}}" class="waves-effect">
                        <div class="d-flex align-items-center">  <i class="fa fa-shopping-cart  fa-2x" aria-hidden="true"></i><span class="nav-link-text"> List Orders </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard/customers')}}" class="waves-effect">
                        <div class="d-flex align-items-center"><i class="fa fa-user  fa-2x" aria-hidden="true"></i><span class="nav-link-text"> Our Customers </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{url('/dashboard/customers/create')}} "  class="waves-effect">
                        <div class="d-flex align-items-center"><i class="fa fa-plus fa-2x" aria-hidden="true"></i> <span class="nav-link-text"> Add Customer </span>
                        </div>
                    </a>
                <li class="nav-item">

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
</nav>
