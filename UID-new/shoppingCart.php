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
                <h1 class="page-header">Shopping Cart
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Item One -->
        <div class="row">
            <div class="col-md-4">
                <a href="viewItem.php">
                    <img class="img-responsive img-hover" src="images/tablet-1-1.jpg" alt="" width=75%>
                </a>
            </div>
            <div class="col-md-4">
                <h3>SAMSUNG Galaxy Tab 4 10.1" Tablet - 16 GB, Black</h3>
                <h4>Tablets</h4>
                <span class="price"><sup>€</sup>650<sup>00</sup></span>
            </div>
            <div class="col-md-2">
                <br>
                <div class="input-group number-spinner">
                    <span class="input-group-btn data-dwn">
                        <button class="btn btn-default btn-default" data-dir="dwn"><span class="fa fa-minus"></span></button>
                    </span>
                    <input type="text" class="form-control text-center" value="1" min="0" max="40">
                    <span class="input-group-btn data-up">
                        <button class="btn btn-default btn-default" data-dir="up"><span class="fa fa-plus"></span></button>
                    </span>
                </div>
            </div>

            <div class="col-md-2">
                <br>
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Remove</i></a>
            </div>

            <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Remove Item</h4>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to remove this item from your shopping cart? 
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-primary">Yes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Item Two -->
        <div class="row">
            <div class="col-md-4">
                <a href="viewItem.php">
                    <img class="img-responsive img-hover" src="images/tablet-1-1.jpg" alt="" width=75%>
                </a>
            </div>
            <div class="col-md-4">
                <h3>SAMSUNG Galaxy Tab 4 10.1" Tablet - 16 GB, Black</h3>
                <h4>Tablets</h4>
                <span class="price"><sup>€</sup>650<sup>00</sup></span>
            </div>
            <div class="col-md-2">
                <br>
                <div class="input-group number-spinner">
                    <span class="input-group-btn data-dwn">
                        <button class="btn btn-default btn-default" data-dir="dwn"><span class="fa fa-minus"></span></button>
                    </span>
                    <input type="text" class="form-control text-center" value="1" min="0" max="40">
                    <span class="input-group-btn data-up">
                        <button class="btn btn-default btn-default" data-dir="up"><span class="fa fa-plus"></span></button>
                    </span>
                </div>
            </div>

            <div class="col-md-2">
                <br>
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Remove</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="row">
            <div class="col-md-6">
                <p></p>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h3>Subtotal: €--.--</h3>
                    <h1><b>Total: €--.--</b></h1>
                    <div class="col-md-10 col-lg-offset-6">
                        <button class="btn btn-default">Continue Shopping</button>
						<a href="checkout-1.php" class="btn btn-primary" role="button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Project Three -->
        
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



