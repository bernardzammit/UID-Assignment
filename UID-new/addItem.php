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
                    <small>Add Item</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php">My Account</a></li>
                    <li class="active">Add Item</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<?php include 'sidebar.php'; ?>

		 <!-- Content Row -->
        <div class="row">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
              <div class="well">
                <form name = "addItem" id="addItemForm" class="form-horizontal">
                    <fieldset>
                        <legend>Listing Details</legend>
							<div class="form-group">
								<label for="category" class="col-lg-4 col-xs-4 control-label">Category</label>
								<div class="col-lg-3 col-xs-3">
									<select class="form-control" id="category">
										<option>Desktops</option>
										<option>Mobiles</option>
										<option>Software</option>
										<option>Tablets</option>
										</select>
								</div>
							</div>

							<div class="form-group">
                              <label for="productName" class="col-lg-4 col-xs-4 control-label">Product Name</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="nameFirst">
                                    <input type="text" class="form-control" id="PName" placeholder= "">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="brand">
                                    <input type="text" class="form-control" id="FName" placeholder= "">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
								<label for="quanity" class="col-lg-4 col-xs-4 control-label">Quantity</label>
								<div class="col-lg-2 col-xs-2">
									<select class="form-control" id="quantity">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										</select>
								</div>
							</div>
					
							<div class="form-group">
                                <label for="descrption" class="col-lg-4 col-xs-4 control-label">Description</label>
                                <div class="col-lg-6 col-xs-6">
                                    <textarea class="form-control" rows="5" id="description" placeholder= "Help buyers find what they are looking for by providing additional details"></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                              <label for="price" class="col-lg-4 col-xs-4 control-label">Price</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="price">
                                    <input type="text" class="form-control" id="price" placeholder= "">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
								<label for="condition" class="col-lg-4 col-xs-4 control-label">Condition</label>
								<div class="col-lg-3 col-xs-3">
									<select class="form-control" id="condition">
										<option>New</option>
										<option>Good</option>
										<option>Acceptable</option>
										</select>
								</div>
							</div>
							
							<div class="form-group">
                                <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                <div class="checkbox col-lg-8 col-xs-8">
                                  <label>
                                    <input type="checkbox"> Yes promote item!
                                  </label>
                                </div>
                                  
                            </div>
							
                            <div class="form-group">
                              <label for="price" class="col-lg-4 col-xs-4 control-label">Upload Images</label>
                              <div class="col-lg-3 col-xs-3">
								<button class="btn btn-default">Choose Files</button>
                              </div>
                            </div>
							
							
                            
                            
                            <div class="form-group">
                              <div class="col-lg-8 col-lg-offset-8">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>

                    </fieldset>
                </form>
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



