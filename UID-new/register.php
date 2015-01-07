<?php session_start();
    if ( isset($_SESSION['loggedIn'])) {
        include 'loggedInHeader.php';
    } else {
        include 'header.php';
    }
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Load script.js which will create datepicker for input field -->
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="js/datepicker.js"></script>

   <script type="text/javascript">
        function CheckAndSubmit () {
            if(!confirm('Registration was successful!'))
              {return false;}
        }
    </script>

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
                <form id="registerForm" class="form-horizontal" method="POST" onSubmit="return CheckAndSubmit()">
                    <fieldset>
                        <legend>Personal Details</legend>
                        <div class="form-group">
                              <label for="Name" class="col-lg-4 col-xs-4 control-label">Name
                              <span class="required" aria-required="true">*</span>
                              </label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="nameFirst">
                                    <input type="text" class="form-control" required id="fName" placeholder= "First">
                                </span>
                              </div>
                              <div class="col-lg-3 col-xs-3">
                                <span class="nameLast">
                                    <input type="text" class="form-control" required id="lName" placeholder="Last">
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
                              <label for="Contact" class="col-lg-4 col-xs-4 control-label">Contact <span class="required" aria-required="true">*</span></label>
                              <div class="col-lg-3 col-xs-3">
                                <span class="mob">
                                    <input type="number" class="form-control" required id="mobile" placeholder= "Mobile">
                                </span>
                              </div>
                              <div class="col-lg-3 col-xs-3">
                                <span class="number">
                                    <input type="number" class="form-control" required id="phone" placeholder="Phone">
                                </span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-4 col-xs-4 control-label">Email Address <span class="required" aria-required="true">*</span></label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="email" class="form-control" required id="email" placeholder="Example: user2014@gmail.com">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputDOB" class="col-lg-4 col-xs-4 control-label">Date of Birth</label>
                              <div class="col-lg-6 col-xs-6">
                                    <input type="date" class="form-control" name="date" id="datepicker">                               
                              </div>
                            </div>
                            <br>

                        <legend>Username & Password</legend>
                            <div class="form-group">
                              <label for="inputUsername" class="col-lg-4 col-xs-4 control-label">Username <span class="required" aria-required="true">*</span></label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="text" class="form-control" required id="inputUsername">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-4 col-xs-4 control-label">Password <span class="required" aria-required="true">*</span></label>
                              <div class="col-lg-6 col-xs-6">
                                <input type="password" class="form-control" required id="inputPassword">
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                <div class="checkbox col-lg-8 col-xs-8">
                                  <label>
                                    <input type="checkbox" required> I confirm that I have read and accept the Website Terms of Use
                                  </label>
                                </div>
                                  <label for="textArea" class="col-lg-4 col-xs-4 control-label"></label>
                                  <div class="checkbox col-lg-8 col-xs-8">
                                    <label>
                                        <input type="checkbox"> I would like to receive emails about listings and offers
                                    </label>
                                 </div>
                            </div>

                            <br>

						                    
                            <div class="form-actions">
                              <div class="col-lg-8 col-lg-offset-7">
                                <button type = "button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="fa fa-save"></span> Save for Later</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Save for Later</h4>
                                      </div>
                                      <div class="modal-body">
                                        Your registration form will be saved! Shortly you will receive an email with a link to complete your form.
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <button class="btn btn-default">Cancel</button>
                                <button class="btn btn-primary" type="submit" >Submit</button>

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
<?php include 'footer.php'; ?>

</html>
