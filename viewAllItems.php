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
        <div class="container" id="view-all-items">
            <div class="row" id="search">
                <div class="col-lg-2"> <!-- column 1 search -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>MANUFACTURER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Nokia
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> HTC
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Apple
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Samsung
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 1 search -->
                <div class="col-lg-2"> <!-- column 2 search -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>DISPLAY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 5" or larger
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 4.5" to 5"
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 4" to 4.5"
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Less than 4"
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 2 search -->
                <div class="col-lg-2"> <!-- column 3 search -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>CAMERA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> High Resolution
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 4K video
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 1080p video
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 720p video
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 3 search -->
                <div class="col-lg-2"> <!-- column 4 search -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>TECHNOLOGY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Quad Core
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Dual Core
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 4G
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> 3G
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 4 search --> 
                <div class="col-lg-2"> <!-- column 5 search -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>OS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Android
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Windows
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> IOS
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> BlackBerry
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 5 search --> 
                <div class="col-lg-2"> <!-- column 6 search -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>DIMENSIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Thin
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Small
                                    </label>              
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox"> Light weight
                                    </label>              
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- column 6 search --> 
            </div>
            
            <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (1) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
        <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (2) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
        <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (2) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
        <div class="row" id="items"> <!-- WHOLE ROW OF ITEMS (2) -->
            <div class="container-fluid">
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
                <?php include 'item.php' ?>
            </div>
        </div> <!-- WHOLE ROW OF ITEMS -->
    </div>
    </body>
        <?php include 'footer.php'; ?>

</html>