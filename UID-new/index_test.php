<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Extra CSS -->
    <link href="css/extracss.css" rel="stylesheet">

    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

</head>

<body>
   
            

    <div class="row">
       <div class="col-md-3 col-sm-3">
            <ul class="grid cs-style-3">
                <li>
                    <figure>
                        <img src="images/logo.jpg">
                        
                       
                    </figure>
                </li>
            </ul>
        </div><!-- /container -->

        <div class="col-md-3 col-sm-3">
            <ul class="grid cs-style-3">
                <li>
                    <figure>
                        <img src="images/index-2.jpg">
                        
                        <figcaption>
                            <h3>Checkout the Latest Listings</h3>
                            

                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div><!-- /container -->

        <div class="col-md-3 col-sm-3">
            <ul class="grid cs-style-3">
                <li>
                    <figure>
                        <img src="images/index-3.jpg">
                        
                        <figcaption>
                            <h3>Sell your Products</h3>
                            

                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div><!-- /container -->

        <div class="col-md-3 col-sm-3">
            <ul class="grid cs-style-3">
                <li>
                    <figure>
                        <img src="images/index-1.jpg">
                        
                        <figcaption>
                            <h3>Promote your Products</h3>
                            

                        </figcaption>
                    </figure>
                </li>
            </ul>
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
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-globe"></i></i> Welcome!</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi e</p>
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
