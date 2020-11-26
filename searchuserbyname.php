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
				<li><a href="adminpanel.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Searchuser by Name</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		    <table width="100%" cellspacing="20">
		      <tr>
		        <td><form id="form1" name="form1" method="post" action="">
		          <table width="100%" cellspacing="20">
		            <tr>
		              <td colspan="2" align="center"><h2><font face="Arial, Helvetica, sans-serif"><strong>Search Member</strong></font></h2></td>
	                </tr>
		            <tr>
		              <td width="43%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
		              <td width="57%">&nbsp;</td>
	                </tr>
		            <tr>
		              <td><font face="Arial, Helvetica, sans-serif"><strong>Name</strong></font></td>
		              <td><label>
		                <input type="text" name="nm" id="nm" required />
		                </label></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td><label>
		                <input type="submit" name="s" id="s" value="Search" class="btn1" />
		                </label></td>
	                </tr>
		            <tr>
		              <td colspan="2"><?php
    
	if(isset($_POST["s"]))
	  {
	   $n=$_POST["nm"];
	   require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	   
	   $q="select * from signup where Name like '$n%'"; 
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
		   print"<br /><table align=center width=950 cellpadding=3 cellspacing=0>";
		   print "<tr bgcolor='#FFFBD6'>
		         <td>Name</td>
				 <td>Address</td>
				 <td>Gender</td>
				
				 <td>Country</td>
				 <td>City</td>
				 <td>State</td>
				 <td>Phone</td>
				 
			   </tr>";
			   $c=0;
	        while($x=mysqli_fetch_array($execute))
		       {
			     if($c==0)
				  {
		            print "<tr bgcolor='#EED39D'>
			          <td>$x[0]</td>
				      <td>$x[1]</td>
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				      <td>$x[6]</td>
				      
			        </tr>"; 
					$c=1;
					}
				else
				    {
					   print "<tr bgcolor='#DFC09B'>
			          <td>$x[0]</td>
				      <td>$x[1]</td>
				      <td>$x[2]</td>
				      <td>$x[3]</td>
				      <td>$x[4]</td>
				      <td>$x[5]</td>
				      <td>$x[6]</td>
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