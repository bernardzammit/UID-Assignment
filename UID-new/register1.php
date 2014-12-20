<!DOCTYPE html>
<html lang="en">


<head>
  

<script src="js/register_val.js"></script>
<script type="text/javascript" src="http://reactiveraven.github.io/jqBootstrapValidation/js/bootstrap.js"></script>
<script type="text/javascript" src = "http://reactiveraven.github.io/jqBootstrapValidation/js/jqBootstrapValidation.js"></script>
<link href="http://reactiveraven.github.io/jqBootstrapValidation/css/bootstrap.css" rel="stylesheet">

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

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-2">
              <iframe width="100%" height="300" src="http://jsfiddle.net/1du12dw2/embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
            </div>

            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        
            <div class="col-md-8">
                <form class="form-horizontal" novalidate>
                  <div class="control-group">
                    <label class="control-label">Type something</label>
                    <div class="controls">
                      <input required data-validation-required-message="Please fill out this field"  type="number" data-validation-number-message="Must be a number" />
                      <p class="help-block"></p>
                    </div>
                  </div>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Test Validation <i class="icon-ok icon-white"></i> </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <!-- /.container -->
     <!-- jQuery -->
    
    

</body>

