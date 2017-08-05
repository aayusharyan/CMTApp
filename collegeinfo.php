<?php
require_once('config.php');
require_once('check_login.php');
require_once('functions/get_college_list.php');

$error_flag = 0;
if (isset ($_SESSION['errorAddingCollege'])) {
    if ($_SESSION['errorAddingCollege']) {
        $error_flag = 1;
    } else {
        $error_flag = -1;
    }
    unset($_SESSION['errorAddingCollege']);
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
                    <h1>College Information</h1>
                    <small>View and Add Colleges for the Conference Registrations.</small>

                    <div class="actions">
                        <a href="users" class="actions__item zmdi zmdi-info" data-toggle="modal" data-target="#modal-info"></a>
                        <a href="domaininfo" class="actions__item zmdi zmdi-refresh"></a>


                    </div>
                </header>


                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Add New</h2>
                    </div>

                    <div class="card-block">
                        <form class="row" method="post" action="new_college.php">
                            <div class="col-sm-12 col-md-7 col-xl-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="College Name" name="college_name" required>
                                    <i class="form-group__bar"></i>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-5 col-xl-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Short Name (Unique)" name="college_short_name" required>
                                    
                                    <i class="form-group__bar"></i>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-8 col-xl-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="College Code" name="college_code">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-2">
                                <button type="submit" class="form-group btn btn-success">Add New</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">List of Colleges</h2>
                    </div>

                    <div class="card-block" style="padding: 0px;">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>College Code</th>
                                    <th>Short Name</th>
                                    <th>College Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $colleges = get_college_list ();
                                $count = 1;
                                foreach ($colleges as $single_college) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $count++; ?></th>
                                    <td><?= $single_college->code??"-----" ?></td>
                                    <td><?= $single_college->short_name; ?></td>
                                    <td><?= $single_college->full_name ?></td>
                                </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
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
                                College Information once added cannot be changed or removed. Please keep that in Mind.
                                College Shortnames should be Unique. College Code is of Pune University. (Not Mandatory)
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





        <script>
            function notify(from, align, icon, type, animIn, animOut, message){
                $.notify({
                    icon: icon,
                    title: '',
                    message: message,
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
        if ($error_flag == 1) {
        ?>
        <script>
            notify ("bottom", "center", "", "warning", "animated fadeInUp", "animated fadeOutUp", "Not able to add College, Please Check and Try again!");
        </script>
        <?php
        } else if ($error_flag == -1) { ?>
        <script>
            notify ("bottom", "center", "", "success", "animated fadeInUp", "animated fadeOutUp", "Succes!");
        </script>
        <?php
        }
        ?>

        <!-- Quick-Fix-ing the Float Error -->


        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>



    </body>
</html>
<?php
require_once('functions/analytics.php');
?>