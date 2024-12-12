<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="{{ url('Inicio') }}" class="logo-light">
                    <img src="{{ url('admins/assets/images/logo-light.png') }}" alt="logo" class="logo-lg" height="32">
                    <img src="{{ url('admins/assets/images/logo-light-sm.png') }}" alt="small logo" class="logo-sm" height="32">
                </a>

                <!-- Brand Logo Dark -->
                <a href="{{ url('Inicio') }}" class="logo-dark">
                    <img src="{{ url('admins/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg" height="32">
                    <img src="{{ url('admins/assets/images/logo-dark-sm.png') }}" alt="small logo" class="logo-sm" height="32">
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu waves-effect waves-light rounded-circle">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-2">

            <li class="d-none d-md-inline-block">
                <a class="nav-link waves-effect waves-light" href="#" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen font-size-24"></i>
                </a>
            </li>






            {{-- <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                    data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                    aria-expanded="false">
                    <i class="mdi mdi-bell font-size-24"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);"
                                    class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="px-1" style="max-height: 300px;" data-simplebar>

                        <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                        <!-- item-->

                        <a href="javascript:void(0);"
                            class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i
                                        class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-size-14">Datacorp
                                            <small class="fw-normal text-muted ms-1">1 min ago</small>
                                        </h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar
                                            commented on
                                            Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);"
                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i
                                        class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-size-14">Admin <small
                                                class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">New user
                                            registered</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                        <!-- item-->
                        <a href="javascript:void(0);"
                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i
                                        class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{ url('admins/assets/images/users/avatar-2.jpg') }}"
                                                class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-size-14">Cristina Pride
                                            <small class="fw-normal text-muted ms-1">1 day ago</small>
                                        </h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What
                                            about our
                                            next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                        <!-- item-->
                        <a href="javascript:void(0);"
                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i
                                        class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-size-14">Datacorp</h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar
                                            commented on
                                            Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);"
                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i
                                        class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{ url('admins/assets/images/users/avatar-4.jpg') }}"
                                                class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-size-14">Karen Robinson
                                        </h5>
                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks
                                            good and
                                            awesome design</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center">
                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                        </div>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);"
                        class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li> --}}

            <li class="nav-link waves-effect waves-light" id="theme-mode">
                <i class="bx bx-moon font-size-24"></i>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    {{--@if (auth()->check() && (auth()->user()->foto == '' || auth()->user()->foto == null))
                        <img src="{{ url('admins/storage/users/anonymous.png') }}" alt="user-image" class="rounded-circle">
                    @else
                        <img src="{{ url('admins/storage/' . auth()->user()->foto) }}" alt="user-image" class="rounded-circle">
                    @endif--}}

                    <span class="ms-1 d-none d-md-inline-block">Amigo
                       <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenido!</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i data-lucide="user" class="font-size-16 me-2"></i>
                        <span>Mis datos</span>
                    </a>




                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="#" class="dropdown-item notify-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-lucide="log-out" class="font-size-16 me-2"></i>
                        <span>Cerrar sesion</span>

                        <form method="post" id="logout-form" action="">
                        
                        </form>

                    </a>

                </div>
            </li>

        </ul>
    </div>
</div>