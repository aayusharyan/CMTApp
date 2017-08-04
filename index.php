<?php
session_start();

$error_flag = $_SESSION['isLoginError'] ?? false;
#var_dump ($error_flag);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Please Sign in

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password" href="">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="login__block__body" action="login.php" method="post">
                    <div class="form-group form-group--float form-group--centered">
                        <input type="email" class="form-control" name="login_email">
                        <label>Email Address</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="password" class="form-control" name="login_password">
                        <label>Password</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <button href="index.html" class="btn btn--icon login__block__btn" type="submit"><i class="zmdi zmdi-long-arrow-right"></i></button>
                </form>
                
            </div>

         
            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header palette-Purple bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-login" href="">Already have an account?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <p class="mt-4">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control">
                        <label>Email Address</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <a href="index.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div>

        <?php require('old_ie_warning.php'); ?>
        <!-- Vendors -->
       
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script>
            function notify(from, align, icon, type, animIn, animOut){
                $.notify({
                    icon: icon,
                    title: '',
                    message: 'Please Check the Credentials and Login Again',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                    '</div>'
                });
            }

        </script>
        
        <?php
        if ($error_flag) {
        ?>
            <script>
                notify ("bottom", "center", "", "warning", "animated fadeInUp", "animated fadeOutUp");
            </script>
        <?php
            unset($_SESSION['isLoginError']);
        }
        ?>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>