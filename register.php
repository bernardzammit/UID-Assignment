<?php
	session_start();
	include 'header.php'; //contain all the codes that we will use in the webpage
	//include 'php/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Load jQuery UI CSS --> 
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> 


		<!--<link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/themes/flatly/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/structure/infragistics.css" rel="stylesheet" />

		 <!-- Load jQuery JS -->
    	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<!-- Load jQuery UI Main JS  -->
    	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

		<!--Load script.js which will create datepicker for input field -->
		<script src="scripts/js/datepicker.js"></script> 

	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12" "col-xs-6">
					<div class="well bs-component">
						<form class="form-horizontal">
						  <fieldset>
						    <legend>Personal Details</legend>
						    <div class="form-group">
						      <label for="Name" class="col-lg-4 col-xs-4 control-label">Name</label>
						      <div class="col-lg-3 col-xs-3">
						      	<span class="nameFirst">
						      		<input type="text" class="form-control" id="FName" placeholder= "First">
						      	</span>
						      </div>
						      <div class="col-lg-3 col-xs-3">
						      	<span class="nameLast">
						      		<input type="text" class="form-control" id="LName" placeholder="Last">
						      	</span>
						      </div>
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
			            						<input type="radio" name="optionsRadios" id="optionsRadios2" value="f">Female</label>
			        					</div>
		        					</div>
	        				</div>

						    <div class="form-group">
						    	<label for="inputAddress" class="col-lg-4 col-xs-4 control-label">Address</label>
		  						<div class="col-lg-6 col-xs-6">
		  							<textarea class="form-control" rows="3" id="inputAddress"></textarea>
		  						</div>
							</div>

						    <div class="form-group">
						      <label for="inputTown" class="col-lg-4 col-xs-4 control-label">Town</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="text" class="form-control" id="inputTown">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="inputPostcode" class="col-lg-4 col-xs-4 control-label">Postcode</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="text" class="form-control" id="inputPostcode">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="inputMobile" class="col-lg-4 col-xs-4 control-label">Mobile</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="tel" class="form-control" id="inputMobile">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="inputPhone" class="col-lg-4 col-xs-4 control-label">Phone</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="tel" class="form-control" id="inputPhone">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="inputDOB" class="col-lg-4 col-xs-4 control-label">Date of Birth</label>
						      <div class="col-lg-6 col-xs-6">
						      		<input type="text" class="form-control" name="date" placeholder="mm-dd-yyyy" id="datepicker">					      		
						      		
						      </div>
						    </div>

						    <legend>Username & Password</legend>
						    <div class="form-group">
						      <label for="inputUsername" class="col-lg-4 col-xs-4 control-label">Username</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="text" class="form-control" id="inputUsername">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="inputPassword" class="col-lg-4 col-xs-4 control-label">Password</label>
						      <div class="col-lg-6 col-xs-6">
						        <input type="password" class="form-control" id="inputPassword">
						      </div>
						    </div>

						    <div class="form-group">
							    <div class="checkbox">
		          					<label for="textArea" class="col-lg-4 col-xs-4 control-label"> </label>
		          					<label>
		            					<input type="checkbox"> I confirm that I have read and accept the Website Terms of Use
		          					</label>
		       					 </div>
		       					 <div class="checkbox">
		       					 	<label for="textArea" class="col-lg-4 col-xs-4 control-label"> </label>
		          					<label>
		            					<input type="checkbox"> I would like to receive emails about listings and offers
		          					</label>
		       					 </div>
		       				</div>

						    
						    <div class="form-group">
						      <div class="col-lg-10 col-lg-offset-8">
						        <button class="btn btn-default">Cancel</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
						      </div>
						    </div>
						  </fieldset>
						</form>
					</div>
				</div>
			</div>	

		</div>
	
	
	</body>
	
</html>
