<?php
   session_start();
	if(!isset($_SESSION["ad"]))
	   {
	     header("location:error.php");
	   }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Online Gift Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
	<?php
	  include_once("adminheader.php");
	?>

	
<!-- //banner-bottom -->
<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Admin Panel</h3>
			<div class="new-collections-grids">
					<h4><a href="addcat.php">Add Category</a></h4><br/>
                    <h4><a href="addsubcategory.php">Add Subcategory</a></h4><br/>
                    <h4><a href="addproduct.php">Add Product</a></h4><br/>
					 <h4><a href="listofcategory.php">List / Update / Delete Category</a></h4><br/>
                    <h4><a href="listofsubcat.php">List / Update / Delete Subcategory</a></h4><br/>
                    <h4><a href="listofproducts.php">List / Update / Delete Product</a></h4><br/>
                    <h4><a href="listoforder.php">List of Orders</a></h4><br/>
                    <h4><a href="searchmember.php">Search User</a></h4><br/>
                    <h4><a href="listofuser.php">List of Users</a></h4><br/>
                    <h4><a href="viewfeedback.php">View Feedback</a></h4><br/>
                    <h4><a href="searchuserbyname.php">Search By User Name</a></h4><br/>                   
                    <h4><a href="viewcontactus.php">View Messages</a></h4>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->
<!-- new-timer --><!-- //new-timer -->
<!-- collections-bottom --><!-- //collections-bottom -->
<!-- footer -->
	<?php
	 include_once("footer.php");
	?>
<!-- //footer -->
</body>
</html>