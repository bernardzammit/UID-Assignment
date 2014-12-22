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
                <h1 class="page-header">Checkout
                    <small>(3) Verify Order</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shoppingCart.php">Shopping cart</a></li>
					<li>Checkout</li>
					<li><a href="checkout-1.php">(1) Delivery/Collection Details</a></li>
					<li><a href="checkout-2.php">(2) Payment Method</a></li>
					<li>(3) Verify Order</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Content Row -->
        <div class="row">

            <!-- Main Page Content -->
            <div class="col-lg-7">
				<div class="well" id="d/cForm">
					<form class="form-horizontal"   method="POST">
						<fieldset>
							<legend>Delivery/Collection Details</legend>
							<div class="form-group">
							</div>
							
						</fieldset>
					</form>
				</div>
				
				<div class="well" id="paymentForm">
					<form class="form-horizontal"   method="POST">
						<fieldset>
							<legend>Card Payment Details</legend>
							<div class="form-group">
							</div>
							
						</fieldset>
					</form>
				</div>
            </div>

            <!-- Checkout Sidebar (cart summary + help) -->
            <div class="col-md-5">

                <!-- Help Well -->
                <div class="well">
                    <div class="input-group">
						<div class="col-lg-12 col-xs-12">
							<h4>
								<i class="fa fa-phone"></i> Customer Service &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<i class="fa fa-comments"></i> Live Chat
							</h4>
						</div>
						
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Cart Summary Well -->
                <div class="well">
                    <h4>Shopping Cart Summary</h4><hr>
                    <!-- Item One -->
					<div class="row">
                        <div class="col-lg-3">
                            <a href="viewItem.php">
								<img class="img-responsive img-hover" src="images/tablet-1-1.jpg" alt="" width=100%>
							</a>
						</div>
						<div class="col-lg-4">
							<p>SAMSUNG Galaxy Tab 4 10.1" Tablet - 16 GB, Black</p>
						</div>	
						<div class="col-lg-2">
							<p>Qty=2</p>
						</div>
						<div class="col-lg-3">
							<!--<p><sup>�</sup>650<sup>00</sup></p> -->
							<p>� 650.00</p>
						</div>										
                    </div>
                    <!-- /.row -->
					<hr>
					<!-- Item Two -->
					<div class="row">
                        <div class="col-lg-3">
                            <a href="portfolio-item.html">
								<img class="img-responsive img-hover" src="images/tablet-1-1.jpg" alt="" width=100%>
							</a>
						</div>
						<div class="col-lg-4">
							<p>SAMSUNG Galaxy Tab 4 10.1" Tablet - 16 GB, Black</p>
						</div>	
						<div class="col-lg-2">
							<p>Qty=2</p>
						</div>
						<div class="col-lg-3">
							<!--<p><sup>�</sup>650<sup>00</sup></p> -->
							<p>� 650.00</p>
						</div>										
                    </div>
                    <!-- /.row -->
					<hr>
					<!-- Total row -->
					<div class="row">
                        <div class="col-lg-12 col-lg-offset-7" >
                            <h4>Total: � 1300.00</h4>
						</div>			
                    </div>
                    <!-- /.row -->
					<hr>
					<div class="row">
                        <div class="col-lg-12 col-lg-offset-7" >
						   <a href="shoppingCart.php" class="btn btn-primary" role="button">Edit in Shopping cart</a>
						</div>			
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

        
 
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<?php include 'footer.php'; ?>

</html>



