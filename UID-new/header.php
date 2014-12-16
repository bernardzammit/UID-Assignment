<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Commerce Website</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Extra CSS -->
    <link href="css/extracss.css" rel="stylesheet">

</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" title="Home"><i class="fa fa-home fa-6"> </i></a>
                <a class="navbar-brand" href="#" title="Log in"><i class="fa fa-lock fa-6"></i></a>
                <a class="navbar-brand" href="register.php" title="Register"><i class="fa fa-pencil fa-6"></i></a>
                		
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                    <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-desktops.php'?>&checkbox=<?php echo '0'?>" class="dropdown-toggle" data-toggle="dropdown" id="desktops">Desktops <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-desktops.php'?>&checkbox=<?php echo '1'?>">Dell</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Apple</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Asus</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>" class="dropdown-toggle" data-toggle="dropdown" id="laptops">Laptops <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Apple</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Asus</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Dell</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Alienware</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Acer</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">HP</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>" class="dropdown-toggle" data-toggle="dropdown" id="tablets">Tablets <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Samsung</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Apple</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Microsoft</a>
                            </li>
                            <li>
                                <a href="portfolio-5-col.html">Acer</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>" class="dropdown-toggle" data-toggle="dropdown" id="mobiles">Mobiles <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">HTC</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Apple</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">LG</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Nokia</a>
                            </li>
                            <li>
                                <a href="portfolio-5-col.html">Samsung</a>
                            </li>
                            <li>
                                <a href="portfolio-5-col.html">Blackberry</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>" class="dropdown-toggle" data-toggle="dropdown" id="software">Software <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Gaming</a>
                            </li>
                            <li>
                                <a href="portfolio-1-col.html">Office</a>
                            </li>
                            <li>
                                <a href="portfolio-1-col.html">Security/Anti-Virus</a>
                            </li>
                            <li>
                                <a href="portfolio-1-col.html">Photo & Video</a>
                            </li>
                            <li>
                                <a href="portfolio-1-col.html">Gaming</a>
                            </li>
                            <li>
                                <a href="portfolio-1-col.html">Other</a>
                            </li>
                        </ul>
                    </li>
		</ul>
				
				<ul class="nav navbar-nav navbar-right">		
					
					<li>
						<div class="form-group" id="form-search-top">
							<input type="text" class="form-control" placeholder="Item, price, category" id="search-header" width=100%>
						</div>
						
					</li>
					
					<li>
						<button type="button" class="btn btn-default" id="button-top">
							<span class="fa fa-search"></span>
						</button>
                    </li>
					
					<li>
                        <a href="shoppingCart.php">
                            <span class="pull-right fa fa-shopping-cart fa-lg" id="cart-top" title="My cart"></span>
						</a>
                    </li>
					
					<li>
                        <a href="#">
						  <span class="pull-right fa fa-question fa-lg" id="help-top" title="Help"></span>
						</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    
    $(document).ready( function(){
        $('#desktops').click(
        function() {
            // get the link in the href
            var href = $(this).attr('href');
            // Go to that URL
            window.location = href;
        });
    });
    
    $(document).ready( function(){
        $('#laptops').click(
        function() {
            // get the link in the href
            var href = $(this).attr('href');
            // Go to that URL
            window.location = href;
        });
    });
    
    $(document).ready( function(){
        $('#tablets').click(
        function() {
            // get the link in the href
            var href = $(this).attr('href');
            // Go to that URL
            window.location = href;
        });
    });
    
    $(document).ready( function(){
        $('#mobiles').click(
        function() {
            // get the link in the href
            var href = $(this).attr('href');
            // Go to that URL
            window.location = href;
        });
    });
    
    $(document).ready( function(){
        $('#software').click(
        function() {
            // get the link in the href
            var href = $(this).attr('href');
            // Go to that URL
            window.location = href;
        });
    });
    
    </script>

</body>

</html>