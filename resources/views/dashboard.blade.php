
@extends('layouts.app')
@section('page-header')
Dashboard
@endsection
@section('content')
 <div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30">Number of patient</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-20">All patients<i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="mb-0"> {{ $patients }} </h2>
                    <p class="text-muted m-b-25"></p>
                </div>
                <div class="progress progress-bar-pink-alt progress-sm mb-0">
                    <div class="progress-bar progress-bar-success" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30">Number of Dispenses</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-danger badge-pill pull-left m-t-20">All Dispenses<i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="mb-0"> {{ $dispenses }} </h2>
                    <p class="text-muted m-b-25"></p>
                </div>
                <div class="progress progress-bar-pink-alt progress-sm mb-0">
                    <div class="progress-bar progress-bar-danger" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">32% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30">Number of Nurses</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-pink badge-pill pull-left m-t-20">All nurses<i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="mb-0"> {{ $nurses }} </h2>
                    <p class="text-muted m-b-25"></p>
                </div>
                <div class="progress progress-bar-pink-alt progress-sm mb-0">
                    <div class="progress-bar progress-bar-pink" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">%20 Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30">Number of doctors</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-pink badge-pill pull-left m-t-20">All doctors<i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="mb-0"> {{ $doctors }} </h2>
                    <p class="text-muted m-b-25"></p>
                </div>
                <div class="progress progress-bar-pink-alt progress-sm mb-0">
                    <div class="progress-bar progress-bar-pink" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">77% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->
@endsection