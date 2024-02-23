<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('assets/images/brand-logos/TKA.jpg') }}" class="toggle-dark" alt="logo">
            <img src="{{ asset('assets/images/brand-logos/logo.png') }}" class="desktop-dark" alt="logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide -->
                <li class="slide {{ request()->is('dashboard') ? 'active open' : '' }} ">
                    <a href="{{ route('dashboard.index') }}" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub  {{ request()->is('user*', 'role*', 'permission*') ? 'active open' : '' }} ">
                    <a href="javascript:void(0);" class="side-menu__item  ">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-user side-menu__icon"></i>
                        <span class="side-menu__label">User Management</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 {{ request()->is('user*', 'role*', 'permission*') ? 'active' : '' }}">
                        <li class="slide side-menu__label1 active">
                            <a href="javascript:void(0)">User Management</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('user.index') }}"
                                class="side-menu__item {{ request()->is('user*') ? 'active' : '' }}">User</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('role.index') }}"
                                class="side-menu__item {{ request()->is('role*') ? 'active' : '' }}">Role</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('permission.index') }}"
                                class="side-menu__item {{ request()->is('permission*') ? 'active' : '' }}">Permission
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="slide {{ request()->is('branch*') ? 'active open' : '' }} ">
                    <a href="{{ route('branch.index') }}" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti ti-smart-home side-menu__icon"></i>
                        <span class="side-menu__label">Branch</span>
                    </a>
                </li>
                <li class="slide {{ request()->is('department*') ? 'active open' : '' }} ">
                    <a href="{{ route('department.index') }}" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti ti-menu-2 side-menu__icon"></i>
                        <span class="side-menu__label">Department</span>
                    </a>
                </li>
                <li class="slide {{ request()->is('module*') ? 'active open' : '' }} ">
                    <a href="{{ route('module.index') }}" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti ti-menu-2 side-menu__icon"></i>
                        <span class="side-menu__label">Module</span>
                    </a>
                </li>
                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
