<?php
    session_start();
	if(!isset($_SESSION["ad"]))
	   {
	     header("location:error.php");
	   }
	if(isset($_POST["s"]))
	  {
	    $n=$_POST["scname"];
		$mcid=$_POST["mc"];
		$pic=$_FILES["scpic"]["name"];
		require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
			  
		  
		
		$query="insert into addsubcat(Subcat_Name,Maincat_ID,Subcat_PIC)values('$n','$mcid','$pic')"; 
		$execute=mysqli_query($conn,$query);  if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
		mysqli_close($conn);
move_uploaded_file($_FILES["scpic"]["tmp_name"],"images/".$_FILES["scpic"]["name"]);
		$msg="Sub-Category Added Successfully";
		
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
				<li class="active">Add Subcategory</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		   <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table width="100%" cellspacing="10">
		      <tr>
		        <td colspan="2" align="center"><h2><strong>Add Subcategory</strong></h2></td>
	          </tr>
		      <tr>
		        <td width="47%">&nbsp;</td>
		        <td width="53%">&nbsp;</td>
	          </tr>
		      <tr>
		        <td><strong>Subcategory Name</strong></td>
		        <td><label>
		          <input type="text" name="scname" id="scname" required />
		          </label></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td><strong>Main Category</strong></td>
		        <td><label>
		          <select name="mc" id="mc" class="select">
		            <option>Select</option>
		            <?php
				        require_once("vars.php");
                        $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		                                 
		                $query="select * from addcat";
		                $execute=mysqli_query($conn,$query);  
					    while($r=mysqli_fetch_array($execute))
						{
						   print "<option value='$r[0]'>$r[1]</option>";
						}
                    ?>
	              </select>
		          </label></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td><strong>Subcategory Picture</strong></td>
		        <td><label>
		          <input type="file" name="scpic" id="scpic" />
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
		        <td>&nbsp;</td>
		        <td><?php
						         if(isset($_POST["s"]))
								   {
								      print "<div class='msg1'>$msg</div>";
								   }
                               ?></td>
	          </tr>
	        </table>
            </form>
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