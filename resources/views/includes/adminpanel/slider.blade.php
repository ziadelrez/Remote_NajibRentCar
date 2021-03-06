<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
        <div class="sidebar-brand-icon rotate-n-1">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-30"> Najib Rent <br> Cars  </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('adminpanel.dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ trans('global.mainpage') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading-->


    <!-- Nav Item - Utilities Collapse Menu -->

    <li class="nav-item">
        @can('user_management_access')
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa-fw fas fa-users nav-icon"></i>
                <span>{{ trans('cruds.userManagement.title') }}</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @can('permission_access')
                        <a href="{{ route("adminpanel.permissions.index") }}" class="collapse-item" >
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('cruds.permission.title') }}
                        </a>
                    @endcan

                    @can('role_access')
                        <a href="{{ route("adminpanel.roles.index") }}" class="collapse-item" >
                            <i class="fa-fw fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('cruds.role.title') }}
                        </a>
                    @endcan

{{--                    @can('user_access')--}}
{{--                        <a href="{{ route("adminpanel.users.index") }}" class="collapse-item" >--}}
{{--                            <i class="fa-fw fas fa-user nav-icon">--}}

{{--                            </i>--}}
{{--                            {{ trans('cruds.user.title') }}--}}
{{--                        </a>--}}
{{--                    @endcan--}}
                </div>
            </div>
        @endcan
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        @can('dataentry_access')
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ trans('global.dataentry') }}</span>
        </a>

        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @can('settings_access')
                    <a class="collapse-item" href="{{ route('settings') }}"> <i class="fas fa-cogs"></i>{{ trans('global.generalsettings') }}</a>
                @endcan
                @can('gdef_access')
                    <a class="collapse-item" href="{{ route('gdef-list') }}"> <i class="fas fa-info-circle"></i>{{ trans('global.generalinfo') }}</a>
                @endcan

                @can('branch_access')
                    <a class="collapse-item" href="{{ route('branches-list') }}"><i class="fas fa-code-branch"></i>{{ trans('page-branch.menu.branch-list') }}</a>
                @endcan

            </div>
        </div>
        @endcan
    </li>

     <!-- Divider -->
    <hr class="sidebar-divider">

       <!-- Nav Item - Pages Collapse Menu -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">--}}
{{--            <i class="fas fa-fw fa-folder"></i>--}}
{{--            <span>Pages</span>--}}
{{--        </a>--}}
{{--        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                <a class="collapse-item" href="login.html">Login</a>--}}
{{--                <a class="collapse-item" href="register.html">Register</a>--}}
{{--                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--                <div class="collapse-divider"></div>--}}
{{--                <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                <a class="collapse-item" href="404.html">404 Page</a>--}}
{{--                <a class="collapse-item" href="blank.html">Blank Page</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Nav Item - Charts -->

    <li class="nav-item">
        @can('clients_access')
        <a class="nav-link" href="{{ route("clients-list") }}">
            <i class="fas fa-users-cog"></i>
            <span>{{ trans('page-client.menu.clients') }}</span></a>
        @endcan
    </li>
    <li class="nav-item">
        @can('cars_access')
            <a class="nav-link" href="{{ route("cars-list") }}">
                <i class="fas fa-car"></i>
                <span>{{ trans('page-cars.menu.cars') }}</span></a>
        @endcan
    </li>

{{--    <li class="nav-item">--}}
{{--        @can('contract_access')--}}
{{--            <a class="nav-link" href="{{ route("contracts-list") }}">--}}
{{--                <i class="fas fa-file-signature"></i>--}}
{{--                <span>{{ trans('global.contract') }}</span></a>--}}
{{--        @endcan--}}
{{--    </li>--}}

    <li class="nav-item">
        @can('expenses_access')
            <a class="nav-link" href="{{ route("expenses") }}">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>{{ trans('global.expenses') }}</span></a>
        @endcan
    </li>

    <li class="nav-item">
        @can('booking_access')
            <a class="nav-link" href="{{ route("bookings-list") }}">
                <i class="fas fa-book"></i>
                <span>{{ trans('global.booking') }}</span></a>
        @endcan
    </li>


    <!-- Nav Item - Tables -->
{{--    <li class="nav-item active">--}}
{{--        <a class="nav-link" href="tables.html">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tables</span></a>--}}
{{--    </li>--}}
    <hr class="sidebar-divider">
    <li class="nav-item">
        @can('report_access')
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chart-bar"></i>
            <span>{{ trans('global.reports') }}</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @can('incomingcars_access')
                    <a class="collapse-item" href="{{ route('gdef-list') }}"> <i class="fas fa-th-list"></i>{{ trans('global.incomingcars') }}</a>
                @endcan

                @can('rentedcars_access')
                    <a class="collapse-item" href="{{ route('branches-list') }}"><i class="fas fa-th-list"></i>{{ trans('global.rentedcars') }}</a>
                @endcan

                @can('booking_access')
                    <a class="collapse-item" href="{{ route('bookings-list') }}"> <i class="fas fa-th-list"></i>{{ trans('global.bookedcars') }}</a>
                @endcan

                @can('speedreport_access')
                    <a class="collapse-item" href=""><i class="fas fa-th-list"></i>{{ trans('global.speedreport') }}</a>
                @endcan

            </div>
        </div>
        @endcan
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
