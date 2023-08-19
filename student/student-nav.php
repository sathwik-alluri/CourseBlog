   <!-- ========== Topbar Start ========== -->
   <div class="navbar-custom topnav-navbar">
                <div class="container-fluid detached-nav">

                    <!-- Topbar Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/COURSEBLOG.png" alt="logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/COURSEBLOG.png" alt="small logo" height="22">
                            </span>
                        </a>s

                        <!-- Logo Dark -->
                        <a href="" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/COURSEBLOG.png" alt="dark logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/COURSEBLOG.png" alt="small logo" height="22">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <ul class="list-unstyled topbar-menu float-end mb-0">
        
                        <li class="notification-list d-none d-md-inline-block">
                            <a class="nav-link" href="" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/default.avif" alt="user-image" class="rounded-circle">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                                <!-- item-->
                                <a href="#" onclick="logout()" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>  

                                <script>
function logout() {
    // Clear the session storage (optional, in case you use session storage for other purposes)
    sessionStorage.clear();

    // Clear the local storage (optional, in case you use local storage for other purposes)
    localStorage.clear();

    // Use pushState() to add a new history entry and then replace() to redirect the user to the login page
    history.pushState({}, "", "../student/index.php");
    location.replace("../student/index.php");
}
</script>




                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>  
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/COURSEBLOG.png" alt="logo" height="65" width="155">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/COURSEBLOG.png" alt="small logo" height="22">
                    </span>
                </a>


                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="assets/images/COURSEBLOG.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">


                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                            class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="student-dashboard.php">My Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                                class="side-nav-link">
                                <i class="mdi mdi-book-education"></i>
                                <span class="badge bg-danger text-white float-end"></span>
                                <span> Courses </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="enrolled-courses.php">Enrolled Courses</a>
                                    </li>
                                    <li>
                                        <a href="register-course.php">Register Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="mdi mdi-account"></i>
                                <span> Profile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="edit.php">Edit</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->

                    <!-- Help Box -->
                    <!-- <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                    </div> -->
                    <!-- end Help Box -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
