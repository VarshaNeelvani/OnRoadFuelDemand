<?php
$conn =mysqli_connect ("localhost","root","","id20499452_onroadfueldemand");
$query=mysqli_query($conn, "SELECT  * FROM work_details");
?>
<html>
<head>
<title> delete </title>
</head>
<?php
{
	$shop_id=$_GET['id'];
	echo $shop_id;
	$query =mysqli_query ($conn ,"DELETE FROM work_details WHERE shop_id = '$shop_id' ");
	if($query)
	{
			 echo"<script type='text/javascript'>alert('Deleted successful');
			   window.location.assign('fuelstation.php')</script>";
	}
	else
	{
			 echo"<script type='text/javascript'>alert('Deletion Failed');
			   window.location.assign('fuelstation.php')</script>";
	}
}
?>
</body>
</html>