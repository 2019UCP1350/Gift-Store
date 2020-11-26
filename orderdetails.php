<?php
    session_start();
	if(!isset($_SESSION["ad"]))
	   {
	     header("location:error.php");
	   }
?><!--
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
	  include_once("adminheader.php");
	?> 
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Order Details</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		    <table width="100%" align="center" cellspacing="40">
		      <tr>
		        <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
		          <table width="100%" cellspacing="20">
		            <tr>
		              <td align="center"><h4>Order Details</h4></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><?php
       $sessid=$_GET["sessid"];
	 
	   require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	   
	   $q="select * from cart where sessionid='$sessid'"; 
	   $execute=mysqli_query($conn,$q);
	     if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
		
		$count=mysqli_num_rows($execute);
		if($count==0)
	     {
		   print"No Records Found";
		 }
		 else
		 {
		   print"<table align=center width=950 cellpadding=3 cellspacing=0>";
		   print "<tr bgcolor='#FFFBD6'>
		         <td><b>Product Picture</b></td>
				 <td><b>Product Name</b></td>
				 <td><b>Rate</b></td>
				 <td><b>Quantity</b></td>
				 <td><b>Total Cost</b></td>
				 
			   </tr>";
			   $c=0;
	        while($x=mysqli_fetch_array($execute))
		       {
			     if($c==0)
				  {
		            print "<tr bgcolor='#EED39D'>
			          <td><img src='images/$x[1]' width=100px height=100px></td>
				      
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				     
				     
			        </tr>"; 
					$c=1;
					}
				else
				    {
					   print "<tr bgcolor='#DFC09B'>
			          <td><img src='images/$x[1]' width=100px height=100px></td>
				     
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				      
				    
			        </tr>"; 
					 $c=0;
					}	
		        }
			print"</table>";

		}	
		 								   
	?></td>
	                </tr>
	              </table>
		        </form></td>
	          </tr>
	        </table>
		    <nav class="numbering animated wow slideInRight" data-wow-delay=".5s"></nav>
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