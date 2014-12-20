<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<script>
		function changeForm(){
			if(document.getElementById('deliveryOption').checked) {
				//alert('Deliver');
				document.getElementById("deliveryForm").style.display="block";
				document.getElementById("collectionForm").style.display="none";
				document.getElementById("deliveryFormShow").style.display="none";
				
			}else if(document.getElementById('collectionOption').checked) {
				//alert('Collect');
				document.getElementById("collectionForm").style.display="block";
				document.getElementById("deliveryForm").style.display="none";
				document.getElementById("deliveryFormShow").style.display="none";
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
					<li><a href="checkout1.php">(1) Delivery/Collection Details</a></li>
					<li>(2) Payment Method</li>
					<li>(3) Verify Order</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-7">
                <div class="form-group" onchange="changeForm()">
					<label for="textArea" class="col-lg-4 col-xs-4 control-label">Payment method	
					</label><br>
					<div class="col-lg-8 col-xs-8" >                 
						<div class="radio" id="paymentMethod">	
							<label>
								<input type="radio" name="radio" id="deliveryOption" checked value="" title="Item delivered to the customer">Delivery
							</label>
						</div>
						<div class="radio" id="paymentMethod">
							<label>
								<input type="radio" name="radio" id="collectionOption" value="" title="The customer collects item from the specified address">Collection
							</label>
						</div>					
					</div> 				
				</div>
				<br>
                <hr>
				<br>
                
				<div class="well" id="deliveryFormShow" style="display:block">
					<form class="form-horizontal"   method="POST">
						<fieldset>
							<legend>Delivery</legend>
							<div class="form-group">
								<label class="col-lg-7 col-xs-7 control-label">Delivery cost: €5.00</label>
								<label class="col-lg-7 col-xs-7 control-label">Estimated Arrival Date: 19/01/2015</label>
								
								<div class="col-lg-2 col-xs-2">
									<a href="#" class="btn btn-primary btn-lg">Contact Seller</a>
								</div>
								<br>
								<hr>
								
								
								
								  <label for="Name" class="col-lg-2 col-xs-2 control-label">Name
								  <span class="required" aria-required="true">*</span>
								  </label>
								  <div class="col-lg-3 col-xs-3">
									<span class="nameFirst">
										<input type="text" class="form-control" required id="fName" placeholder= "First">
									</span>
								  </div>
								  <div class="col-lg-3 col-xs-3">
									<span class="nameLast">
										<input type="text" class="form-control" required id="lName" placeholder="Last">
									</span>
								  </div>
							</div>
						</fieldset>
					</form>		
				</div>
				
				<!-- Post Content according to option chosen -->
				<div class="well" id="deliveryForm" style="display:none">
					<form class="form-horizontal"   method="POST">
						<fieldset>
							<legend>Delivery</legend>
							<div class="form-group">
								<label class="col-lg-7 col-xs-7 control-label">Delivery cost: €5.00</label>
								<label class="col-lg-7 col-xs-7 control-label">Estimated Arrival Date: 19/01/2015</label>
								
								<div class="col-lg-2 col-xs-2">
									<a href="#" class="btn btn-primary btn-lg">Contact Seller</a>
								</div>
								<br>
								<hr>
								
								
								
								  <label for="Name" class="col-lg-2 col-xs-2 control-label">Name
								  <span class="required" aria-required="true">*</span>
								  </label>
								  <div class="col-lg-3 col-xs-3">
									<span class="nameFirst">
										<input type="text" class="form-control" required id="fName" placeholder= "First">
									</span>
								  </div>
								  <div class="col-lg-3 col-xs-3">
									<span class="nameLast">
										<input type="text" class="form-control" required id="lName" placeholder="Last">
									</span>
								  </div>
							</div>
						</fieldset>
					</form>		
				</div>
				
				<form class="form-horizontal" id="collectionForm" style="display:none" method="POST">
                   <p>Collection</p>
                </form>
				
				<!-- Display next and previous buttons -->
				<div class="form-group">
					<div class="col-lg-8 col-lg-offset-8">
						<a href="checkout-1.php" class="btn btn-primary btn-lg">Previous</a>
						<a href="#" class="btn btn-primary btn-lg">Next</a>
					</div>
				</div>
               

            </div>

            <!-- Checkout Sidebar (cart summary + help) -->
            <div class="col-md-5">

                <!-- Help Well -->
                <div class="well">
                    <h4>Help</h4>
                    <div class="input-group">
                        <!-- include customer service and live chat -->
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



