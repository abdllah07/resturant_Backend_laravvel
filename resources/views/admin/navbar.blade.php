<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg"
                    alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg"
                                alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ $user_type = Auth::user()->name }}</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                            class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                        aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/home') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-home"></i>
                    </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/users') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/foodmenu') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </span>
                    <span class="menu-title">Foods</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/chefsPage') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-kitchen-set"></i>
                    </span>
                    <span class="menu-title">Chefs</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/ordersPage') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-kitchen-set"></i>
                    </span>
                    <span class="menu-title">Orders</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/reservationPage') }}">
                    <span class="menu-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </span>
                    <span class="menu-title">Reservation</span>
                </a>
            </li>

        </ul>
    </nav>



</body>

</html>
