<?php
    session_start();
	if(isset($_POST["s"]))
	  {
	    $name=$_POST["nm"];
		$email=$_POST["em"];
		$phone=$_POST["ph"];
		$qu1=$_POST["q1"];
		$qu2=$_POST["q2"];
		$qu3=$_POST["q3"];
		$qu4=$_POST["q4"];
		$sug=$_POST["suggest"];
		
		require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		
		
		$query="insert into  feedback(name,username,phone,rate,design_rate,info_enough,future_products,suggestion) values('$name','$email','$phone','$qu1','$qu2','$qu3','$qu4','$sug')";
		$execute=mysqli_query($conn,$query);  if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
		mysqli_close($conn);
header("location:feedbackthanks.php");
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
				<li class="active">Feedback  Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="half">
		<div class="container">
		  <div class="col-md-8 single-right">
		    <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
				
			  <div class="description">
				<table width="273%" cellspacing="30">
						  <tr>
						    <td><form id="form1" name="form1" method="post">
						      <table width="91%">
						        <tr>
						          <td colspan="2" align="center"><h3>Feedback</h3></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td width="41%"><font face="Arial, Helvetica, sans-serif"><strong>Name</strong></font></td>
						          <td width="59%"><label>
						            <input type="text" name="nm" id="nm" required />
						            </label></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><font face="Arial, Helvetica, sans-serif"><strong>Email </strong></font></td>
						          <td><input type="text" name="em" id="em" required /></td>
					            </tr>
						        <tr>
						          <td height="28">&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td height="28"><font face="Arial, Helvetica, sans-serif"><strong>Phone</strong></font></td>
						          <td><input type="text" name="ph" id="ph" required /></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><font face="Arial, Helvetica, sans-serif"><strong>How you rate website overall ?</strong></font></td>
						          <td><strong>
						            <label>
						              <input type="radio" name="q1" value="Excellent" id="q1_" />
						              Excellent</label>
						            <label>
						              <input type="radio" name="q1" value="Very Good" id="q1_2" />
						              Very Good</label>
						            <label>
						              <input type="radio" name="q1" value="Good" id="q1_3" />
						              Good</label>
						            <label>
						              <input type="radio" name="q1" value="Average" id="q1_4" />
						              Average</label>
						            <label>
						              <input type="radio" name="q1" value="Bad" id="q1_10" />
						              Bad</label>
						            </strong></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><font face="Arial, Helvetica, sans-serif"><strong>How you rate designing of our website?</strong></font></td>
						          <td><strong>
						            <label>
						              <input type="radio" name="q2" value="Excellent" id="q1_5" />
						              Excellent</label>
						            <label>
						              <input type="radio" name="q2" value="Very Good" id="q1_6" />
						              Very Good</label>
						            <label>
						              <input type="radio" name="q2" value="Good" id="q1_7" />
						              Good</label>
						            <label>
						              <input type="radio" name="q2" value="Average" id="q1_8" />
						              Average</label>
						            <label>
						              <input type="radio" name="q2" value="Bad" id="q1_9" />
						              Bad</label>
						            </strong></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><font face="Arial, Helvetica, sans-serif"><strong>Is information provided on website enoughs?</strong></font></td>
						          <td><strong>
						            <label>
						              <input type="radio" name="q3" value="Yes" id="q3_2" />
						              Yes</label>
						            <label>
						              <input type="radio" name="q3" value="No" id="q3_3" />
						              No</label>
						            </strong></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><font face="Arial, Helvetica, sans-serif"><strong>Do you want to see more products in future?</strong></font></td>
						          <td><strong>
						            <label>
						              <input type="radio" name="q4" value="Yes" id="q3_0" />
						              Yes</label>
						            <label>
						              <input type="radio" name="q4" value="No" id="q3_1" />
						              No</label>
						            </strong></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td><strong><font face="Arial, Helvetica, sans-serif">Other Suggestion</font></strong></td>
						          <td><label>
						            <textarea name="suggest" id="suggest" cols="45" rows="5" required></textarea>
						            </label></td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr>
						          <td>&nbsp;</td>
						          <td><label>
						            <input type="submit" name="s" id="s" value="Send Feedback" class="btn1" />
						            </label></td>
					            </tr>
					          </table>
					        </form></td>
					      </tr>
			    </table>
				  <h5>&nbsp;</h5>
					</div>
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