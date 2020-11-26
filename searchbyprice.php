<?php
    session_start();
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
				<li class="active">Search by Price</li>
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
		        <table width="179%">
		          <tr>
		            <td><form id="form1" name="form1" method="post" action="">
		              <table width="100%">
		                <tr>
		                  <td colspan="2" align="center"><h2><strong>Search Product by Rate</strong></h2></td>
	                    </tr>
		                <tr>
		                  <td width="50%">&nbsp;</td>
		                  <td width="50%">&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Choose Category</strong></td>
		                  <td><label>
		                    <select name="mc" id="mc" class="select">
		                      <option>Select</option>
		                      <?php
							     require_once("vars.php");
                                 $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		                         
		                         
		                         $query="select Cat_ID,Cat_name from addcat";
		                         $execute=mysqli_query($conn,$query);  if(!$execute)
		                         {
		                          die("Query Execution Failed"." ".mysqli_error($conn));
		                         }
								  
								  while($r=mysqli_fetch_array($execute))
								    {
									  print "<option value='$r[0]'>$r[1]</option>";
									}
		                          mysqli_close($conn);
?>
	                        </select>
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Choose Minimum Price</strong></td>
		                  <td><label>
		                    <select name="minp" id="minp" class="select">
		                      <option>Select</option>
		                      <option value="150">150</option>
		                      <option value="500">500</option>
		                      <option value="1000">1000</option>
		                      <option value="2000">2000</option>
		                      <option value="3000">3000</option>
		                      <option value="4000">4000</option>
		                      <option value="5000">5000</option>
		                      <option value="6000">6000</option>
		                      <option value="7000">7000</option>
		                      <option value="8000">8000</option>
		                      <option value="9000">9000</option>
		                      <option value="10000">10000</option>
	                        </select>
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Choose Maximum Price</strong></td>
		                  <td><label>
		                    <select name="maxp" id="maxp" class="select">
		                      <option>Select</option>
		                      <option value="10000">10000</option>
		                      <option value="9000">9000</option>
		                      <option value="8000">8000</option>
		                      <option value="7000">7000</option>
		                      <option value="6000">6000</option>
		                      <option value="5000">5000</option>
		                      <option value="4000">4000</option>
		                      <option value="3000">3000</option>
		                      <option value="2000">2000</option>
		                      <option value="1000">1000</option>
		                      <option value="500">500</option>
		                      <option value="150">150</option>
	                        </select>
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td><label>
		                    <input type="submit" name="s" id="s" value="Search Product" class="btn1" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td colspan="2"><?php
    
	if(isset($_POST["s"]))
	  {
	   $cid=$_POST["mc"];
	   $minprice=$_POST["minp"];
	   $maxprice=$_POST["maxp"];
	   require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	   
	   $q="select * from addproduct where rate between $minprice and $maxprice and cat_id=$cid"; 
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
		         <td>Product Picture</td>
				 <td>Product Name</td>
				 <td>Rate</td>
				 <td>Click to view details</td>
			   </tr>";
			   $c=0;
	        while($x=mysqli_fetch_array($execute))
		       {
			     if($c==0)
				  {
		            print "<tr bgcolor='#EED39D'>
			           <td><img width=175 height=170 src='images/$x[6]'></td>
				       <td>$x[3]</td>
				       <td>$x[4]</td>
					   <td><a href='showdetail.php?pid=$x[0]'>Show Details</a></td>
			        </tr>"; 
					$c=1;
					}
				else
				    {
					   print "<tr bgcolor='#DFC09B'>
			           <td><img width=175 height=170 src='images/$x[6]'></td>
				       <td>$x[3]</td>
				       <td>$x[4]</td>
					   <td><a href='showdetail.php?pid=$x[0]'>Show Details</a></td>
			        </tr>"; 
					 $c=0;
					}	
		        }
			print"</table>";

		}	
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