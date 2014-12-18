<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<script>
		// display different brand options according to the category chosen
                var x = false;
                
		function changeBrandOptions(selectedValue) {
			
                    var desktopOptions = '  <div class="form-group" id="demo"> \
                                                <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand \
                                                    <span class="required" aria-required="true">*</span> \
                                                </label> \
                                                <div class="col-lg-3 col-xs-3"> \
                                                    <select class="form-control" id="desktopBrands"> \
                                                        <option value="1">Mac</option> \
                                                        <option value="2">Asus</option> \
                                                        <option value="3">Software</option> \
                                                        <option value="4">Tablets</option> \
                                                    </select> \
                                                </div> \
                                            </div> \ ';
			
                    var tabletsOptions = '  <div class="form-group" id="demo"> \
                                                <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand \
                                                        <span class="required" aria-required="true">*</span> \
                                                </label> \
                                                <div class="col-lg-3 col-xs-3"> \
                                                        <select class="form-control" id="tabletsBrands"> \
                                                            <option value="1">Samsung</option> \
                                                            <option value="2">Apple</option> \
                                                            <option value="3">Sony</option> \
                                                            <option value="4">Asus</option> \
                                                            <option value="5">Acer</option> \
                                                            <option value="6">Other</option> \
                                                        </select> \
                                                </div> \
                                            </div> \ ';
			
			
                    var mobilesOptions = ' <div class="form-group" id="demo"> \
                                                    <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand \
                                                        <span class="required" aria-required="true">*</span> \
                                                    </label> \
                                                    <div class="col-lg-3 col-xs-3"> \
                                                        <select class="form-control" id="mobilesBrands"> \
                                                            <option value="1">HTC</option> \
                                                            <option value="2">Apple</option> \
                                                            <option value="3">LG</option> \
                                                            <option value="4">Nokia</option> \
                                                            <option value="5">Samsung</option> \
                                                            <option value="6">Other</option> \
                                                        </select> \
                                                    </div> \
                                                </div> \ ';
			
                    var softwareOptions = ' <div class="form-group" id="demo"> \
                                                    <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand \
                                                        <span class="required" aria-required="true">*</span> \
                                                    </label> \
                                                    <div class="col-lg-3 col-xs-3"> \
                                                        <select class="form-control" id="softwareBrands"> \
                                                                <option value="1">Gaming</option> \
                                                                <option value="2">Office</option> \
                                                                <option value="3">Security</option> \
                                                                <option value="4">Other</option> \
                                                        </select> \
                                                    </div> \
                                                </div> \ ';
	
                    var y = document.getElementById("demo");
                    if(selectedValue==="1"){
                       y.innerHTML = desktopOptions;
                    }
                    else if(selectedValue==="2"){
                       y.innerHTML = tabletsOptions;
                    }
                    else if(selectedValue==="3"){
                       y.innerHTML = mobilesOptions;
                    }
                    else if(selectedValue==="4"){
                       y.innerHTML = softwareOptions;
                    }
		}
                
		function paymentCheck ()
		{
                    alert('paymentCheck');
                    var checkedboxes = $('#paymentMethod :checkbox:checked').length;

                    if (checkedboxes === 0){
                            alert('At least one payment method must be selected!');
                    }
		}

		function showAlert()
		{
			alert('show message');
			var y = document.getElementById("successAlert");
			y.innerHTML = ' 	<div class="alert alert-dismissable alert-success"> \
                            <button type="button" class="close" data-dismiss="alert">×</button> \
                            <strong>Well done!</strong> You successfully edited and saved your new personal details. \
                    </div> \ ' ;
		}
		
		function showPromotionDialog()
		{
			if (document.getElementById('promotionCheckbox').checked) {
				alert("checked");
				var y = document.getElementById("promotionDialog");
				y.innerHTML = ' <div class="modal fade" id="promotionDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> \
									<div class="modal-dialog"> \
										<div class="modal-content"> \
											<div class="modal-header"> \
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>  \
												<h4 class="modal-title" id="myModalLabel"> This Modal title </h4> \
											 </div> \
											 <div class="modal-body"> \
												Press ESC button to exit. \
											 </div>\
											 <div class="modal-footer">\
												<button type="button" class="btn btn-default" \
												   data-dismiss="modal">Close\
												</button>\
												<button type="button" class="btn btn-primary">\
												   Submit changes\
												</button>\
											 </div>\
										  </div><!-- /.modal-content \
								   </div>\
								</div>\ ';
				
				
				   $(function () { $('#promotionDialog').modal({
					  keyboard: true
				   })});
				
				/*y.innerHTML = ' <div class="modal fade" id="myModal" tabindex="-1" role="dialog" \
								   aria-labelledby="myModalLabel" aria-hidden="true"> \
								   <div class="modal-dialog"> \
									  <div class="modal-content"> \
										 <div class="modal-header"> \
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button> \ 
											<h4 class="modal-title" id="myModalLabel"> This Modal title </h4> \
										 </div> \ 
										 <div class="modal-body"> \
											Press ESC button to exit. \
										 </div>\
										 <div class="modal-footer">\
											<button type="button" class="btn btn-default" \
											   data-dismiss="modal">Close\
											</button>\
											<button type="button" class="btn btn-primary">\
											   Submit changes\
											</button>\
										 </div>\
									  </div><!-- /.modal-content -->\
								   </div><!-- /.modal-dialog -->\
								</div><!-- /.modal -->\ '; 

   $(function () { $('#myModal').modal({
      keyboard: true
   })}); */
			} // end if
		} // end showPromotionDialog() */
	</script>
</head>

<body>
	<div id=promotionDialog> </div>
	
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
                <div class="form-group" id="successAlert"> </div>
			
              <div class="well">
                <form name = "addItem" id="addItemForm" class="form-horizontal">
                    <fieldset>
                        <legend>Listing Details</legend>
                                    <div class="form-group">
                                            <label name="prodName" for="productName" class="col-lg-4 col-xs-4 control-label">Product Name
                                                    <span class="required" aria-required="true">*</span>
                                            </label>
                                      <div class="col-lg-3 col-xs-3">
                                <span class="nameFirst">
                                    <input type="text" class="form-control" required id="PName" placeholder= "" autofocus>
                                </span>
                              </div>
                            </div>
						
                            <div class="form-group">
                                    <label for="category" class="col-lg-4 col-xs-4 control-label">Category
                                            <span class="required" aria-required="true">*</span>
                                    </label>
                                    <div class="col-lg-3 col-xs-3">
                                            <select class="form-control" id="category" onchange="changeBrandOptions(this.value);">
                                                    <option value="1">Desktops</option>
                                                    <option value="2">Mobiles</option>
                                                    <option value="3">Software</option>
                                                    <option value="4">Tablets</option>
                                            </select>
                                    </div>
                            </div>

                            <div class="form-group" id="demo"> 
                                    <label for="brand" class="col-lg-4 col-xs-4 control-label">Brand
                                            <span class="required" aria-required="true">*</span>
                                    </label> 
                                    <div class="col-lg-3 col-xs-3"> 
                                            <select class="form-control" id="category"> 
                                                    <option value="1">Mac</option> 
                                                    <option value="2">Asus</option> 
                                                    <option value="3">Dell</option> 
                                                    <option value="4">Alienware</option> 
                                                    <option value="4">Other</option> 
                                            </select> 
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
                                    <label for="price" class="col-lg-4 col-xs-4 control-label">Price
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <div class="col-lg-2 col-xs-2">    								
                                        <span class="price1" >	
                                                $
                                            <input type="text" class="form-control" required id="price1" placeholder= "">
                                        </span>
                                    </div>
                                    <div class="col-lg-2 col-xs-2">

                                        <span class="price2">
                                        .
                                            <input type="text" class="form-control" required id="price2" placeholder="">
                                        </span>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="condition" class="col-lg-4 col-xs-4 control-label">Condition
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <div class="col-lg-3 col-xs-3">
                                        <select class="form-control" id="condition">
                                            <option>New</option>
                                            <option>Good</option>
                                            <option>Acceptable</option>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="price" class="col-lg-4 col-xs-4 control-label">Upload Images</label>
                              <div class="col-lg-3 col-xs-3">
                                    <a href="#" class="btn btn-default">Choose Files</a>
                              </div>
                            </div>
							
                            <div class="form-group">
                                <label for="textArea" class="col-lg-4 col-xs-4 control-label">Payment Method
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <div class="col-lg-8 col-xs-8" >                 
                                    <div class="radio" id="paymentMethod">	
                                        <label>
                                            <input type="radio" name="radio" value="" title="Choose how you would like to be paid">Contact via phone / e-mail
                                        </label>
                                    </div>
                                    <div class="radio" id="paymentMethod">
                                        <label>
                                            <input type="radio" name="radio" id="radio" value="" title="Choose how you would like to be paid">Direct payment via PayPal
                                        </label>
                                    </div>
                                    <div class="radio" id="paymentMethod">
                                        <label>
                                            <input type="radio" name="radio" value="" title="Choose how you would like to be paid">Both
                                        </label>
                                    </div>
                                </div>                                
                            </div>
							
							<div class="form-group">
                                <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                <div class="checkbox col-lg-8 col-xs-8">
                                  <label>
                                    <input type="checkbox" onClick="showPromotionDialog()" id="promotionCheckbox"> Yes promote item!
                                  </label>
                                </div> 
                            </div>


                            <div class="form-group">
                              <div class="col-lg-8 col-lg-offset-7">
                                <button class="btn btn-default"><span class="fa fa-save"></span> Save for Later</button>
                                <button class="btn btn-default">Cancel</button>
    <!-- editing this line -->  <button type="submit" value="submit" class="btn btn-primary" onClick="showAlert()">Submit</button>
                              </div>
                            </div>							
                    </fieldset>
                </form>
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



