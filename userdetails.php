<?php
require_once('config.php');
require_once('check_login.php');
require_once('functions/get_student_details.php');

if (!(isset ($_GET['id']))) {
    header('location: registrations');
} else {
    $student_details = get_student_details($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
        <style>
            .no-margin-below {
                margin-bottom: 0px !important;
            }
            .right {
                text-align: right;
            }
        </style>
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>



            <?php
            require_once('include_header.php');
            require_once('include_sidenav.php');
            ?>


            <section class="content">
                <header class="content__title">
                    <h1>User Details</h1>
                    <small>View and Manage details of the Student.</small>

                    <div class="actions">
                        <button type="button" onclick="location.href='javascript:history.go(-1)'" class="btn btn-outline-warning waves-effect">Go Back to List</button>
                        <a onclick="window.location.reload()" class="actions__item zmdi zmdi-refresh"></a>

                    </div>
                </header>

                <div class="card">

                    <div class="card-header">
                        <h2 class="card-title">View Information</h2>
                        <small class="card-subtitle">View information of the Student.</small>
                    </div>

                    <div class="card-block">
                        <p class="lead">
                            ID: <a href="userdetails?id=<?= $student_details->uid; ?>"><?= $student_details->uid; ?></a><br />
                            <br />
                            Name: <?= $student_details->name; ?><br />
                            EMail: <a href="sendmail?id=<?= $student_details->uid; ?>"><?= $student_details->email; ?></a><br />
                            Phone: <?= $student_details->phone; ?><br />
                            <br />
                            Role: <?= ($student_details->role == "P")?"Presenter":"Attendee"; ?>
                        </p>
                    </div>

                </div>
                <div class="card">

                    <div class="card-header">
                        <h2 class="card-title">View Activity</h2>
                        <small class="card-subtitle">View and Manage Activity of the Student.</small>
                    </div>

                    <div class="card-block">
                        
                    </div>

                </div>
                <div class="card">

                    <div class="card-header">
                        <h2 class="card-title">Manage Settings</h2>
                        <small class="card-subtitle">Manage settings of the Student.</small>
                    </div>

                    <div class="card-block">
                        <button type="button" class="btn btn-outline-primary">Send Mail</button>
                        &emsp;
                        <button type="button" class="btn btn-outline-warning">Block User</button>
                        
                    </div>

                </div>


             
                <?php
                require_once('include_footer.php');
                ?>
            </section>
        </main>

        <?php
        require_once('old_ie_warning.php');
        ?>
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="demo/js/flot-charts/curved-line.js"></script>
        <script src="demo/js/flot-charts/line.js"></script>
        <script src="demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="demo/js/other-charts.js"></script>
        <script src="demo/js/jqvmap.js"></script>

        <!-- Vendors: Data tables -->
        <script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>


        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>


        

    </body>
</html>
<?php
require_once('functions/analytics.php');
?>