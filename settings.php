<?php
require_once('config.php');
require_once('check_login.php');
require_once('functions/get_total_users.php');
require_once('functions/get_traffic_analytics.php');
require_once('functions/get_visit_analytics.php');
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
                    <h1>Settings</h1>
                    <small>View and Manage Settings of the Conference.</small>

                    <div class="actions">
                        <a href="settings" class="actions__item zmdi zmdi-refresh"></a>

                    </div>
                </header>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Student Registration Settings</h2>
                        <small class="card-subtitle">View and Update Settings for Student Registrations</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='domaininfo'">Domain Information</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-warning" onclick="location.href='collegeinfo'">College Information</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-danger" onclick="location.href='studentregistrationsettings'">Registration Status</button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Paper Presentee and Reviewer Settings</h2>
                        <small class="card-subtitle">View and Update Settings for Paper Presentation</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-outline-primary">Paper Acceptance Status</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-warning" onclick="location.href='collegeinfo'">Reviewer Settings</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-danger" onclick="location.href='studentregistrationsettings'">Something Else</button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Mail Templates</h2>
                        <small class="card-subtitle">View and change the Default Mail Templates</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='domaininfo'">New Registration</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-warning" onclick="location.href='collegeinfo'">Something</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-danger" onclick="location.href='studentregistrationsettings'">Something Else</button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Admin Settings</h2>
                        <small class="card-subtitle">View and Update Settings for Administrator Controls</small>
                    </div>

                    <div class="card-block">
                        <div class="btn-demo">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='domaininfo'">Add New</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-warning" onclick="location.href='collegeinfo'">Change Permissions</button>
                            &emsp;
                            <button type="button" class="btn btn-outline-danger" onclick="location.href='studentregistrationsettings'">Remove</button>
                        </div>
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