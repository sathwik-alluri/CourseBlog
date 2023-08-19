


<?php 
//this is for student login
$con = mysqli_connect("localhost","root","", "tnpcell");
 
    if(isset($_POST['submit']))
   {
      $regd = $_POST['registernumber'];
      $password = $_POST['password'];
      $sqlquery="select * from students where register_number='$regd' and Password='$password'";
      $query=mysqli_query($con,$sqlquery) ;
      $c=mysqli_num_rows($query);
      if($c != 0)
      {
        session_start();
        $_SESSION['regd'] = $regd ;
        $_SESSION['LEPWD']=$password;
        // $_SESSION['regd']=$regd;
        echo "<script type='text/javascript'>window.location.href = 'student-dashboard.php';</script>";
      }
      else
  {
   //<?php
      // Sending Alert message using PHP variable.
   $alert = "Invalid Credentials";
   echo "<script type='text/javascript'>alert('$alert');</script>";
   
  }
    }





    // session_start();
    // $_SESSION['regd'] = $regd ;
   // $_SESSION['password']=$userid;
 
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card" >

                            <!-- Logo -->
                            <div class="card-header text-center bg-primary" >
                                <!--<a href="index.html">  -->
                                    <span><img src="assets/images/COURSEBLOG.png" alt="logo" width="100%" height='100%'></span>
                                <!-- </a>  -->
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your Register Number and password to access your Dashboard</p>
                                </div>

                                <form  method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Register Number</label>
                                        <input class="form-control" type="text" id="registernumber" name="registernumber" required="" placeholder="Enter Register Number">
                                    </div>

                                    <div class="mb-3">
                                        <!-- <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>  -->
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password"class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                   <!-- <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>   -->

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" name="submit" type="submit" > Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <!-- <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ms-1"><b>Sign Up</b></a></p> -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer> -->
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html>