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
                <a href="viewItem.php"><img class="img-responsive" src="images\nokia-x-plus.jpg" width="130" alt="" id="item-image"></a>
                <div class="well" id="item-thumbnail-well">
                    <div class="caption">
                        <h3>Nokia X Plus<br>
                            <small>Android</small>
                        </h3>
                        <p>Second hand Nokia X Plus, used only once...</p>
                        <ul class="list-inline">
                            <li><a title="Watch item" onClick="showAlert()"><i class="fa fa-eye fa-2x" id="watch-image"></i></i></a>
                            </li>
                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart fa-2x" id="cart-image"></i></a>
                            </li>
                            <li  id="price"><div class="col-sm-1"><span class="price"><sup>€</sup>450<sup>50</sup></span></div>
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