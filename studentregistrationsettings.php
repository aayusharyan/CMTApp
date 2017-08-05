<?php
require_once('config.php');
require_once('check_login.php');

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
        <link rel="stylesheet" href="vendors/bower_components/flatpickr/dist/flatpickr.min.css" />

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
                    <h1>Student Registration Information</h1>
                    <small>View and Manage Registration Status for Students.</small>

                    <div class="actions">
                        <a href="users" class="actions__item zmdi zmdi-info" data-toggle="modal" data-target="#modal-info"></a>
                        <a href="domaininfo" class="actions__item zmdi zmdi-refresh"></a>


                    </div>
                </header>


                <div class="card">
                    
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Paper Presenter Registration Status</h3>

                                <br>

                                <div class="form-group">
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Attendee Registration Status</h3>

                                <br>

                                <div class="form-group">
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Paper Presenter Registration Open Date</h3>

                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" placeholder="Pick a date">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Attendee Registration Open Date</h3>

                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" placeholder="Pick a date">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Paper Presenter Registration Close Date</h3>

                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" placeholder="Pick a date">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-block__title">Attendee Registration Close Date</h3>

                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" placeholder="Pick a date">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <br>
                            </div>

                        </div>
                        <button type="button" class="btn btn-warning waves-effect" onclick="location.href='settings'">Cancel</button>
                        <button type="button" class="btn btn-success waves-effect">Save</button>
                    </div>
                </div>



                <!-- Information Modal -->
                <div class="modal fade" id="modal-info" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left">Important Information</h5>
                            </div>
                            <div class="modal-body">
                               This is some serious Business, and this needs to be properly handled. Switching off and on again is not good for the Conference.
                                <!--//TODO: Change (Improve) the Text -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
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
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
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
        <script src="vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
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