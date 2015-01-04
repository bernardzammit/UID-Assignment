<?php include 'loggedInHeader.php'; ?>

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
		
		function CheckAndSubmit () {
			location = 'checkout-2.php';
			return false;
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
                    <small>(1) Delivery/Collection Details</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shoppingCart.php">Shopping cart</a></li>
					<li>Checkout</li>
					<li>(1) Delivery/Collection Details</a></li>
					<li>(2) Payment Method</li>
					<li>(3) Verify Order</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Content Row -->
        <div class="row">

            <!-- Main Page content -->
            <div class="col-lg-7">
                <div class="form-group" onchange="changeForm()">
					<label for="textArea" class="col-lg-4 col-xs-4 control-label">Shipping method	
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
 
				<!-- Show form according to option chosen (by default delivery form is shown) -->
				<div class="well" id="deliveryForm" style="display:block">
					<div class="bs-component">
						<legend>Delivery Details</legend>
						<p><strong>Delivery cost:</strong> €5.00</p>
						<p><strong>Estimated Arrival Date: </strong>19/01/2015</p>
					</div>
					<hr>
					<form class="form-horizontal" method="POST" onSubmit="return CheckAndSubmit();">
						<fieldset>
							<div class="form-group">
								<label class="col-lg-9 col-xs-9 control-label">For more information: </label>
								<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@digistoreSeller">Contact Seller</a>
							</div>


							<hr>
							<div class="form-group">		
									<!--<label class="col-lg-4 control-label">Collection of item(s) can be done during the following days at these particular times</label> -->
									<p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;The item(s) being bought will be delivered to this address. </p>
							</div>
							<div class="form-group">
                                <label for="inputAddress" class="col-lg-4 col-xs-4 control-label">Address
								<span class="required" aria-required="true">*</span>
								</label>
                                <div class="col-lg-6 col-xs-6">
                                    <textarea class="form-control" required rows="3" id="inputAddress"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputTown" class="col-lg-4 col-xs-4 control-label">Town
							  <span class="required" aria-required="true">*</span>
							  </label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" required id="inputTown">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPostcode" class="col-lg-4 col-xs-4 control-label">Postcode
							  <span class="required" aria-required="true">*</span>
							  </label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" required id="inputPostcode">
                              </div>
                            </div>
							
							<hr>
							
							<div class="form-group">
								<div class="col-lg-8 col-lg-offset-9">
									<a href="shoppingCart.php" class="btn btn-primary btn-lg" title="Previous (Shopping cart)"> <i class="fa fa-arrow-left"></i></a>
									<!--<a href="checkout-2.php" class="btn btn-primary btn-lg" type="submit"> <i class="fa fa-arrow-right"></i></a>-->
									 <button type="submit" value="submit" class="btn btn-primary btn-lg" title="Next (Payment Method)"> <i class="fa fa-arrow-right"></i></button> 
								</div>
							</div>	
						</fieldset>
					</form>		
				</div>

				 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                  </div>
                                </div>
                              </div>
                            </div>
	
				
				<div class="well" id="collectionForm" style="display:none">
					<div class="bs-component">
						<legend>Collection Details</legend>
						<p>Collection of item(s) can be done during the following days at these particular times from the place specified in the address below.</p>
						<br>
						<div class="col-lg-10">
							<p><strong>Opening hours: </strong>Monday - Saturday from 9:00 - 12:00</p>
							<p><strong>Address: </strong> Digistore Malta, Triq ir-Raddiena, Mgarr, MGR 2431</p>
						</div>
						<br>
					</div>
					<br>
					<hr>
					
					<form class="form-horizontal"   method="POST">
						<fieldset>
							<div class="form-group">				
								<label class="col-lg-9 col-xs-9 control-label">For more information: </label>
								<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@digistoreSeller">Contact Digistore</a>
							</div>
							<hr>
							<div class="form-group">
								<div class="col-lg-8 col-lg-offset-9">
									<a href="shoppingCart.php" class="btn btn-primary btn-lg" title="Previous (Shopping cart)"> <i class="fa fa-arrow-left"></i></a>
									<a href="checkout-2.php" class="btn btn-primary btn-lg" type="submit" onSubmit="" title="Next (Payment Method)"> <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>	
						</fieldset>
					</form>
				</div>
            </div>
<br>
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
							<!--<p><sup>€</sup>650<sup>00</sup></p> -->
							<p>€ 650.00</p>
						</div>										
                    </div>
                    <!-- /.row -->
					<hr>
					<!-- Item Two -->
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



