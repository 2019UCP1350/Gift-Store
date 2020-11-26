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
				<li class="active">Search Member</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		    <table width="100%" cellspacing="20">
		      <tr>
		        <td><form action="" method="post" name="form1" id="form1">
		          <table width="100%" cellspacing="20">
		            <tr>
		              <td colspan="2" align="center"><h3><font face="Arial, Helvetica, sans-serif"><strong>Search Member</strong></font></h3></td>
	                </tr>
		            <tr>
		              <td width="48%"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
		              <td width="52%">&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><font face="Arial, Helvetica, sans-serif"><strong>Enter the Username to Search</strong></font></td>
		              <td><label>
		                <input type="text" name="u" id="u" required />
		                </label></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td><label>
		                <input type="submit" name="s" id="s" value="Submit" class="btn1" />
		                </label></td>
	                </tr>
		            <tr>
		              
		              <td colspan="2" align="center"><?php
                               
	                             if(isset($_POST["s"]))
	                              {
	                               $un=$_POST["u"];
	
	                               include_once("vars.php");
                                   $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	                               
	                               $q="select * from signup where username='$un'"; 
	                               $execute=mysqli_query($conn,$q); 
	                               
	                               $x=mysqli_fetch_array($execute);
								   if(empty($x[0]))
								     {
									   print "No Record Found";
									 }
									else
									 {
									   print"<table width='100%'>
                                         <tr>
                                           <td width='19%'>&nbsp;</td>
                                           <td width='81%'>&nbsp;</td>
                                         </tr>
                                         <tr>
                                           <td><strong><font face='Arial, Helvetica, sans-serif'>Details Of Users</font></strong></td>
                                           <td>&nbsp;</td>
                                         </tr>
                                         <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                         </tr>
                                         <tr>
                                            <td><strong>Name</strong></td>
                                            <td>";
                                              print $x[0];
						                      print"</td>
                                          </tr>
                                          <tr>
                                            <td><strong>Address</strong></td>
                                            <td>";
                                               print $x[1];
						                       print"</td>
                                          </tr>
                                          <tr>
                                            <td><strong>Gender</strong></td>
                                            <td>";
                                               print $x[2];
						                       print"</td>
                                          </tr>
                                          <tr>
                                            <td><strong>Date of Birth</strong></td>
                                            <td>";
                                              print $x[3];
						                      print"</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Country</strong></td>
                                              <td>";
                                                print $x[4];
						                        print"</td>
                                             </tr>
                                             <tr>
                                               <td><strong>City</strong></td>
                                               <td>";
                                                 print $x[5];
						                         print"</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>State</strong></td>
                                                 <td>";
                                                   print $x[6];
						                           print"</td>
                                               </tr>
                                               <tr>
                                                 <td><strong>Phone</strong></td>
                                                 <td>";
                                                   print $x[7];
						                           print"</td>
                                                </tr>
                                                
                                                 <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                 </tr>
                                          </table>";
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