<?php
    session_start();
	ob_start();
	
	    $prodid=$_GET["pid"];
				
		include_once("vars.php");
        $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
				 
		$query="select * from addproduct where product_id='$prodid'";
		$result=mysqli_query($conn,$query) or die(mysqli_error($conn)); 
		$x=mysqli_fetch_array($result);
     	 
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
				<li class="active">Show Details</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
		  <div class="col-md-8 single-right">
			  <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/si.jpg">
								<div class="thumb-image"> 
                                <?php
                                  print "<img src='images/$x[6]' height=150px width=150px >";
								?>
                                </div>
							</li>
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>
					  <?php
                      print  $x[3] ;
					?>
                    </h3>
					<h4>
                    <?php
					   print "Rs. $x[4]";
					?>
                    </h4>
					
					<div class="description">
						<h5><i>Description</i></h5>
						<p> 
						    <?php
							  print $x[5];
                             ?>
                        </p>
					</div>
					
						<div class="color-quality-left">
							<h5>Quantity :</h5>
							<form name="form1" method="post" action="">
							  <p>
							    <label for="qty"></label>
							    <input type="text" name="qty" id="qty" value="1">
							  </p>
							  <p>&nbsp;</p>
							  <p>
							    <input type="submit" name="cart" id="s1" value="Add to Cart" class="btn1">
                              </p>
		                  </form>
							<p>&nbsp;</p>
							<?php
							   if(isset($_POST["cart"]))
							   {
		                        
								$pic=$x[6];
			                    $pname=$x[3];
			                    $rt=$x[4];
								
			                    $q=$_POST["qty"];
			                    $tc=$rt*$q;
								
			                    $sessid=session_id();
			                    $_SESSION["sid"]=$sessid;
			                   $q="insert into cart(ProductPic,ProductName,rate,quantity,totalcost,sessionid) values('$pic','$pname','$rt','$q','$tc','$sessid')";
			                    $execute=mysqli_query($conn,$q);
								$_SESSION["shoppingcart"]="true";
                                header("location:showcart.php");
		                      
							   }
							 ?>
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
<!-- single-related-products -->
	<div class="single-related-products"></div>
<!-- //single-related-products -->
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