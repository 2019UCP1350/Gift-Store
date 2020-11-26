<?php
    session_start();
	if(isset($_POST["s"]))
	  {
	    $name=$_POST["nm"];
		$email=$_POST["em"];
		$phone=$_POST["ph"];
		$sug=$_POST["query"];
		
		include_once("vars.php");
        $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		
		
		$query="insert into contactus(name,username,phone,query) values('$name','$email','$phone','$sug')";
		$execute=mysqli_query($conn,$query);  
		
        $msg="Your Query is submitted successfully";
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
<style type="text/css">
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
</style>
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
				<li class="active">Contact us</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="half">
		<div class="container">
		  <div class="col-md-8 single-right">
		    <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">		
			  
				<table width="100%">
						  <tr>
						    <td><form id="form1" name="form1" method="post">
						      <table width="88%" cellspacing="20">
						        <tr>
						          <td align="center"><h2><font face="Arial, Helvetica, sans-serif"><strong>Contact Us</strong></font></h2></td>
					            </tr>
						        <tr>
						          <td><table width="931" align="center">
						            <tbody>
						              <tr>
						                <td valign="top" width="923"><table width="100%" cellspacing="20">
						                  <tr>
						                    <td colspan="3" class="style3">&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td colspan="3" class="style3">Please complete the form below for any kind of enquiry related to online product...</td>
					                      </tr>
						                  <tr>
						                    <td width="22%">&nbsp;</td>
						                    <td width="31%">&nbsp;</td>
						                    <td width="47%" rowspan="8" valign="top">&nbsp;&nbsp;&nbsp;<img src="pics/Capture (2).JPG" alt="bbb" width="225" height="200" /></td>
					                      </tr>
						                  <tr>
						                    <td><span class="style3">Name</span></td>
						                    <td><label>
						                      <input type="text" name="nm" id="nm" required />
						                      </label></td>
					                      </tr>
						                  <tr>
						                    <td>&nbsp;</td>
						                    <td>&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td><span class="style3">Email-ID</span></td>
						                    <td><label>
						                      <input type="text" name="em" id="em" required />
						                      </label></td>
					                      </tr>
						                  <tr>
						                    <td>&nbsp;</td>
						                    <td>&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td><span class="style3">Phone No.</span></td>
						                    <td><input type="text" name="ph" id="ph" required /></td>
					                      </tr>
						                  <tr>
						                    <td>&nbsp;</td>
						                    <td>&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td><span class="style1"><strong>Query/Suggestions</strong></span></td>
						                    <td><label>
						                      <textarea name="query" id="query" cols="25" rows="5" required></textarea>
						                      </label></td>
					                      </tr>
						                  <tr>
						                    <td>&nbsp;</td>
						                    <td>&nbsp;</td>
						                    <td>&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td>&nbsp;</td>
						                    <td><label>
						                      <input type="submit" name="s" id="s" value="Submit" class="btn1" />
						                      </label></td>
						                    <td>&nbsp;</td>
					                      </tr>
						                  <tr>
						                    <td height="37">&nbsp;</td>
						                    <td><?php
                           if(isset($_POST["s"]))
						      {
							    print "<div class='msg1'> $msg</div>";
							  }
					     ?></td>
					                      </tr>
					                    </table></td>
					                  </tr>
					                </tbody>
					              </table></td>
					            </tr>
					          </table>
					        </form></td>
					      </tr>
			    </table>
				  
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