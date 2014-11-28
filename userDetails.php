<?php
	// call header file
	include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>	
		<link rel = "stylesheet" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" href = "css/bootstrap.css" media= "screen"> 
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			
			<!-- user's profile picture -->
			<div class="row">
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-user"></span>
				</div>
			</div>
			
			<!--seperator between image and the panel with user details-->
			<div class="row">
				<div class="col-lg-4">
					<br>
				</div>
			</div>
		
			<div class="row"> <!-- row containing the user details panel-->
				<div class="col-lg-4">
					<div class="panel panel-primary">
						
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-10">
								<h3 class="panel-title">Welcome User!</h3>
								</div>
								<div class="col-lg-2">
								<a href="#">
								  <span class="glyphicon glyphicon-pencil"></span>
								</a>
								</div>									
							</div>	
						</div>

						<div class="panel-body">	
							<div class="row">
								<div class="container-fluid">
									<div class="col-lg-6">
										<p>First name: </p>
										<p>Last name: </p>
										<p>Email: </p>
										<p>Date of Birth: </p>
										<p>Address: </p>
										<p><br>Current Listings: </p>
										<p>Items Sold: </p>
										<p>Items Bought: </p>
									</div>
								</div>	
							</div>	
						</div>
						
					</div>
				</div>
			</div>

		</div>
	</body>
</html>