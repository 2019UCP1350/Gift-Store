<?php
    session_start();
	if(!isset($_SESSION["un"]))
	  {
	     header("location:login.php?chk=abc");
	  }
	if(isset($_POST["payment"]))
	  {
	     $poption=$_POST["pmode"];
		 $ccnumber=$_POST["ccno"];
		 $cname=$_POST["coname"];
		 $holdname=$_POST["hname"];
		 $expd=$_POST["expdate"];
		 $shipad=$_POST["saddr"];
		 $tbill=$_SESSION["tamt"];
		 $usern=$_SESSION["un"];
		
		 $sessid=session_id();
         
		 
		 
		require_once("vars.php");
			$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		
		  
		
		 
		 $query="insert into payment(paymentmode,ccno,cconame,holdername,expiry,shipping,totalbill,username,sessionid)values('$poption',' $ccnumber',' $cname','$holdname','$expd','$shipad','$tbill','$usern','$sessid')";
		 $execute=mysqli_query($conn,$query);  if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  } 
		header("location:finalorder.php");
		 
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
				<li class="active">Checkout</li>
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
		        <form name="form1" method="post" action="">
		          <table width="200%">
		            <tr>
		              <td width="35%">Your Total Bill is Rs.<?php print   $_SESSION["tamt"]; ?></td>
		              <td width="65%">&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><strong>CHOOSE PAYMENT MODE</strong></td>
		              <td rowspan="4"><table width="79%" align="right">
		                <tr>
		                  <td width="53%">Credit Card No.</td>
		                  <td width="47%"><label>
		                    <input type="text" name="ccno" id="ccno" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td>Company Name</td>
		                  <td><label>
		                    <select name="coname" id="coname" class="select">
		                      <option selected="selected" value="">Choose Company</option>
		                      <option value="VISA">VISA</option>
		                      <option value="Master Card">Master Card</option>
	                        </select>
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td>Holder Name</td>
		                  <td><label>
		                    <input type="text" name="hname" id="hname" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td>Expiry Date</td>
		                  <td><label>
		                    <input type="text" name="expiry" id="expiry" />
		                    </label></td>
	                    </tr>
		                </table></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><p>
		                <label>
		                  <input type="radio" name="pmode" value="Cash on Delivery" id="pmode_0" />
		                  Cash on Delivery</label>
		                <br />
		                <label>
		                  <input type="radio" name="pmode" value="Credit Card" id="pmode_1" />
		                  Credit Card</label>
		                <br />
		                <label>
		                  <input type="radio" name="pmode" value="Cheque/Draft" id="pmode_2" />
		                  Cheque/Draft</label>
		                <br />
		                </p></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>Shipping Address</td>
		              <td><label>
		                <textarea name="saddr" cols="30" rows="5" id="saddr" required></textarea>
		                </label></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
		              <td><input type="submit" name="payment" id="payment" value="Complete Order" class="btn1" /></td>
	                </tr>
	              </table>
	            </form>
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