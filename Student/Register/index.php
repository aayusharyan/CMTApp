<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Student Registration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
	    

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="POST">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Student Registration    
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Basic Info</a></li>
			                            <li><a href="#academic" data-toggle="tab">Academic Info</a></li>
			                            <li><a href="#extras" data-toggle="tab">Extra Details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Let's start with the basic details.</h4>
			                            	</div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Name <small>(required)</small></label>
                                                        <input name="name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your Email Id</label>
                                                        <input name="email" type="text" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your Password</label>
                                                        <input type="password" id="password" name="password" class="form-control">
                                                        
                                                    </div>
                                                </div>

                                            </div>
		                                	<div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone No. <small>(required)</small></label>
                                                        <input name="phone" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">account_box</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gender</label>
                                                        <select class="form-control" name="gender">
                                                            <option disabled="" selected=""></option>
                                                            <option value="Male"> Male </option>
                                                            <option value="Female"> Female </option>
                                                            <option value="Other"> Prefer Not  to Say </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">style</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Role</label>
                                                        <select class="form-control" name="role">
                                                            <option disabled="" selected=""></option>
                                                            <option value="Presenter"> Presenter </option>
                                                            <option value="Attendee"> Attendee </option>
                                                        </select>
                                                    </div>
                                                </div>
		                                	</div>
                                            
                                            
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="academic">
		                                <h4 class="info-text">Let us know about your academic Info </h4>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">school</i>                                                   </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">College</label>
                                                    <select class="form-control" name="college">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> Sinhgad Institute of Technology, Lonavala </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="..."> Other </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">layers</i>                                                   </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Branch</label>
                                                            <select class="form-control" name="branch">
                                                                <option disabled="" selected=""></option>
                                                                <option value="Computer Enginerring"> Computer Enginerring </option>
                                                                <option value="Information Technology"> Information Technology </option>
                                                                <option value="Electronics &amp; Tele-Communication"> Electronics &amp; Tele-Communication </option>
                                                                <option value="Other"> Other </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">library_books</i>                                                   </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Academic Year</label>
                                                            <select class="form-control" name="year">
                                                                <option disabled="" selected=""></option>
                                                                <option disabled="">--Bachelor's--</option>
                                                                <option value="First Year"> First Year </option>
                                                                <option value="Second Year"> Second Year </option>
                                                                <option value="Third Year"> Third Year </option>
                                                                <option value="Fourth Year"> Fourth Year </option>
                                                                <option disabled="">--Master's--</option>
                                                                <option value="Master's First Year"> First Year </option>
                                                                <option value="Master's Second Year"> Second Year </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        </div>
		                            <div class="tab-pane" id="extras">
		                                <div class="row">
		                                    <h4 class="info-text"> Your Interest's</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]" value="Cyber Security">
                                                        Cyber Security
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]" value="Computer Networking">
                                                       Computer Networking
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]" value="System Engineering">
                                                        System Engineering
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]" value="Database Management">
                                                        Database Management
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]" value="Data Structures">
                                                        Data Structures
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                
		                                    </div>
                                            
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Uncheckedcheckbox[]
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox form-group">
                                                    <label>
                                                        <input type="checkbox" name="checkbox[]">
                                                        Unchecked
                                                    </label>
                                                </div>

                                            </div>
                                            
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by Aayush Sinha &amp;  Sudarshan Amirineni. 
	        </div>
	    </div>
	</div>
    
</body>
    
	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.js" type="text/javascript"></script>
    

	<!--  Plugin for the Wizard -->
	<script src="js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>
</html>
