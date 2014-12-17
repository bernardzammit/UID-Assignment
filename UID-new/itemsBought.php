<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	<script language=javascript type='text/javascript'> 
	/*	function hideDiv() { 
		
			alert ("hide div");
			
			if (document.getElementById) { // DOM3 = IE5, NS6 
			document.getElementById('divPagination').style.visibility = 'hidden'; 
			} 
			else { 
			if (document.layers) { // Netscape 4 
			document.divPagination.visibility = 'hidden'; 
			} 
			else { // IE 4 
			document.all.divPagination.style.visibility = 'hidden'; 
			} 
			} 
		}

		function showDiv() { 
		if (document.getElementById) { // DOM3 = IE5, NS6 
		document.getElementById('divPagination').style.visibility = 'visible'; 
		} 
		else { 
		if (document.layers) { // Netscape 4 
		document.divPagination.visibility = 'visible'; 
		} 
		else { // IE 4 
		document.all.divPagination.style.visibility = 'visible'; 
		} 
		} 
		} */
	</script>

</head>

<body>

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Account
                    <small>Items Bought</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="index.php">My Account</a></li>
                    <li class="active">Items Bought</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<?php include 'sidebar.php'; ?>

		<!-- Content Column -->
		<div class="col-md-9">       
			
			<!-- Tabs according to category -->
			<ul id="myTab" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#all-tab" data-toggle="tab">All</a>
				</li>
				<li class=""><a href="#desktops-tab" data-toggle="tab"><i class="fa fa-desktop"></i> Desktops</a>
				</li>
				<li class=""><a href="#mobiles-tab" data-toggle="tab"><i class="fa fa-mobile"></i> Mobiles</a>
				</li>
				<li class=""><a href="#software-tab" data-toggle="tab"><i class="fa fa-gears"></i> Software</a>
				</li>
				<li class=""><a href="#tablets-tab" data-toggle="tab"><i class="fa fa-tablet"></i> Tablets</a>
				</li>
            </ul>
			
			<!-- Display content according to the tab selected -->
			<div id="myTabContent" class="tab-content">
				
				<div class="tab-pane fade" id="software-tab">
					<br>
					<!-- Product Row 1 -->
					<div class="row">
						<div class="col-md-5">
							<a href="viewItem.php">
								<img class="img-responsive img-hover" src="images/adobe_software.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<h3>
								<a href="blog-post.html">Adobe Acrobat X Standard</a>
							</h3>
							<h4><i>30/10/2014</i></h4><br>

							<ul>
								<li>Intel® Core™ i5 processor</li>
								<li>OS X Mavericks</li>
								<li>Hard drive: 1 TB</li>
								<li>Memory: 8 GB</li>
							</ul>
							<br>
							<span class="price"><sup>€</sup>450<sup>50</sup></span>
						</div>
					</div>
					<!-- /.row -->
				</div>
				
				<div class="tab-pane fade active in" id="desktops-tab">
					<br>
					<!-- Product Row 1 -->
					<div class="row">
						<div class="col-md-5">
							<a href="viewItem.php">
								<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<h3>
								<a href="blog-post.html">iMac 21.5</a>
							</h3>
							<h4><i>06/12/2014</i></h4><br>

							<ul>
								<li>Intel® Core™ i5 processor</li>
								<li>OS X Mavericks</li>
								<li>Hard drive: 1 TB</li>
								<li>Memory: 8 GB</li>
							</ul>
							<br>
							<span class="price"><sup>€</sup>1500<sup>00</sup></span>
						</div>
					</div>
					<!-- /.row -->
					
					<hr>
					
					<!-- Product Row 2 -->
					<div class="row">
						<div class="col-md-5">
							<a href="blog-post.html">
								<img class="img-responsive img-hover" src="images/desktop-2-1.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<h3>
								<a href="blog-post.html">iMac 21.5</a>
							</h3>
							<h4><i>29/11/2014</i></h4><br>

							<ul>
								<li>Intel® Core™ i5 processor</li>
								<li>OS X Mavericks</li>
								<li>Hard drive: 1 TB</li>
								<li>Memory: 8 GB</li>
							</ul>
							<br>
							<span class="price"><sup>€</sup>1500<sup>00</sup></span>
						</div>
					</div>
					<!-- /.row -->
					
					<hr>
					
					<!-- Product Row 3 -->
					<div class="row">
						<div class="col-md-5">
							<a href="blog-post.html">
								<img class="img-responsive img-hover" src="images/desktop-1-1.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<h3>
								<a href="blog-post.html">Product title</a>
							</h3>
							<p><i>06/12/2014</i></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							
						</div>
					</div>
					<!-- /.row -->
					
				</div>
				<div class="tab-pane fade" id="mobiles-tab" >	<!-- l-onchange hazina -->
					<br>
					
					<div class="col-md-5" >
						<p>You have not bought any Mobiles yet!</p><br>
						
						<a href="viewAllItems.php">See mobiles for sale</a>
					</div>	
					
				</div>
				<div class="tab-pane fade" id="software-tab">
					<br>
					<!-- Product Row 1 -->
					<div class="row">
						<div class="col-md-5">
							<a href="viewItem.php">
								<img class="img-responsive img-hover" src="images/adobe_software.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<h3>
								<a href="blog-post.html">Adobe Acrobat X Standard</a>
							</h3>
							<h4><i>30/10/2014</i></h4><br>

							<ul>
								<li>Intel® Core™ i5 processor</li>
								<li>OS X Mavericks</li>
								<li>Hard drive: 1 TB</li>
								<li>Memory: 8 GB</li>
							</ul>
							<br>
							<span class="price"><sup>€</sup>450<sup>50</sup></span>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<div class="tab-pane fade" id="tablets-tab">
					
				</div>
			</div>
			
			<br>
			<!-- Pagination -->
			<div class="row text-center" id="divPagination">
				<div class="col-lg-12">
					<ul class="pagination">
						<li>
							<a href="#">&laquo;</a>
						</li>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">&raquo;</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.row Pagination-->
				
		</div>
		<!-- /.Content Column -->
    </div>
    <!-- /.container -->
    
    <?php include 'footer.php'; ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>



