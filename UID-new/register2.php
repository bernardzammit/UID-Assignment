<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

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
                <form id="registerForm" class="form-horizontal" method="POST">
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
                                    <input type="text" class="form-control" name="date" placeholder="mm-dd-yyyy" id="datepicker">                               
                                    
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

                            
                            <div class="form-group">
                              <div class="col-lg-8 col-lg-offset-7">
                                <button class="btn btn-default"><span class="fa fa-save"></span> Save for Later</button>
                                <button class="btn btn-default">Cancel</button>
                                <button class="btn btn-primary" type="submit" data-toggle="modal-confirm" data-target="submit-register"  >Submit</button>
                              </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="submit-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Registration</h4>
                                  </div>
                                  <div class="modal-body">Successfully Completed!</div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-confirm="modal">OK</button>
                                  </div>
                                </div>
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