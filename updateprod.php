<?php
    if(isset($_POST["vsub"]))
	   {
	     $cat=$_POST["ccat"];
		 
	   }

    session_start();
    require_once("vars.php");
    $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		 
		 
	if(!isset($_SESSION["ad"]))
	   {
	     header("location:error.php");
	   }
	   $id=$_GET["id"];
	   $qu1="select * from addproduct where Product_ID=$id";
	   $rr=mysqli_query($conn,$qu1)or die(mysqli_error($conn));
	   $aa=mysqli_fetch_array($rr);
	   
	   
	   if(isset($_POST["u1"]))
	  {
	     $cat=$_POST["ccat"];
		 $sub=$_POST["csub"];
		 $pro=$_POST["product"];
		 $rat=$_POST["rate"];
		 $desc=$_POST["feature"];
		 if(empty($_FILES["pic"]["name"]))
		 {
		 $ppic=$aa[6];
		 }
		 else
		 {
		 $ppic=$_FILES["pic"]["name"];
		  move_uploaded_file($_FILES["pic"]["tmp_name"],"images/".$ppic);
		 }
		 $query="update addproduct set Cat_ID='$cat', 
		 Subcat_ID='$sub' , ProductName='$pro'  ,Rate='$rat',
		 Feature='$desc',Picture='$ppic' where Product_ID=$id";
		 $execute=mysqli_query($conn,$query);  if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
		  
		  
		   $msg="Product Updated Successfully";
		   header("location:listofproducts.php");
		
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
<script>
	$(document).ready(function(e) {
		
        $("#ccat").change(function(){
			var a=$("#ccat").val()
			if(a=="Select Category")
			{
				$("#pre").html("Choose correct Category");
				
			}
			else
			{
				$.ajax({
						
						url:"ajax.php",
						data:{"ccat":a},
						type:"POST",
						beforeSend: function()
						{
							$("#pre").html("<img src='images/preloader.gif'>");
						},
						success: function(res)
						{
							$("#pre").html("")
							$("#csub").html(res)
						},
						error: function()
						{
							$("#pre").html("Error In Ajax")
						}
					
					})
			}
			});
	});
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
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Update Product</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
		  <div class="col-md-8 products-right">
		    <table width="122%" cellspacing="20">
		      <tr>
		        <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
		          <table width="100%">
		            <tr>
		              <td><table width="100%">
		                <tr>
		                  <td colspan="2" align="center"><h2><strong>Update Product</strong></h2></td>
	                    </tr>
		                <tr>
		                  <td width="42%">&nbsp;</td>
		                  <td width="58%">&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Category</strong></td>
		                  <td><label>
		                    <select name="ccat" id="ccat" class="select">
		                      <option>Select Category</option>
		                      	<?php
							
                             $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		                         
		                      $query="select * from addcat";
		                      $execute=mysqli_query($conn,$query);  
								  
							  while($r=mysqli_fetch_array($execute))
							  {
								  if($r[0]==$aa[1])
								  {
									print "<option value='$r[0]' selected>$r[1]</option>";
								  }
								  else
								  {
								  print "<option value='$r[0]'>$r[1]</option>";
								  }
							  }
		                       
?>
	                        </select>
		                    
		                    </label>
                            <div id="pre"></div>
                            </td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong> Sub Category</strong></td>
		                  <td><label>
		                    <select name="csub" id="csub" class="select" required>
		                      <option value="">Select Sub Category</option>
		                      	<?php
							
                             $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
		                         
		                      $query="select * from addsubcat where maincat_id=$aa[1]";
		                      $execute=mysqli_query($conn,$query);  
								  
							  while($r=mysqli_fetch_array($execute))
							  {
								  if($r[0]==$aa[2])
								  {
									print "<option value='$r[0]' selected>$r[1]</option>";
								  }
								  else
								  {
								  print "<option value='$r[0]'>$r[1]</option>";
								  }
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
		                  <td><strong>Product </strong></td>
		                  <td><label>
		                    <input type="text" name="product" id="product" value="<?php print $aa[3];?>" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Rate</strong></td>
		                  <td><label>
		                    <input type="text" name="rate" id="rate" value=" <?php print $aa[4];?>" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Features</strong></td>
		                  <td><label>
		                    <textarea name="feature" id="feature" cols="45" rows="5"><?php print $aa[5]; ?></textarea>
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td><strong>Picture</strong></td>
		                  <td><?php print"<img src='images/$aa[6]' width=100 height=100>"; ?>
		                    <label>
		                      <input type="file" name="pic" id="pic" />
	                        </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td>&nbsp;</td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td><label>
		                    <input type="submit" name="u1" id="u1" value="Update Product" class="btn1" />
		                    </label></td>
	                    </tr>
		                <tr>
		                  <td>&nbsp;</td>
		                  <td><?php
						         if(isset($_POST["u1"]))
								   {
								      print "<div class='msg1'>$msg</div>";
								   }
								     
                               ?></td>
	                    </tr>
		                </table></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
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