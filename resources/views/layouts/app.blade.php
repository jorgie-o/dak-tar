<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
     @include('global_partials._head')
</head>
<body class="fixed-left">
    <div id="app">
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
                <div id="app2">
                    <div class="content-page">
                        <!-- Start content -->
                        <div class="content">
                            <div class="mt-3">
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
    </div>
     <!-- Scripts -->
      @include('global_partials._scripts')
        @yield('scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
