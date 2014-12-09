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
                    <small>Items Bought</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php">My Account</a></li>
                    <li class="active">Items Bought</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


		<?php include 'sidebar.php'; ?>



	<!-- Content Column -->

		<div class="col-md-9">       
			
			<ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#desktops-tab" data-toggle="tab"><i class="fa fa-desktop"></i> Desktops</a>
                    </li>
                    <li class=""><a href="#mobiles-tab" data-toggle="tab"><i class="fa fa-mobile"></i> Mobiles</a>
                    </li>
                    <li class=""><a href="#software-tab" data-toggle="tab"><i class="fa fa-gears"></i> Software</a>
                    </li>
                    <li class=""><a href="#tablets-tab" data-toggle="tab"><i class="fa fa-tablet"></i> Tablets</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="desktops-tab">
                        <br>
						<!-- Product Row 1 -->
						<div class="row">
							<div class="col-md-5">
								<a href="blog-post.html">
									<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="blog-post.html">Product title</a>
								</h3>
								<p><i>06/12/2014</i></p>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								
							</div>
						</div>
						<!-- /.row -->
						
						<hr>
						
						<!-- Product Row 2 -->
						<div class="row">
							<div class="col-md-5">
								<a href="blog-post.html">
									<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="blog-post.html">Product title</a>
								</h3>
								<p><i>06/12/2014</i></p>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								
							</div>
						</div>
						<!-- /.row -->
						
						<hr>
						
						<!-- Product Row 3 -->
						<div class="row">
							<div class="col-md-5">
								<a href="blog-post.html">
									<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="blog-post.html">Product title</a>
								</h3>
								<p><i>06/12/2014</i></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								
							</div>
						</div>
						<!-- /.row -->
                    </div>
                    <div class="tab-pane fade" id="mobiles-tab">
                        
                        
                    </div>
                    <div class="tab-pane fade" id="software-tab">
                        
                    </div>
                    <div class="tab-pane fade" id="tablets-tab">
                        
                    </div>
                </div>
			
			
			
		</div>
	</div>
	<!-- /.row -->

    <?php include 'footer.php'; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



