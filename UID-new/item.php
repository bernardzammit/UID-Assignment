<!DOCTYPE html>
<html lang="en">
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
        
    </head>
    
    <body>
        <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
                <div class="form-group" id="successAlert"> </div>
                <a href="viewItem.php"><img class="img-responsive" src="images\adobe_software.jpg" width="130" alt="" id="item-image"></a>
                <div class="well" id="item-thumbnail-well">
                    <div class="caption">
                        <h3>Adobe Acrobat X Standard<br>
                            <small>For Windows</small>
                        </h3>
                        <p>The Acrobat X Standard Software for Windows from Adobe is a software suite that allows you to...</p>
                        <ul class="list-inline">
                            <li><a href="#" title="Watch item" onClick="showAlert()"><i class="fa fa-2x fa-eye" id="watch-image"></i></i></a>
                            </li>
                            <li><a href="#" title="Add to cart"><i class="fa fa-2x fa-shopping-cart" id="cart-image"></i></a>
                            </li>
                            <li  id="price"><div class="col-sm-1"><span class="price"><sup>€</sup>60<sup>00</sup></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script>
        function showAlert() {
            //alert('show message');
            var y = document.getElementById("successAlert");
            y.innerHTML = ' <div class="alert alert-dismissable alert-success"> \
                            <button type="button" class="close" data-dismiss="alert">×</button> \
                            Item added to Watch List. \
                            </div> \ ';
            return false;
        }
    </script>
</html>