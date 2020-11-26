<?php
    session_start();
	if(!isset($_SESSION["ad"]))
	   {
	     header("location:error.php");
	   }
	if(isset($_POST["s"]))
     {
        $catn=$_POST["cname"];
		$catp=$_FILES["cpic"]["name"];
		
		require_once("vars.php");
		$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		$query="insert into addcat(cat_name,cat_pic)values('$catn','$catp')"; 
		$execute=mysqli_query($conn,$query) or die(mysqli_error($conn));
         move_uploaded_file($_FILES["cpic"]["tmp_name"],"images/".$_FILES["cpic"]["name"]);
		 $msg="Category Added successfully";
		
		  
	 }
	?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Online Gift Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>

	<script src="js/simpleCart.min.js"> </script>

<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>

</head>
	
<body>

	<?php
	  include_once("adminheader.php");
	?> 
	<div class="breadcrumbs">
<div class="container">
<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
<li><a href="adminpanel.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
<li class="active">Add Category</li>
</ol>
</div>
	</div>
	<div class="products">
<div class="container">
<div class="col-md-8 products-right">
  <table width="100%" align="center" cellspacing="40">
 <tr>
<td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="100%" align="center" cellspacing="20">
   <tr>
    <td colspan="2" align="center"><h2><strong>Add Category</strong></h2></td>
  </tr>
 <tr>
  <td width="33%">&nbsp;</td>
 <td width="67%">&nbsp;</td>
 </tr>
<tr>
  <td><strong>Category Name</strong></td>
  <td><label>
    <input type="text" name="cname" id="cname" required />
</label></td>
</tr>
<tr>
 <td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><strong>Category Picture</strong></td>
<td><label>
<input type="file" name="cpic" id="cpic" />
   </label></td>
</tr>
<tr>
<td>&nbsp;</td>
 <td>&nbsp;</td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><label>
 <input type="submit" name="s" id="s" value="Add Category" class="btn1" />
</label></td>
</tr>
 <tr>
<td>&nbsp;</td>
<td><?php
if(isset($_POST["s"]))
{
  print "<div class='msg1'>$msg</div>";
 }
?></td>
</tr>
</table>
</form></td>
</tr>
</table>
<nav class="numbering animated wow slideInRight" data-wow-delay=".5s"></nav>
</div>
<div class="clearfix"> </div>
</div>
</div>

<?php
  include_once("footer.php");
?>
</body>
</html>