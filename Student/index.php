<?php
session_start();

$error_flag = $_SESSION['isLoginError'] ?? false;
#var_dump ($error_flag);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Student Login Page</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>

<body class="login-page">
    <!-- Navbar -->
   
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(#)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="login.php">
                        <div class="header header-primary text-center">
                            
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Email Address" name="login_email">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon"> 
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Password" class="form-control" name="login_password"/>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="Register/index" class="link">Create Account</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                               LOL
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                LOL
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                LOL
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                LOL
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Coded by
                    <a href="http://aayushsinha.com/" target="_blank">Aayush Sinha</a>  &amp;
                    <a href="https://www.facebook.com/sudarshan.amirineni" target="_blank">Sudarshan Amirineni</a>
                </div>
            </div>
        </footer>
    </div>
    
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/tether.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="js/now-ui-kit.js" type="text/javascript"></script>

</html>