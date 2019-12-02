
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('global_partials._head')
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
    <!-- LOGO -->
                <div class="topbar-left">
                    {{-- <a href="index.html" class="logo"><span>Bright<span>Life</span></span></a> --}}
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">@yield('page-header')</h4>
                            </li>
                        </ul>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            @include('global_partials._left_side_bar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div id="app">
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="mt-3">
                            @include('flash::message')
                        </div>
                        <div class="container-fluid">
                            @yield('content')
                        </div> <!-- container -->
                    </div> <!-- content -->
                    <footer class="footer text-right">
                        
                    </footer>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        @include('global_partials._scripts')
        @yield('scripts')
    </body>
</html>