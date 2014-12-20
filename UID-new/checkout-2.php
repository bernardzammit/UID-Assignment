<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<script>
		function changeForm(){
			if(document.getElementById('cardOption').checked) {
				//alert('Deliver');
				document.getElementById("paymentForm").style.display="block";
				document.getElementById("cashMessage").style.display="none";
				document.getElementById("paypalMessage").style.display="none";
				
			}else if(document.getElementById('cashOption').checked) {
				//alert('Collect');
				document.getElementById("cashMessage").style.display="block";
				document.getElementById("paymentForm").style.display="none";
				document.getElementById("paypalMessage").style.display="none";
				
			}else if(document.getElementById('paypalOption').checked) {
				//alert('Collect');
				document.getElementById("paypalMessage").style.display="block";
				document.getElementById("cashMessage").style.display="none";
				document.getElementById("paymentForm").style.display="none";
			}
		}
	</script>


</head>

<body>

 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Checkout
                    <small>(2) Payment Method</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shoppingCart.php">Shopping cart</a></li>
					<li>Checkout</li>
					<li><a href="checkout-1.php">(1) Delivery/Collection Details</a></li>
					<li>(2) Payment Method</li>
					<li>(3) Verify Order</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Content Row -->
        <div class="row">

            <!-- Main Page Content -->
            <div class="col-lg-7">
                <div class="form-group" onchange="changeForm()">
					<label for="textArea" class="col-lg-4 col-xs-4 control-label">Payment method	
					</label><br>
					<div class="col-lg-8 col-xs-8" >                 
						<div class="radio" id="paymentMethod">	<!-- by default check first option -->
							<label>
								<input type="radio" name="radio" id="cardOption" checked value="" title="">Credit / Debit Card
							</label>
						</div>
						<div class="radio" id="paymentMethod">
							<label>
								<input type="radio" name="radio" id="cashOption" value="" title="">Cash on Delivery / Collection
							</label>
						</div>	
						<div class="radio" id="paymentMethod">	
							<label>
								<input type="radio" name="radio" id="paypalOption" value="" title="">PayPal
							</label>
						</div>
					</div> 				
				</div>
				<br>
                <hr>
				<br>
				<br>

				<!-- Show form/message according to option chosen (by default credit/debit card radio button is checked) -->
				<div class="well" id="paymentForm" style="display:block">
					<form class="form-horizontal"   method="POST">
						<p>Card payment details form</p>
					</form>		
				</div>
				
				<div class="well" id="cashMessage" style="display:none">
					<form class="form-horizontal"   method="POST">
						<p>You are expected to pay upon delivery/collection. Please click <a href="checkout-3.php">next</a> to verify your order...</p>
					</form>		
				</div>
				
				<div class="well" id="paypalMessage" style="display:none">
					<form class="form-horizontal"   method="POST">
						<p><i class="fa fa-spinner fa-spin"></i>  You will be redirected to Paypal in a few seconds...</p>
					</form>		
				</div>

				<!-- Display next and previous buttons -->
				<div class="form-group">
					<div class="col-lg-8 col-lg-offset-9">
						<a href="checkout-1.php" class="btn btn-primary btn-lg" > <i class="fa fa-arrow-left"></i></a>
						<a href="checkout-3.php" class="btn btn-primary btn-lg" type="submit"> <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>	
               

            </div>

            <!-- Checkout Sidebar (cart summary + help) -->
            <div class="col-md-5">

                <!-- Help Well -->
                <div class="well">
                   <div class="input-group">
						<div class="col-lg-8 col-xs-8">
							<h4><i class="fa fa-phone"></i></i> Customer Service</h4>
						</div>
						<div class="col-lg-4 col-xs-4">
							<h4><i class="fa fa-comments"></i></i> Live Chat</h4>
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
							<!--<p><sup>€</sup>650<sup>00</sup></p> -->
							<p>€ 650.00</p>
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
							<!--<p><sup>€</sup>650<sup>00</sup></p> -->
							<p>€ 650.00</p>
						</div>										
                    </div>
                    <!-- /.row -->
					<hr>
					<!-- Total row -->
					<div class="row">
                        <div class="col-lg-12 col-lg-offset-7" >
                            <h4>Total: € 1300.00</h4>
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



