<?php
    session_start();
	if(!isset($_SESSION["n"]))
	   {
	     header("location:error.php");
	   }
	if(isset($_POST["s"]))
	 {
	  $op=$_POST["curp"];
	  $np=$_POST["newp"];
	  $cp=$_POST["cnfp"];
	  $u=$_SESSION["un"];
	  
	  if($np==$cp)
	   {
	     require_once("vars.php");
         $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	     
	     
	     $query="update signup set password='$np' where username='$u' and password='$op' ";
	     $execute=mysqli_query($conn,$query);
		 $r=mysqli_affected_rows($conn);

         if($r==1)
	       {
		    $msg="Password Changed Successfully";
		   }
	     else
	       {
		    $msg="Current Password does not match";
		   }
	    }
	else
		{
		  $msg="Both Password does not match";
	    }
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
				<li class="active">Change Password</li>
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
			    <table width="190%" cellspacing="20">
			      <tr>
			        <td><form id="form1" name="form1" method="post" action="">
			          <table width="97%" cellspacing="15">
			            <tr>
			              <td colspan="2" align="center"><h2><strong>Change Password</strong></h2></td>
		                </tr>
			            <tr>
			              <td width="46%">&nbsp;</td>
			              <td width="54%">&nbsp;</td>
		                </tr>
			            <tr>
			              <td><strong>Current Password</strong></td>
			              <td><label>
			                <input type="password" name="curp" id="curp" required />
			                </label></td>
		                </tr>
			            <tr>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
		                </tr>
			            <tr>
			              <td><strong>New Password</strong></td>
			              <td><label>
			                <input type="password" name="newp" id="newp" required />
			                </label></td>
		                </tr>
			            <tr>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
		                </tr>
			            <tr>
			              <td><strong>Confirm Password</strong></td>
			              <td><label>
			                <input type="password" name="cnfp" id="cnfp" required />
			                </label></td>
		                </tr>
			            <tr>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
		                </tr>
			            <tr>
			              <td>&nbsp;</td>
			              <td><label>
			                <input type="submit" name="s" id="s" value="Change Password" class="btn3" />
			                </label></td>
		                </tr>
			            <tr>
			              <td>&nbsp;</td>
			              <td><?php
						       if(isset($_POST["s"]))
						      {
							    print "<div class='msg1'> $msg</div>";
							  }
					     ?></td>
		                </tr>
		              </table>
			          </form></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
		          </tr>
		        </table>
			    <h5>&nbsp;</h5>
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