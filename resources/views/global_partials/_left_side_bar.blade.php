<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="/product_images/user.png" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
            </div>
            <h5><a href="#">{{Auth::user()->first_name }} {{ Auth::user()->last_name }}</a> </h5>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-power"></i>{{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard</span> </a>
                </li>
                 <li>
                    <a href="/map" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Sales Map</span> </a>
                </li>
                <li>
                    <a href="/notifications" class="waves-effect"><i class="mdi mdi-bell-outline notification"></i> <span> Notifications </span> </a>
                </li>
                <li>
                    <a href="/leads" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Leads & Sales </span> </a>
                </li>

                <li>
                    <a href="/agents" class="waves-effect"><i class="mdi mdi-view-list"></i> <span> Agents </span> </a>
                </li>
                <li>
                    <a href="/branches" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Branches </span> </a>
                </li>

                <li>
                    <a href="/products" class="waves-effect"><i class="mdi mdi-google-pages"></i> <span> Products</span> </a>
                </li>
                <li>
                    <a href="/supervisors" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Supervisors</span> </a>
                </li>

                <li>
                    <a href="/roles" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i> <span> Access Control</span> </a>
                </li>

                <li>
                    <a href="/faqs" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> FAQs</span> </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

         <img src="/product_images/logo.png" alt="user-img" title="Mat Helme" class="img-responsive" style="width: 80%; height: 60px;
         margin-top: 60px; margin-right: 20px; margin-left: 20px;">
         <p class="text-center" style="color: white; margin-top: 10px">{{ date('Y') }} © BrightLife.</p>
    </div>
</div>
<!-- Left Sidebar End -->