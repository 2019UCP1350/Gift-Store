<?php
    session_start();
	$sessid=$_SESSION["sid"];

	
		require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		
		  
		
		 
		 $query="select * from payment where sessionid='$sessid'";
		 $execute=mysqli_query($conn,$query);  
		 if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  } 
		$x=mysqli_fetch_array($execute);
		session_regenerate_id();
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
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
	  include_once("header.php");
	?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Final Order</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
		  <div class="col-md-8 single-right">
		    <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
		      <div class="description">
		        <table width="181%" cellspacing="20">
		          <tr>
		            <td colspan="2"><strong><font color="#670303">Thanks for placing order on our Website.</font></strong></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Your Order No. is <?php print $x[0]; ?></td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Your Shipping Address is :- <?php print $x[6]; ?></td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
	              </tr>
		          <tr>
		            <td>Your Total bill is Rs.<?php print $x[7]; ?>/-</td>
		            <td>&nbsp;</td>
	              </tr>
	            </table>
		      </div>
				<div class="clearfix"> </div>
			</div>
				
					
		  </div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s"></div>
	  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<!-- single-related-products --><!-- //single-related-products -->
<!-- footer -->
	<?php
	   include_once("footer.php");
	?>
<!-- //footer -->
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script>
<!-- //zooming-effect -->
</body>
</html>