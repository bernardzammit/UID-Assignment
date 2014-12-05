<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>    
        <div class="container">
        <div class="body" id="body-1">
        <div class="row" id="body-upper"> <!-- welcome/login -->
            <div class="container-fluid">
                <div class="col-lg-5" id="log-in"> <!-- LOGIN DIV -->
                    <div class="well bs-component">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Log In</legend>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        <div class="checkbox">
                                            <label><input type="checkbox">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-primary" id="login-button">Log in</button>
                                        <button type="submit" class="btn btn-primary" id="register-button">Register</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div> <!-- LOGIN DIV -->

                <div class="col-lg-4" id="welcome"> <!-- WELCOME DIV -->
                    <div class="alert alert-dismissable alert-info">
                        <h3>Welcome!</h3> at its layout. The point of using Lorem 
                        Ipsum is that it has a more-or-less normal distribution of 
                        letters, as opposed to using 'Content here, content here', 
                        making it look like readable English. Many desktop publishing 
                        packages and web page editors now use Lorem Ipsum as their 
                        default model text, and a search for 'lorem ipsum' will uncover 
                        many web sites still in their infancy. Various versions have 
                        evolved over the
                    </div>
                </div> <!-- WELCOME DIV -->

                <div class="col-lg-3" id="welcome-2"> <!-- WELCOME DIV -->
                    <div class="alert alert-dismissable alert-info">
                        <h3>Welcome!</h3> at its layout. The point of using Lorem 
                        Ipsum is that it has a more-or-less normal distribution of 
                        letters, as opposed to using 'Content here, content here', 
                        making it look like readable English. Many desktop publishing 
                        packages and we
                    </div>
                </div> <!-- WELCOME DIV -->
            </div> <!-- container-fluid of whole row -->
        </div> <!-- WELCOME/LOGIN ROW -->

        <div class="row" id="featured"> <!-- Featured -->
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="well well-lg">
                        <h3 id="h3-feat">FEATURED</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (3) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
        <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (3) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
    </div> <!-- BODY -->
    </div>
</body>
    
    <?php include 'footer.php'; ?>
</html>
