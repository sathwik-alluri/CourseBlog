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
                        
                        <li class="dropdown notification-list">

                                <div class="px-3" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-13 fw-normal mt-2"></h5>
                                    <!-- item-->
                        

                        <li class="notification-list d-none d-md-inline-block">
                            <a class="nav-link" href="" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <!-- <span>
                                    <span class="account-user-name">Admin</span>
                                     <span class="account-position">Founder</span> -->
                                <!-- </span>  -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome Admin!</h6>
                                </div>

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a> -->


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
    history.pushState({}, "", "../admin/index.php");
    location.replace("../admin/index.php");
}
</script>
                            </div>
                        </li>
                    </ul>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown">
                        <form>
                            <!--<div class="input-group">
                                <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn btn-primary" type="submit">Search</button>
                            </div>  -->
                        </form>

                      <!--  <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                          <!--  <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                        <!--    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                       <!--     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                       <!--     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                       <!--     <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                           <!--     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                             <!--   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>   -->
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/COURSEBLOG.png" alt="logo" height="65" width="155">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/COURSEBLOG.png" alt="small logo" height="100" width="150">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/COURSEBLOG.png" alt="dark logo" height="22">
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
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <!-- <li class="side-nav-title side-nav-item">Navigation</li> -->

                        
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                                class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-danger text-white float-end"></span>
                                <span> Dashboards </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="admin-dashboard.php">My Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                                aria-controls="sidebarProjects" class="side-nav-link">
                                <i class="mdi mdi-account-group"></i>
                                <span> Students </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                            <ul class="side-nav-second-level">
                                    <li>
                                        <a href="view-students.php">Students List</a>
                                    </li>
                                    <li>
                                        <a href="add-student.php">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="edit-student.php">Edit Student</a>
                                    </li>
                                    <!-- <li>
                                        <a href="edit-student.php">Edit Student</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="crm-management.html">Management</a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>  


                         <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="mdi mdi-book-education"></i>
                                <span> Courses </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                            <ul class="side-nav-second-level">
                                    <li>
                                        <a href="enrolled-students.php">Enrolled Students</a>
                                    </li>
                                    <li>
                                        <a href="edit-courses.php">Edit Course</a>
                                    </li>
                                    <!-- <li>
                                        <a href="edit-student.php">Edit Student</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="crm-management.html">Management</a>
                                    </li> -->
                                </ul>
                            </div>
                        </li> 


                       



                       <!-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                                class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html">Send Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>   -->

                

                        <!--<li class="side-nav-item">
                            <a href="apps-social-feed.html" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Placements </span>
                            </a>
                        </li>  -->

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                                class="side-nav-link">
                                <i class=" mdi mdi-cog"></i>
                                <span> settings </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="add-new-admin.php">Add new admin</a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">change password</a>
                                    </li>
                                    <!-- <li>
                                        <a href="apps-kanban.html">Kanban Board</a>
                                    </li> -->
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

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
