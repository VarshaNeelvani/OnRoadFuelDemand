<?php
$conn = mysqli_connect("b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com", "ungq3eze6t76zt2v", "gKDg6YLdRDIADNXHy58g", "b7xqzvtfanhnwhk0ydhl", 3306);
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