<?php
require_once('config.php');
require_once('check_login.php');
require_once('functions/get_student_list.php');

$pretty_view_options = [
    "email" => "EMail",
    "name" => "Name",
    "create_date" => "Registration Date",
    "phone" => "Phone",
    "role" => "Role",
    "branch" => "Branch",
    "academic_year" => "Academic Year",
    "college" => "College",
    "domains" => "Domain(s)",
    "gender" => "Gender",
    "status" => "Status"
];

if (isset ($_GET['view_options'])) {
    $view_options = $_GET['view_options'];
    if (in_array('uid', $view_options)) {
        unset($view_options[array_search ('uid', $view_options)]);
    }
} else {
    $view_options = ['name', 'college', 'email', 'role', 'status'];
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
                    <small>View and Manage all the Users (Students).</small>

                    <div class="actions">
                        <button type="button" class="btn btn-outline-warning waves-effect" data-toggle="modal" data-target="#modal-info">View Custom Fields</button>
                        <a href="registrations" class="actions__item zmdi zmdi-refresh"></a>

                    </div>
                </header>
                
                <div class="card">

                    <div class="card-block">
                        <div class="table-responsive">
                            
                            <table id="data-table" class="table table-bordered">
                                <?php
                                $students = get_student_list();
                                ?>
                                <thead class="thead-default">
                                    <tr>
                                        <th>ID</th>
                                        <?php
                                        foreach ($view_options as $single_view) {
                                        ?>
                                        <th><?= $pretty_view_options[$single_view]; ?></th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <?php
                                        foreach ($view_options as $single_view) {
                                        ?>
                                        <th><?= $pretty_view_options[$single_view]; ?></th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    foreach($students as $single_Student) {
                                    
                                    ?>
                                    <tr>
                                        <td><button onclick="location.href='userdetails?id=<?= $single_Student->uid; ?>'" type="button" class="btn btn-link waves-effect" style="padding-left: 0px; padding-right: 0px;"><?= $single_Student->uid; ?></button></td>
                                        <?php 
                                        foreach ($view_options as $single_view) {
                                        ?>
                                        <td><?= $single_Student->$single_view ?></td>
                                        <?php  
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Information Modal -->
                <div class="modal fade" id="modal-info" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left">Select Data to View</h5>
                            </div>
                            <div class="modal-body">
                                <?php
                                //TODO: Change the Values here everytime there is a Change in the Student DB!!! IMPORTANT
                                ?>
                                
                                <form id="custom_view_form" action="registrations" method="GET">
                                    <div class="row">
                                    <div class="col-xl-6">
                                    <div class="form-group no-margin-below row">
                                        <label class="col-sm-6 col-md-4 col-xl-6"><h2 class="card-block__title right">UID:</h2></label>
                                        <div class="toggle-switch">
                                            <input type="checkbox" name="view_options[]" value="uid" checked class="toggle-switch__checkbox" onclick="return false;">
                                            <i class="toggle-switch__helper"></i>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <?php
                                    foreach ($pretty_view_options as $single_view_option_key=>$single_view_option_value) {
                                    ?>
                                    <div class="col-xl-6">
                                        <div class="form-group no-margin-below row">
                                            <label class="col-sm-6 col-md-4 col-xl-6"><h2 class="card-block__title right"><?= $single_view_option_value; ?>:</h2></label>
                                            <div class="toggle-switch">
                                                <input type="checkbox" name="view_options[]" value="<?= $single_view_option_key; ?>" <?= in_array($single_view_option_key, $view_options)?"checked":""; ?> class="toggle-switch__checkbox">
                                                <i class="toggle-switch__helper"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                
                               
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                                
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" onclick="custom_view();">View</button>
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
        
        
        <!-- Function for Custom View -->
        <script>
        function custom_view () {
            $("#custom_view_form").submit();
        }
        
            
        </script>
        <!-- End Function for Custom View -->
        
    </body>
</html>
<?php
require_once('functions/analytics.php');
?>