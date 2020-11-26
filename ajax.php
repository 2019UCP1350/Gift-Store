<?php
	if(isset($_POST["ccat"]))
	{
		$a=$_POST["ccat"];
		
		require_once("vars.php");
		$conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
		
		$qu="select * from addsubcat where Maincat_ID=$a";
		$res=mysqli_query($conn,$qu) or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn)>0)
		{
			while($x=mysqli_fetch_array($res))
			{
				print"<option value='$x[0]'> $x[1]</option>";
			}
		}
		else
		{
			print"<option>No Subcategory Available</option>";
		}
		
	}
	else
	{
		print "no";
	}

?>