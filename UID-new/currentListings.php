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
                    <small>Current Listings</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">My Account</a></li>
                    <li class="active">Current Listings</li>
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
                        <hr>
                        <?php include 'myAccItem-desktop.php' ?>
                        <hr>
                        <?php include 'myAccItem-desktop.php' ?>
                        <hr>
                    </div>
                    
                    <div class="tab-pane fade" id="mobiles-tab">
                        <hr>
                        <?php include 'myAccItem-mobile.php' ?>
                        <hr>                        
                        <?php include 'myAccItem-mobile.php' ?>                      
                    </div>
                    <div class="tab-pane fade" id="software-tab">
                        <hr>
                        <?php include 'myAccItem-software2.php' ?>

                        <?php include 'myAccItem-software2.php' ?>
                        <hr>
                        <?php include 'myAccItem-software2.php' ?>
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



