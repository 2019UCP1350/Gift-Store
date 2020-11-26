<?php
  ob_start();
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
.style5 {font-family: Arial, Helvetica, sans-serif}
</style>
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<script type="text/javascript">
function abc()
{

      if(document.form1.name.value.lenght<1)
	     {
		   alert("Please Fill Name")
		   return false
		 }
	  if(document.form1.add.value.lenght<1)
	     {
		   alert("Please Fill Address")
		   return false
		 }
	   if(document.form1.r[0].checked==false && document.form1.r[1].checked==false )
	     {
		   alert("Please Choose Gender")
		   return false
		 }
        if(document.form1.city.value.lenght<1)
	     {
		   alert("Please Fill City")
		   return false
		 }
		 if(document.form1.state.value.lenght<1)
	     {
		   alert("Please Fill State")
		   return false
		 }
		  if(document.form1.phone.value.lenght<10)
	     {
		   alert("Please Fill valid phone Number")
		   return false
		 }
		  if(document.form1.pic.value.lenght<1)
	     {
		   alert("Please Upload your Image")
		   return false
		 }
		  if(document.form1.email.value.lenght<1)
	     {
		   alert("Please Fill Username")
		   return false
         }
		  if(document.form1.pwd.value.lenght<6)
	     {
		   alert("Please Fill Password with minimum 6 characters")
		   return false
		 }
		  if(document.form1.cpwd.value.lenght<1)
	     {
		   alert("Please Fill Confirm Password ")
		   return false
		 }
		 var p1,p2
		 p1=document.form1.pwd.value;
		 p2=document.form1.cpwd.value; 
		 if(p1!=p2)
		  {
		    alert("Password doesn't match")
		  }
		  
		 
}

</script>
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
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Signup Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Signup Form</h3>
			<div class="login-form-grids">
			  <h5 class="animated wow slideInUp" data-wow-delay=".5s">Please provide following information</h5>
				<form method="post" enctype="multipart/form-data" class="animated wow slideInUp" data-wow-delay=".5s">
					<input type="text" name="email" id="email" placeholder="Email..." required >
                    <input type="password" name="pass" id="pass" placeholder="Password..." required >
                    <input type="password" name="cpass" id="cpass" placeholder="Confirm Password..." required >
                    <input type="text" name="name" id="name" placeholder="Name..." required ><br/>
                    <input type="text" name="add" id="add" placeholder="Address..." required ><br/>
                    Gender :- &nbsp;<input type="radio" name="r" id="male" value="Male" placeholder="..." required > Male&nbsp;
                    <input type="radio" name="r" id="male" placeholder="..." value="Female" required > Female<br/><br/>
			<input type="text" name="phno" id="phno" placeholder="Phone no..." required >
                     
                   <br/>
                      <input type="text" name="city" id="city" placeholder="City..." required ><br/>
                      <input type="text" name="state" id="state" placeholder="State..." required ><br/>
					   <select name="country" id="country" placeholder="country.." required>
                        <option value="select">Choose Country</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="China">China</option>
                        <option value="Japan">Japan</option>
                        <option value="Australia">Australia</option>
                        <option value="Other">Other</option>
                      </select><br/>
                      
				      
					<input type="submit" name="signup" value="Signup" onclick="return abc()">
                    <?php
     if(isset($_POST["signup"]))
	    {
		   $nm=$_POST["name"];
		   $ad=$_POST["add"];
		   $gn=$_POST["r"];		 
		   $cn=$_POST["country"];
		   $ct=$_POST["city"];
		   $st=$_POST["state"];
		   $ph=$_POST["phno"];
		   $em=$_POST["email"];
		   $pd=$_POST["pass"];
		   
		   include_once("vars.php");
		   $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
		   $query="insert into signup values('$nm','$ad','$gn','$cn','$ct','$st','$ph','$em','$pd','Normal')";
		   $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
		  
		   header("location:success.php");
		}
?>	
				</form>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- footer -->
	<?php
	  include_once("footer.php");
	?>
<!-- //footer -->
</body>
</html>