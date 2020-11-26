<?php
   
   if(!isset($_SESSION["ad"]))
   {
	   header("location:login.php?id='admin'");
   }
?>
<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
				  <ul>
					  <li>
                      <?php
					   if(isset($_SESSION["n"]))
			           {
					    print "<li><a href='signout.php'>Logout</a></li>";
					   
						print"<li><a href='adminchangepass.php'>Change Password</a></li>";				  
					   }
			          else
					   {
					     print "<li> <i class='glyphicon glyphicon-log-in' aria-hidden='true'></i><a href='login.php'>Login</a></li>";                      
					   print"<li><i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='signup.php'>Signup</a></li>";
					  }
					  ?>
					</ul>
				</div>
				
				
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.php">Gift Store <span>Shop anywhere</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="adminpanel.php" class="act">Admin Panel</a></li>	
							<!-- Mega Menu -->
							<li><a href="addcat.php">Add Category</a></li>
							<li><a href="addsubcategory.php">Add Subcategory</a></li>
							<li><a href="addproduct.php">Add Product</a></li>
							<li><a href="listofproducts.php">List Of Products</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>