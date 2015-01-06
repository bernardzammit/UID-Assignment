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

</head>

<body>		
		<!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
					<div class="list-group-item">
						<h3>Hi Monique!
						<span class="glyphicon glyphicon-user pull-right" ></span>
						</h3>
					</div>
				
                    <a href="profile.php" class="list-group-item">Profile</a>
                    <a href="addItem.php" class="list-group-item">Add Item</a>
                    <a href="currentListings.php" class="list-group-item">Current Listings<span class="badge">8</span></a>
                    <a href="itemsBought.php" class="list-group-item">Items Bought<span class="badge">10</span></a>
                    <a href="itemsSold.php" class="list-group-item">Items Sold<span class="badge">5</span></a>
					<a href="watchList.php" class="list-group-item">Watch List<span class="badge">2</span></a>
                </div>
            </div>
            