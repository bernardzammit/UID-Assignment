<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Extra CSS -->
    <link href="css/extracss.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Account
                    <small>Items Sold</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php">My Account</a></li>
                    <li class="active">Items Sold</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


		<?php include 'sidebar.php'; ?>

		
	<!-- Content Column -->
		<div class="col-md-9">
			<!-- <h2>Section Heading</h2>  -->          
			<!-- Product Row 1 -->
			<div class="row">
				<div class="col-md-5">
					<a href="blog-post.html">
						<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
					</a>
				</div>
				<div class="col-md-6">
					<h3>
						<a href="blog-post.html">iMac 21.5</a>
					</h3>
					<h4><i>06/12/2014</i></h4><br>

                        <ul>
                            <li>Intel® Core™ i5 processor</li>
                            <li>OS X Mavericks</li>
                            <li>Hard drive: 1 TB</li>
                            <li>Memory: 8 GB</li>
                        </ul>
						<br>
                        <span class="price"><sup>€</sup>1500<sup>00</sup></span>

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
						<a href="blog-post.html">iMac 21.5</a>
					</h3>
					<h4><i>06/12/2014</i></h4><br>

                        <ul>
                            <li>Intel® Core™ i5 processor</li>
                            <li>OS X Mavericks</li>
                            <li>Hard drive: 1 TB</li>
                            <li>Memory: 8 GB</li>
                        </ul>
						<br>
                        <span class="price"><sup>€</sup>1500<sup>00</sup></span>

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
					<a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<!-- /.row -->
		</div>
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



