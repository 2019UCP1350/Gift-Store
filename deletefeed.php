<?php
    session_start();
	$id=$_GET["id"];
	 require_once("vars.php");
$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error());
	   
	   
	   $q="delete from feedback where id=$id"; 
	   $execute=mysqli_query($conn,$q);
	     if(!$execute)
		  {
		    die("Query Execution Failed"." ".mysqli_error($conn));
		  }
	   header("location:viewfeedback.php");
	?>