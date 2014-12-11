<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
	<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Account
                    <small>Profile</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php">My Account</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<?php include 'sidebar.php'; ?>
	
		<!-- Content Row -->
        <div class="row">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
              <div class="well">
                <form name = "register" id="registerForm" class="form-horizontal">
                    <fieldset>
                        <legend>Edit Personal Details</legend>
                            <div class="form-group">
								<label for="Name" class="col-lg-4 col-xs-4 control-label">Name
									<span class="required" aria-required="true">*</span>
								</label>
								<div class="col-lg-3 col-xs-3">
									<span class="nameFirst">
										<input type="text" class="form-control" required id="FName" placeholder= "First">
									</span>
								</div>
							  
								<script type="text/javascript">
									var elem = document.getElementById("FName");
									elem.value = "Sheryl";
								</script>
							  
								<div class="col-lg-3 col-xs-3">
									<span class="nameLast">
										<input type="text" class="form-control" required id="LName" placeholder="Last">
									</span>
								</div>
							  
								<script type="text/javascript">
									var elem = document.getElementById("LName");
									elem.value = "Camilleri";					
								</script>
                            </div>

                            <div class="form-group">
                                <label for="Gender" class="col-lg-4 col-xs-4 control-label">Gender</label>
								<div class="col-lg-6 col-xs-6">
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="m">Male</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="f" checked>Female</label>
									</div>
								</div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress" class="col-lg-4 col-xs-4 control-label">Address</label>
                                <div class="col-lg-6 col-xs-6">
                                    <textarea class="form-control" rows="3" id="inputAddress"></textarea>
                                </div>	
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("inputAddress");
								elem.value = "Test";
							</script>

                            <div class="form-group">
                              <label for="inputTown" class="col-lg-4 col-xs-4 control-label">Town</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputTown">
                              </div>
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("inputTown");
								elem.value = "Test";
							</script>

                            <div class="form-group">
                              <label for="inputPostcode" class="col-lg-4 col-xs-4 control-label">Postcode</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputPostcode">
                              </div>
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("inputPostcode");
								elem.value = "Test";
							</script>

                            <div class="form-group">
                              <label for="Contact" class="col-lg-4 col-xs-4 control-label">Contact</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="mob">
                                    <input type="number" class="form-control" required id="Mobile" placeholder= "Mobile">
                                </span>
                              </div>
                              <div class="col-lg-3 col-xs-3">
                                <span class="phone">
                                    <input type="number" class="form-control" id="Phone" placeholder="Phone">
                                </span>
                              </div>
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("Mobile");
								elem.value = "Test";
								
								var elem = document.getElementById("Phone");
								elem.value = "Test";
							</script>

                            <div class="form-group">
                              <label for="Email" class="col-lg-4 col-xs-4 control-label">Email Address:
								<span class="required" aria-required="true">*</span>
							  </label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="email" class="form-control" required id="email" placeholder="Example: user2014@gmail.com">
                              </div>
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("email");
								elem.value = "Test";
							</script>

                            <div class="form-group">
                              <label for="inputDOB" class="col-lg-4 col-xs-4 control-label">Date of Birth</label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" name="date" placeholder="mm-dd-yyyy" id="datepicker">                               
                                    
                              </div>
                            </div>
							
							<script type="text/javascript">
								var elem = document.getElementById("datepicker");
								elem.value = "Test";
							</script>
							
							<div class="form-group">
                              <div class="col-lg-8 col-lg-offset-8">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                              </div>
                            </div>
						<br>
                        <legend>Change Password</legend>
                            <div class="form-group">
                              <label for="inputUsername" class="col-lg-4 col-xs-4 control-label">Current Password</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputUsername">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-4 col-xs-4 control-label">New Password</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Must at least contain 8 characters">
                              </div>
                            </div>

							<div class="form-group">
                              <div class="col-lg-8 col-lg-offset-8">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                              </div>
                            </div>

                    </fieldset>
                </form>
              </div>
            </div>
        </div>
        <!-- /.row -->
	<!-- Content Column -->

	</div>
	<!-- /.row -->

    <hr>

    <?php include 'footer.php'; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



