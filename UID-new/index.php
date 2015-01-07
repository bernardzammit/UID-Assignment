<?php 
    session_start();
    unset( $_SESSION['loggedIn'] );
    include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

</head>

<body>
   
     <div class ="container">   

    <div class="row">
       <div class="col-lg-4 col-sm-6">
            <ul class="grid cs-style-3">
                
                     <figure>
                        <img src="images/index-2.jpg">
                        
                        <figcaption>
                            <h3>Checkout the Latest Listings</h3>
                            

                        </figcaption>
                    </figure>
                
                
            </ul>


        </div><!-- /container -->

        <div class="col-lg-4 col-sm-6">
            <ul class="grid cs-style-3">
                
                    <figure>
                        <img src="images/logo.jpg">
                         <figcaption>
                            <h3>Welcome to our E-Commerce Website</h3>
                            

                        </figcaption>
                        
                       
                    </figure>

            </ul>
        </div><!-- /container -->

        <div class="col-lg-4 col-sm-6">
            <ul class="grid cs-style-3">
                
                    <figure>
                        <img src="images/index-1.jpg">
                        
                        <figcaption>
                            <h3>Sell & Promote your Products</h3>
                            

                        </figcaption>
                    </figure>
                
            </ul>
        </div><!-- /container -->

        

    </div>
</div>
    
    <script src="js/toucheffects.js"></script>


    <br>

    <!-- Page Content -->
    <div class="container">
        
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-lock"></i> Log In</h4>
                    </div>
                    <div class="panel-body">
                         <form class="form-horizontal">
                            <fieldset>
                                <!-- <legend>Log In</legend> -->
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-9" id="login-email">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-9" id="login-pass">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        <div class="checkbox" id="login-rem">
                                            <label><input type="checkbox">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-5">
                                        <a href="loggedInIndex.php" class="btn btn-primary" role="button">Log in</a>
                                        <a href="register.php" class="btn btn-primary" role="button">Register</a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-globe"></i></i> Welcome!</h4>
                    </div>
                    <div class="panel-body">
                        <p>Welcome to Digistore, an e-commerce website where users can buy and sell new and second-hand products. 
						   <br>
						   <br>
                           Upon registering, you will be able to contact other sellers to buy products and add listings to sell.
						   <br>
						   <br>
						   Promote your items to improve your sales.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-weixin"></i></i> Chat</h4>
                    </div>

                    <div class="panel-body">
                        <p><strong>Customer Support</strong></p>
                        <p>Ask here your questions, report bugs and leave your feedback :)</p>

                        <p><strong>Users Online (5)</strong></p>
                         <form class="form-horizontal">
                            <fieldset>
                            <div class="form-group">
                               
                                <div class="col-lg-10 col-lg-offset-8">
                                    <a href="register.php" class="btn btn-primary" role="button">Join</a>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                        <br>


                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Featured Items</h2>
            
            <?php include "item2.php" ?>
            <?php include "item2.php" ?>
            <?php include "item2.php" ?>
            <?php include "item.php" ?>
            <?php include "item.php" ?>
            <?php include "item.php" ?> 
            <?php include "item3.php" ?>
            <?php include "item3.php" ?>
            <?php include "item3.php" ?>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <!-- Pagination -->
        <div class="row text-center" id="divPagination">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
    <?php include 'footer.php'; ?>
    
    <script>
        $(document).ready( function(){
            $('#login-button').click(
            function() {
                // get the link in the href
                var href = $(this).attr('href');
                // Go to that URL
                window.location = href;
            });
        });

        
    </script>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow79.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>


</body>

</html>





