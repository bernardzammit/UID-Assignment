<!DOCTYPE html>
<html lang="en">
    
<?php 
    session_start();
    $_SESSION['loggedIn'] = 1;
    include 'loggedInHeader.php';
    ?>
    
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

     <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type = "text/javascript">
        function displayNextImage() {
            x = (x === images.length - 1) ? 0 : x + 1;
            document.getElementById("img").src = images[x];
        }
        
        function displayPreviousImage() {
            x = (x <= 0) ? images.length - 1 : x - 1;
            document.getElementById("img").src = images[x];
        }

        function startTimer() {
            setInterval(displayNextImage, 3000);
        }

        var images = [], x = -1;
        images[0] = "image1.jpg";
        images[1] = "image2.jpg";
        images[2] = "image3.jpg";
      </script>
</head>

<body onload="startTimer()">
	
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
    
		


    </div>

    <!-- Page Content -->
    <div class="container">
		
        <!-- Marketing Icons Section -->
        <div class="row">
           
            <div class="col-md-4">
                <div id="carousel-logged-in" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        
                        <div class="item active">
                            <img id="car-software" src="images/adobe_creative.jpg" alt="..." width="182px">
                            <!--
                            <div class="carousel-caption">
                                <h3>Software</h3>
                            </div>
                            -->
                        </div>
                        
                        <div class="item">
                            <img id="car-mobile" src="images/nokia-x-plus.jpg" alt="..." width="130px">
                            <!--
                            <div class="carousel-caption">
                                <h3>Mobiles</h3>
                            </div>
                            -->
                        </div>
                        
                        <div class="item">
                            <img id="car-tablet" src="images/tablet-1-3.jpg" alt="..." width="205px">
                            <!--
                            <div class="carousel-caption">
                                <h3>Tablets</h3>
                            </div>
                            -->
                        </div>
                        
                        <div class="item">
                            <img id="car-tablet" src="images/desktop-3-3.jpg" alt="..." width="205px">
                            <!--
                            <div class="carousel-caption">
                                <h3>Desktops</h3>
                            </div>
                            -->
                        </div>
                    </div>

                    
                  </div> <!-- Carousel -->
            </div>
            <div class="col-md-8">
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
						   Promote your items now to improve your sales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Featured Items</h2>
            </div>
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
    
</body>

</html>
