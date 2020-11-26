<?php
    session_start();
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
	  include_once("header.php");
	?>

	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Search by Name</li>
			</ol>
		</div>
	</div>

	<div class="single">
		<div class="container">
		  <div class="col-md-8 single-right">
		    <div class="col-md-7 single-right-left simpleCart_shelfItem">
		      <div class="description">
				<table width="156%">
						  <tr>
						    <td><form id="form1" name="form1" method="post" action="">
						      <table width="88%" cellspacing="20">
						        <tr>
						          <td width="100%"><?php
    
	if(isset($_GET["id"]))
	  {
		
	   $n=$_GET["id"];
	   require_once("vars.php");
	   
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	   
	   $q="select * from addproduct where ProductName like '%$n%'"; 
	   $execute=mysqli_query($conn,$q);
	     if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
		
	   $count=mysqli_num_rows($execute);
	   if($count==0)
	     {
		   print"No Records Found";
		 }
		 else
		 {
		   print"<table align=center width=950 cellpadding=3 cellspacing=0>";
		   print "<tr bgcolor='#FFFBD6'>
		         <td>Product Picture</td>
				 <td>Product Name</td>
				 <td>Rate</td>
				 <td>Click to view details</td>
			   </tr>";
			   $c=0;
	        while($x=mysqli_fetch_array($execute))
		       {
			     if($c==0)
				  {
		            print "<tr bgcolor='#EED39D'>
			           <td><img width=175 height=170 src='images/$x[6]'></td>
				       <td>$x[3]</td>
				       <td>$x[4]</td>
					   <td><a href='showdetail.php?pid=$x[0]'>Show Details</a></td>
			        </tr>"; 
					$c=1;
					}
				else
				    {
					   print "<tr bgcolor='#DFC09B'>
			           <td><img width=175 height=170 src='images/$x[6]'></td>
				       <td>$x[3]</td>
				       <td>$x[4]</td>
					   <td><a href='showdetails.php?pid=$x[0]'>Show Details</a></td>
			        </tr>"; 
					 $c=0;
					}	
		        }
			print"</table>";

		}	
	}					   
	
?></td>
					            </tr>
					          </table>
					        </form></td>
					      </tr>
			    </table>
			  </div>
				<div class="clearfix"> </div>
			</div>
				
					
		  </div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s"></div>
	  </div>
			<div class="clearfix"> </div>
		</div>
	

	<?php
	   include_once("footer.php");
	?>

	<script src="js/imagezoom.js"></script>

</body>
</html>