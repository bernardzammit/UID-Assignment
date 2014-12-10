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
    <!-- Page Content -->
    <div class="container">
        
        <!-- Item Categories Well -->
        <div class="well" id="categories">
            <h3>All Categories</h3>
            <div class="row">
                <div class="col-xs-2">
                    <h4>Mobile</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> HTC
                            </label>
                            <label>
                                <input type="checkbox"> Nokia
                            </label>
                            <label>
                                <input type="checkbox"> Apple
                            </label>
                            <label>
                                <input type="checkbox"> LG
                            </label>
                            <label>
                                <input type="checkbox"> Samsung
                            </label>
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h4>Desktops</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Mac
                            </label>
                            <label>
                                <input type="checkbox"> Asus
                            </label>
                            <label>
                                <input type="checkbox"> Dell
                            </label>
                            <label>
                                <input type="checkbox"> Alienware
                            </label>
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h4>Tablets</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Samsung
                            </label>
                            <label>
                                <input type="checkbox"> Sony
                            </label>
                            <label>
                                <input type="checkbox"> Apple
                            </label>
                            <label>
                                <input type="checkbox"> Asus
                            </label>
                            <label>
                                <input type="checkbox"> Acer
                            </label>
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h4>Software</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Gaming
                            </label>
                            <label>
                                <input type="checkbox"> Security
                            </label>
                            <label>
                                <input type="checkbox"> Office
                            </label>
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h4>Other</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> HTC
                            </label>
                            <label>
                                <input type="checkbox"> Nokia
                            </label>
                            <label>
                                <input type="checkbox"> Apple
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h4>Other</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-4" id="category-checkbox">
                            <label>
                                <input type="checkbox"> HTC
                            </label>
                            <label>
                                <input type="checkbox"> Nokia
                            </label>
                            <label>
                                <input type="checkbox"> Apple
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">All items</h2>
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
    </div>
    <!-- /.container -->


    <?php include 'footer.php'; ?>

</body>

</html>
