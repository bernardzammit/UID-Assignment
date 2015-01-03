<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digistore</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Extra CSS -->
    <link href="css/extracss.css" rel="stylesheet">
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58190031-1', 'auto');
	  ga('send', 'pageview');

	</script>

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
                <!--<a class="navbar-brand" href="#" title="Log in"><i class="fa fa-lock fa-6"></i></a>-->
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a class="navbar-brand" href="index.php" title="Log in"><i class="fa fa-lock fa-6"></i></a>
                        <ul class="dropdown-menu">
                            <div class="col-md-12">
                                <div id="dropdown-login" class="panel panel-default">
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
                        </ul>
                    </li>
                </ul>
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
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-desktops.php'?>&checkbox=<?php echo '2'?>">Apple</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-desktops.php'?>&checkbox=<?php echo '3'?>">Asus</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-desktops.php'?>&checkbox=<?php echo '4'?>">Other</a>
                            </li>
                        </ul>
                    </li>
                    
                 <!--   <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '0'?>" class="dropdown-toggle" data-toggle="dropdown" id="laptops">Laptops <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '1'?>">Apple</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '2'?>">Asus</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '3'?>">Dell</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '4'?>">Alienware</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '5'?>">Acer</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '6'?>">HP</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-laptops.php'?>&checkbox=<?php echo '7'?>">Other</a>
                            </li>
                        </ul>
                    </li> -->
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '0'?>" class="dropdown-toggle" data-toggle="dropdown" id="tablets">Tablets <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '1'?>">Acer</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '2'?>">Apple</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '3'?>">Microsoft</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '4'?>">Samsung</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-tablets.php'?>&checkbox=<?php echo '5'?>">Other</a>
                            </li>
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '0'?>" class="dropdown-toggle" data-toggle="dropdown" id="mobiles">Mobiles <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '1'?>">HTC</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '2'?>">Nokia</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '3'?>">Apple</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '4'?>">LG</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '5'?>">Samsung</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '6'?>">Blackberry</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-mobiles.php'?>&checkbox=<?php echo '7'?>">Other</a>
                            </li>
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '0'?>" class="dropdown-toggle" data-toggle="dropdown" id="software">Software <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '1'?>">Operating Systems</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '2'?>">Office</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '3'?>">Security/Anti-Virus</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '4'?>">Photo & Video</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '5'?>">Gaming</a>
                            </li>
                            <li>
                                <a href="viewAllItems.php?varname=<?php echo 'viewAll-software.php'?>&checkbox=<?php echo '6'?>">Other</a>
                            </li>
                        </ul>
                    </li>
		</ul>
				
				<ul class="nav navbar-nav navbar-right">		
					
					<li>
						<div class="form-group" id="form-search-top">
							<!--<input type="text" class="form-control" placeholder="Item, price, category" id="search-header" width=100%>-->
                            <input type="text" class="form-control" placeholder="Search by item, price, category" width= 80%>
						</div>
						
					</li>
					
					<li>
						<button type="button" class="btn btn-default" id="button-top">
							<span class="fa fa-search"></span>
						</button>
                    </li>
					
					<li>
                        <a href="#" >
                            <span class="pull-right fa fa-shopping-cart fa-lg" id="cart-top" title="You have no items in your cart" data-alert-text=" Added to cart" data-toggle="modal" href="#myModal"></span>
						</a>
                    </li>
					
					<li>
                        <a href="faq.php">
						  <span class="pull-right fa fa-question fa-lg" id="help-top" title="Help"></span>
						</a>
                    </li>
					
                </ul>
            </div>


             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">You must log in below or register to view cart!</h4>
                        </div>
                    <div class="modal-body">
                        
                         <form class="form-horizontal">
                                            <fieldset>
                                                <!-- <legend>Log In</legend> -->
                                                <div class="form-group">
                                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-9" id="login-email">
                                                        <input type="text" class="form-control" id="inputEmail" placeholder="monnique@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                                    <div class="col-lg-9" id="login-pass">
                                                        <input type="password" class="form-control" id="inputPassword" placeholder="********">
                                                        <div class="checkbox" id="login-rem">
                                                            <label><input type="checkbox">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-5">
                                                        <a href="loggedInIndex.php" class="btn btn-primary" role="button">Log in</a>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                    </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    </div>
                </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <div class="alert alert-success collapse" id="alert">
            <button type="button" class="close" id="close-alert">&times;</button>
            <strong>Success!</strong><span></span>
        </div>
    </nav>
    

	
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        
        $(document).ready(function() {
            $('.watch-btn, .add-cart-btn').click(function() {
                    $('#alert').removeClass().addClass('alert alert-success');
                    var text = $(this).data('alert-text');
                    $('#alert').find('span').text(text);
                    $('#alert').show();
            });
        });
        
        $(document).ready(function() {
            $('#close-alert').click(function() {
                $('#alert').hide();
            });
        });
        
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
    
    function show_sidebar()
    {
        document.getElementById('sidebar').style.visibility="visible";
    }

    function hide_sidebar()
    {
        document.getElementById('sidebar').style.visibility="hidden";
    }
    
    
    
    </script>

</body>

</html>