<?php
 session_start();
 ob_start();
 

					  if(isset($_POST["s1"]))
					  {
						$uname=$_POST["email"];
						$pass=$_POST["pass"];
						
						include_once("vars.php");
					    $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
						$qu="select name,usertype from signup where username='$uname' and password='$pass'";
					    $execute=mysqli_query($conn,$qu); 
		                $x=mysqli_fetch_array($execute);
						
						$sessionid=session_id();
						$qu2="select count(*) from cart where sessionid='$sessionid'";
					    $execute2=mysqli_query($conn,$qu2); 
		                $y=mysqli_fetch_array($execute2);
						
						 if(empty($x[0]))
		   				{
                          $msg="Invalid Username/Password";
                        }
                        else
                        {
                          $_SESSION["n"]=$x[0];
                          $_SESSION["un"]=$uname;
                          if($x[1]=="Admin")
                          {
                            $_SESSION["ad"]="Admin";
                            header("location:adminpanel.php");
                          }
                          else
                          {
						  
                            if($y[0]>0)
                            {
                              header("location:checkout.php");
                            }
                            else
                            {
                              header("location:index.php");
                            }
                          }		   
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
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">&nbsp;</p>
            <?php
					if(isset($msg))
					{
						print"<div class='msg2'> $msg </div>";
					}
				?>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input name="email" id="email" type="email" placeholder="Email Address" required >
					<input name="pass" id="pass" type="password" placeholder="Password" required >
					<input type="submit" value="Login" id="s1" name="s1">
                    
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="signup.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
</body>
</html>