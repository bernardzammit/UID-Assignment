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
			<!-- Tabs according to category -->
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
			
			
			
			
		</div>
	</div>
	<!-- /.row -->

    <hr>
    </div>
    <!-- /.container -->
	
    <?php include 'footer.php'; ?>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



