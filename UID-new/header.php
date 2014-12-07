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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php"><i class="fa fa-home fa-6"> </i></a>
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
				<ul class="nav navbar-nav navbar-left">

					<li>
                        <a href="about.html">About</a>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desktops <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Mac</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Asus</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Dell</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Alienware</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tablets <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Samsung</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Apple</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Sony</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Asus</a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobiles <b class="caret"></b></a>
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
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Software <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Gaming</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Office</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Security</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Other</a>
                            </li>
                        </ul>
                    </li>
					
					
				</ul>
				
				<ul class="nav navbar-nav navbar-right">		
					
					<li>
						<div class="form-group" id="form-search-top">
							<input type="text" class="form-control" placeholder="Search" id="search-header">
						</div>
						
					</li>
					
					<li>
						<button type="button" class="btn btn-default" id="button-top">
							<span class="fa fa-search"></span>
						</button>
                    </li>
					
					<li>
                        <a href="#">
						  <span class="pull-right fa fa-shopping-cart" id="cart-top"></span>
						</a>
                    </li>
					
					<li>
                        <a href="#">
						  <span class="pull-right fa fa-question" id="help-top"></span>
						</a>
                    </li>
					
					<!--
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
					-->
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
    })
    </script>

</body>

</html>