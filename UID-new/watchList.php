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
                    <small>Watch List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">My Account</a></li>
                    <li class="active">Watch List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <?php include 'sidebar.php'; ?>



	<!-- Content Column -->

		<div class="col-md-9">       
			
			<ul id="myTab" class="nav nav-tabs nav-justified">
					<li class="active"><a href="#all-tab" data-toggle="tab">All</a>
					</li>	
				   <li class=""><a href="#desktops-tab" data-toggle="tab"><i class="fa fa-desktop"></i> Desktops</a>
                    </li>
                    <li class=""><a href="#mobiles-tab" data-toggle="tab"><i class="fa fa-mobile"></i> Mobiles</a>
                    </li>
                    <li class=""><a href="#software-tab" data-toggle="tab"><i class="fa fa-gears"></i> Software</a>
                    </li>
                    <li class=""><a href="#tablets-tab" data-toggle="tab"><i class="fa fa-tablet"></i> Tablets</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                   
				   <div class="tab-pane fade active in" id="all-tab">
                        <br>					
						<!-- Product 1 -->
						<div class="row">
							<div class="col-md-5">
								<a href="viewItem.php">
									<img class="img-responsive img-hover" src="images/desktop-2-1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="viewItem.php">iMac 21.5</a>
								</h3>
								<h4><i>29/11/2014</i></h4><br>

								<ul>
									<li>Intel® Core™ i5 processor</li>
									<li>OS X Mavericks</li>
									<li>Hard drive: 1 TB</li>
									<li>Memory: 8 GB</li>
								</ul>
								<br>
								<span class="price"><sup>€</sup>1500<sup>00</sup></span>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Add to cart</button>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Remove</button>
							</div>
						</div>
                        
						<br>
						<hr>
                        
						<!-- Product Row 2 -->
						<div class="row">
							<div class="col-md-5">
								<a href="viewItem.php">
									<img class="img-responsive img-hover" src="images/adobe_software.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="viewItem.php">Adobe Acrobat X Standard</a>
								</h3>
								<h4><i>30/10/2014</i></h4><br>

								<ul>
									<li>Intel® Core™ i5 processor</li>
									<li>OS X Mavericks</li>
									<li>Hard drive: 1 TB</li>
									<li>Memory: 8 GB</li>
								</ul>
								<br>
								<span class="price"><sup>€</sup>450<sup>50</sup></span>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Add to cart</button>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Remove</button>
							</div>
						</div>
						<!-- /.row -->
						<br>
                        
                    </div>
					
					<div class="tab-pane fade" id="desktops-tab">
						<br>
						<!-- Product 1 -->
						<div class="row">
							<div class="col-md-5">
								<a href="viewItem.php">
									<img class="img-responsive img-hover" src="images/desktop-2-1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="viewItem.php">iMac 21.5</a>
								</h3>
								<h4><i>29/11/2014</i></h4><br>

								<ul>
									<li>Intel® Core™ i5 processor</li>
									<li>OS X Mavericks</li>
									<li>Hard drive: 1 TB</li>
									<li>Memory: 8 GB</li>
								</ul>
								<br>
								<span class="price"><sup>€</sup>1500<sup>00</sup></span>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Add to cart</button>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Remove</button>
							</div>
						</div>                       
                        <br>
                    </div>
                    
                    <div class="tab-pane fade" id="mobiles-tab">
                        <br>
					
						<div class="col-md-5" >
							<p>You have no mobiles in your watching list!</p><br>
							
							<a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '0'?>">See mobiles for sale</a>
						</div>	
                    </div>
                    
					<div class="tab-pane fade" id="software-tab">
						<br>
                        <!-- Product Row 1 -->
						<div class="row">
							<div class="col-md-5">
								<a href="viewItem.php">
									<img class="img-responsive img-hover" src="images/adobe_software.jpg" alt="">
								</a>
							</div>
							<div class="col-md-6">
								<h3>
									<a href="viewItem.php">Adobe Acrobat X Standard</a>
								</h3>
								<h4><i>30/10/2014</i></h4><br>

								<ul>
									<li>Intel® Core™ i5 processor</li>
									<li>OS X Mavericks</li>
									<li>Hard drive: 1 TB</li>
									<li>Memory: 8 GB</li>
								</ul>
								<br>
								<span class="price"><sup>€</sup>450<sup>50</sup></span>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Add to cart</button>
							</div>
							<div class="col-md-2">
								<br />
								<button class="btn btn-default">Remove</button>
							</div>
						</div>
						<!-- /.row -->
						<br>
                    </div>
					
                    <div class="tab-pane fade" id="tablets-tab">
                        <br>
					
						<div class="col-md-5" >
							<p>You have not tablets in your watching list!</p><br>
							
							<a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '0'?>">See tablets for sale</a>
						</div>	
                    </div>
                </div>			
			
            </div>
	</div>
	<!-- /.row -->

    </div>
    <!-- /.container -->
	
    <?php include 'footer.php'; ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



