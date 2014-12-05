<!DOCTYPE html>
<html lang="en">
<?php include 'header.html'; ?>
<head>

</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Register Page</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
              <div class="well">
                <form name = "register" id="registerForm" class="form-horizontal">
                    <fieldset>
                        <legend>Personal Details</legend>
                            <div class="form-group">
                              <label for="Name" class="col-lg-4 col-xs-4 control-label">Name</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="nameFirst">
                                    <input type="text" class="form-control" id="FName" placeholder= "First">
                                </span>
                              </div>
                              <div class="col-lg-3 col-xs-3">
                                <span class="nameLast">
                                    <input type="text" class="form-control" id="LName" placeholder="Last">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="Gender" class="col-lg-4 col-xs-4 control-label">Gender</label>
                                    <div class="col-lg-6 col-xs-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="m">Male</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="f">Female</label>
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress" class="col-lg-4 col-xs-4 control-label">Address</label>
                                <div class="col-lg-6 col-xs-6">
                                    <textarea class="form-control" rows="3" id="inputAddress"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputTown" class="col-lg-4 col-xs-4 control-label">Town</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputTown">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPostcode" class="col-lg-4 col-xs-4 control-label">Postcode</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputPostcode">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="Contact" class="col-lg-4 col-xs-4 control-label">Contact</label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="mob">
                                    <input type="text" class="form-control" id="Mobile" placeholder= "Mobile">
                                </span>
                              </div>
                              <div class="col-lg-3 col-xs-3">
                                <span class="phone">
                                    <input type="text" class="form-control" id="Phone" placeholder="Phone">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="Email" class="col-lg-4 col-xs-4 control-label">Email Address:</label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="email" class="form-control" id="email" placeholder="Example: user2014@gmail.com">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputDOB" class="col-lg-4 col-xs-4 control-label">Date of Birth</label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="text" class="form-control" name="date" placeholder="mm-dd-yyyy" id="datepicker">                               
                                    
                              </div>
                            </div>

                        <legend>Username & Password</legend>
                            <div class="form-group">
                              <label for="inputUsername" class="col-lg-4 col-xs-4 control-label">Username</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" id="inputUsername">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-4 col-xs-4 control-label">Password</label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="password" class="form-control" id="inputPassword">
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                <div class="checkbox col-lg-8 col-xs-8">
                                  <label>
                                    <input type="checkbox"> I confirm that I have read and accept the Website Terms of Use
                                  </label>
                                </div>
                                  <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                  <div class="checkbox col-lg-8 col-xs-8">
                                    <label>
                                        <input type="checkbox"> I would like to receive emails about listings and offers
                                    </label>
                                 </div>
                            </div>

                            
                            <div class="form-group">
                              <div class="col-lg-8 col-lg-offset-8">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>

                    </fieldset>
                </form>
              </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</body>
<?php include 'footer.html'; ?>

</html>
