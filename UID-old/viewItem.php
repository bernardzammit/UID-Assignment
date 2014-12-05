<?php
	session_start();
	include 'header.php'; //contain all the codes that we will use in the webpage
	//include 'php/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Load jQuery UI CSS --> 
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> 
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


		<!--<link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/themes/flatly/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/structure/infragistics.css" rel="stylesheet" />

		 <!-- Load jQuery JS -->
    	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<!-- Load jQuery UI Main JS  -->
    	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

		<!--Load script.js which will create datepicker for input field -->
		<script src="scripts/js/datepicker.js"></script> 

	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
			
						<img class="item-image" src="images/item-image.jpg" alt="Item image">
						<div class="col-lg-4">
							<a href="#"><img class="thumbnail img-responsive" src="images/item-image.jpg" alt="Item image"></a>
						</div>

						<div class="col-lg-4">
							<a href="#"><img class="thumbnail img-responsive" src="images/item-image.jpg" alt="Item image"></a>
						</div>

						<div class="col-lg-4">
							<a href="#"><img class="thumbnail img-responsive" src="images/item-image.jpg" alt="Item image"></a>
						</div>

						
  
				</div>

				<div class="col-lg-7">
					<div class="well bs-component">					

						<h2>Item Details </h2>
						<p>Name: </p>
						<p>Brand: </p>
						<p>Condition: </p>
						<p>Date Added: </p>
						<p>Price: </p>

						<div class="btn-group btn-group-justified">
						  <a href="#" class="btn btn-default">Contact Seller</a>
						  <a href="#" class="btn btn-default">Add to Cart</a>
						</div>

						<h3>
							<div class="col-md-offset-1">
								<a href="#" class="btn btn-info"><span class="fa fa-eye"></span> Watch Item</a>
								<a href="#" class="btn btn-info"> <span class="fa fa-flag"></span> Report Item</a>
								<a href="#"><span class="fa fa-facebook"></span></a>
								<a href="#"><span class="fa fa-twitter"></span></a>
								<a href="#"><span class="fa fa-google-plus"></span></a>
							</div> 
							
						</h3>
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="col-lg-12">
					<div class="well">
						<h2>Full Description </h2>
						  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis sit amet lacus a interdum. Nulla hendrerit risus vitae nunc imperdiet blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ante nulla, euismod iaculis ligula sed, finibus ultrices justo. Praesent ultrices bibendum metus quis efficitur. Donec id nisi non enim consequat sagittis in nec risus. Etiam vel lorem metus. Aenean maximus euismod risus. Sed efficitur pellentesque erat, sit amet porta purus accumsan ut. Aliquam non tempus ligula. Sed pulvinar, elit sit amet pulvinar iaculis, odio tellus imperdiet erat, et gravida ex ipsum eu tortor. Pellentesque ut fermentum mi.

						Proin pharetra sapien non mollis maximus. Nunc velit diam, elementum ut est at, maximus viverra nisi. Nullam at efficitur magna. Donec at aliquet justo. Mauris vehicula purus et sem tempus, viverra lacinia elit sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur egestas luctus augue nec facilisis.

						Curabitur nec ex ut elit vehicula pulvinar sit amet a orci. Pellentesque lorem mauris, fringilla eget maximus vitae, lacinia sit amet mi. Praesent leo dolor, venenatis eget ipsum et, pulvinar iaculis nisi. Maecenas est velit, iaculis eget malesuada ac, finibus ut eros. Nunc pellentesque fermentum ultrices. Donec pellentesque sapien nunc, eu tempus enim consequat efficitur. Morbi egestas orci tortor, at aliquet ante ullamcorper eget. Maecenas tristique feugiat turpis quis mattis. Aenean euismod sagittis risus vel fringilla. Curabitur nisi ex, interdum non laoreet non, vulputate sit amet nunc. Maecenas luctus venenatis leo, at hendrerit velit volutpat nec. Curabitur at quam ipsum. Vivamus magna ante, lobortis id lacus sit amet, auctor scelerisque lacus. Cras eu viverra urna, eu fringilla nunc. Ut eget ipsum facilisis, condimentum velit at, condimentum ipsum.

						Duis luctus interdum odio ut mollis. Vivamus tincidunt lacus sed turpis convallis consectetur. Aenean vel nisi fringilla eros vestibulum gravida non at velit. Duis quis auctor libero. Curabitur libero lacus, malesuada sit amet pretium id, dapibus nec turpis. Aenean sit amet varius ex, vel tincidunt leo. Maecenas sit amet mollis ante, a tincidunt turpis.

						Curabitur et tellus sodales, lacinia metus at, volutpat turpis. Nulla facilisi. Nunc risus dolor, sodales non consequat sed, rutrum quis dui. Maecenas vehicula, velit sit amet rutrum pulvinar, metus nisi bibendum massa, ut feugiat dolor felis in velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eleifend sapien ut dui malesuada dignissim. Etiam eu purus ornare, cursus turpis eget, maximus justo. Maecenas at venenatis justo, quis semper sem. Pellentesque pellentesque blandit maximus. Sed in mi nec massa dictum suscipit. Ut vehicula malesuada sapien ac semper.</p>
					</div>
				</div>
			</div>
		</div>
	
	
	</body>
	<?php include 'footer.php'; ?>
	
</html>
