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
				<li class="active">Sub Categories</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		    <div class="products-right-grid">
					
			  <div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s"></div>
			    <table width="144%" border="0" align="center">
			      <tr>
			        <td><?php
	
				 include_once("vars.php");
				 $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
                 $a=$_GET["id"];	
				 $qu="select * from addsubcat where maincat_id=$a";
				 $res=mysqli_query($conn,$qu) or die(mysqli_error($conn));
				 $num=mysqli_affected_rows($conn);
				 if($num>0)
				 {
					 $co=1;
					 print"<table width='100%' align='center'>";
					 while($ans=mysqli_fetch_array($res))
					 {
						 if($co==1)
						 {
							 print"<tr width='100%' align='center'>";
						 }
						 print"<td><a href='showproduct.php?pid=$ans[0]'><img src='images/$ans[3]' width='200px' height='200px'><br/>$ans[1]</a></td>";
						 $co++;
						 if($co==4)
						 {
							 print"</tr>";
							 $co=1;
						 }
					 }
					 print"</table>";
				 }
				 else
				 {
					 print"No Category Available";
				 }
				?></td>
		          </tr>
		      </table>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
		    </div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
		  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- footer -->
	<?php
	  include_once("footer.php");
	?>
<!-- //footer -->
</body>
</html>