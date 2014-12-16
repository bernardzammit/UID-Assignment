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
        <div class="well" id="categories">
            <h3>Mobiles</h3>
            <div class="row">
                <div class="col-md-3">
                    <h4>Brand</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-12" id="category-checkbox">
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==1){ echo 'checked = checked';} ?>> HTC
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==2){ echo 'checked = checked';} ?>> Nokia
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==3){ echo 'checked = checked';} ?>> Apple
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==4){ echo 'checked = checked';} ?>> LG
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==5){ echo 'checked = checked';} ?>> Samsung
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==6){ echo 'checked = checked';} ?>> Blackberry
                            </label>
                            <br />
                            <label>
                                <input type="checkbox" <?php if($checkbox_val==7){ echo 'checked = checked';} ?>> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Operating System</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-12" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Android
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Blackberry
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Windows Phone
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> iOS
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Features</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-12" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Large display
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Small dimensions
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Keyboard
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> 4G
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Other
                            </label>
                        </div>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Price</h4>
                    <ul class="list-unstyled">
                        <div class="checkbox col-xs-12" id="category-checkbox">
                            <label>
                                <input type="checkbox"> Under €100
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> €100 - €300
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> €300 - €500
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> €500 - €700
                            </label>
                            <br />
                            <label>
                                <input type="checkbox"> Over €700
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </body>
</html>