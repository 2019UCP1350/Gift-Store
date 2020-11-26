<?php
  session_start();
?>
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
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
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
<!-- banner -->
	<?php
	  include_once("banner.php")
	?>
<!-- //banner -->
<!-- banner-bottom -->
	
<!-- //banner-bottom -->
<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Choose Category</h3>
			<div class="new-collections-grids">
						<?php
						  include_once("vars.php");
						  $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
						  $qu="select * from addcat";
						  $result=mysqli_query($conn,$qu) or die(mysqli_error($conn));
						  $num=mysqli_affected_rows($conn) or die(mysqli_error($conn));
						  if($num>0)
						  {
							  $co=1;
							  print"<table width='100%' align='center'>";
							  while($ans=mysqli_fetch_array($result))
							  {
								  if($co==1)
								  {
									  print"<tr width='100%' align='center'>";
								  }
								  print"<td><a href='showsubcat.php?id=$ans[0]'><img src='images/$ans[2]' width='200px' height='200px'><br/>$ans[1]</a></td>";
								  $co++;
								  if($co==4)
								  {
									 print"</tr>";
								     $co=1;
								  }
								}
							  print"</table>";
						  }
						  else
						  {
							  print"No category Available";
						  }
						?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->
<!-- new-timer --><!-- //new-timer -->
<!-- collections-bottom --><!-- //collections-bottom -->
<!-- footer -->
	<?php
	 include_once("footer.php");
	?>
<!-- //footer -->
</body>
</html>