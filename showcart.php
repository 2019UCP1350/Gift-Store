<?php
     session_start();
	 include_once("vars.php");
     $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	 if(isset($_REQUEST["submit_x"]))
	 {
	   header("location:index.php");
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
				<li class="active">Show Cart</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
		  <div class="col-md-8 single-right"><h2>Shopping Cart</h2>
		    <div class="col-md-7 single-right-left simpleCart_shelfItem">
		      <div class="description">
				<table width="156%">
						  <tr>
						    <td><form id="form1" name="form1" method="get" action="">
						      <table width="100%" cellspacing="20">
						        <tr>
						          <td>
								  <?php
        $sessid=session_id();
	 
	   include_once("vars.php");
	   $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
	   $q="select * from cart where sessionid='$sessid'"; 
	   $execute=mysqli_query($conn,$q) or die(mysqli_error($conn));
		
		$count=mysqli_num_rows($execute);
		if($count==0)
	     {
		   print"No Records Found";
		 }
		 else
		 {
		   print"<table align=center width=950 cellpadding=3 cellspacing=0>";
		   print "<tr bgcolor='#FFFBD6'>
		         <td>Product Pic</td>
				 <td>Product Name</td>
				 <td>Rate</td>
				 <td>Quantity</td>
				 <td>Total Cost</td>
				 <td>Delete</td>
				
				 
			   </tr>";
			   $c=0;
	        while($x=mysqli_fetch_array($execute))
		       {
			     
			     if($c==0)
				  {
		            print "<tr bgcolor='#EED39D'>
			          <td><img src='images/$x[1]' height=100 width=100></td>
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				      <td><a href='delcartprod.php?id=$x[0]'><img src='pics/Delete.png' height=15 width=15></a></td>
				       
			        </tr>"; 
					$c=1;
					}
				else
				    {
					   print "<tr bgcolor='#DFC09B'>
					  <td><img src='images/$x[1]' height=100 width=100></td>
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				      <td><a href='delcartprod.php?id=$x[0]'><img src='pics/Delete.png' height=15 width=15></a></td>
	
			        </tr>";
						
							
					}	
		        }
				 $q2="select sum(totalcost) from cart where sessionid='$sessid'";
							 $execute2=mysqli_query($conn,$q2);
							 if(!$execute2)
		                     {
		                       die("Query Execution Failed"." ".mysqli_error($conn));
		                     }
							 $x2=mysqli_fetch_array($execute2);
							 mysqli_close($conn);
							 print "<tr><td colspan=3></td><td>Grand Total </td><td>$x2[0]</td></tr>";
							 $_SESSION["tamt"]=$x2[0];							                         
							$c=0;
			print"</table>";
			$msg="You have $count product in your Cart";

		}	
		 ?>								   
	</td>
					            </tr><br/><br/>
						        <tr>
						          <td><?php
                            if($count>0)
                            {
							   print $msg;
                            }
                             ?></td>
					            </tr>
						        <tr>
						          <td>
                                      <br>
								  <a href="index.php">
						         <img src="images/continue_shopping.png" width="170px" border="0"/>
						            </a>
                                      <?php
                            if($count>0)
                            {
						           print '<a href="checkout.php">
									<img src="images/checkout.png" width="100px" border="0"/>
								   </a>';
                            }
                                      ?>
						            </td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td>
								 </td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          
					            </tr>
					          </table>
						    </form></td>
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