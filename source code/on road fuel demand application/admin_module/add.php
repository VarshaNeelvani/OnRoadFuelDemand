<html>
      <head>
	        <title> add</title>
			<style>
			    .button{
	  background:#641E16;
	  border:none;
	  border-radius:25%;
	  color:white;
	  padding:10px 15px;
	  text-align: left;
	  text-decoration:none;
	  display:inline-block;
	  font-size:16px;
	  margin:4px 2px;
	  cursor:pointer;
	}
	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow:hidden ;
  margin:10;
  padding:0;
  background-color: #82E0AA; 
}

.topnav a {
  float: left;
  border-right:1px solid #bbb;
  color: white;
  text-align: center;
 padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#641E16 ;
  color: white;
}

.topnav a.active {
  background-color:#641E16;
  color: white;
}
		 .box {
        width: 230px;
        height: 40px;
        border: 1px solid #999;
        font-size: 18px;

        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
</style>
	  </head>
     <body background="bg.jpeg" style="background-repeat:no-repeat;background-size:99% 99%;">
<center>
<h1 style = "font-family: Georgia, serif;" ><font color="black">ON ROAD FUEL DEMAND APPLICATION</font color></h1><br/>
<h2><marquee direction="left"><font color="#2874A6">"On-road fuel supply applications for developing on-demand fuel supplies depend on user orders and
requirements."</font color></marquee></h2><br/>
<div class="topnav">
  <a href="adminhomepage.php">Home</a>
  <a class="active" href="fuelstation.php">Fuel Stations</a>
  <a href="enquiry.php">Enquiry </a>
  <a href="#about">About</a>
  <a href="#about">Log out</a>
</div>
<br/>
	      <center>
		  <form method="POST">
			<table width="500" cellpadding="10" cellspacing="0">
			 <tr >
            <td colspan="5" align ="center"><font color ="#d2d636"> <h2>  <font color ="BLACK"> FUEL STATION ADD FORM </font color> </font color> </h2></td>		
			</tr>
			<tr ><td  colspan ="3"></td></tr>
			
			<tr >
			 <td><label for="number"><b><font color ="#2874A6"><h2>SHOP ID: </h2></b></label></td>
            <td><input type="text" name="e1" id="number"class="box" placeholder="Enter shop ID" /></td><br/><br/>
			</tr>
			 <tr >
			 <td><label for="uname"><b><font color ="#2874A6"><h2>SHOP NAME:</h2> </b></label></td>
            <td><input type="text" name="e2"id="Uname1" class="box" placeholder="Enter shop name" /></td><br/><br/>
			</tr>	
			 			
			<tr >
            <td><label for="unname"><b><font color ="#2874A6"><font color ="#2874A6"><h2>WORK FACILITY DETAILS :</h2></b></label></td>
            <td> <input type="text" placeholder="Enter your facility" class="box" name="e3" required > </td><br/><br/>
			 </tr>
			<tr >
				<td><label><b><font color ="#2874A6"><h2>SERVICE CHARGE:</h2></font color></b></label></td></td>
				<td><input type="number"  name="e4" class="box" placeholder="Enter service charge" required > </td>
			</tr>
			<tr >
				<td colspan="2" align="center">
			    <input type="submit" class="button" name="submit" value="add">
				
				</td>
				</tr>
			</table><br/><br/>
			</form>
				</body>
				</html>

<?php
  $conn = mysqli_connect("b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com", "ungq3eze6t76zt2v", "gKDg6YLdRDIADNXHy58g", "b7xqzvtfanhnwhk0ydhl", 3306);
  if(isset($_POST['submit']))
  {
	  $v1=$_POST["e1"];
	  $v2=$_POST["e2"];
	  $v3=$_POST["e3"];
	  $v4=$_POST["e4"];
	  echo $v1;
	  echo $v2;
	  echo $v3;
	  echo $v4;
	  $query=mysqli_query($conn,"insert into work_details VALUES('$v1','$v2','$v3','$v4')");
	  if($query)
	  {
		  echo "<script type='text/javascript'>alert('your fuel station added successfully');
			   window.location.assign('fuelstation.php')</script>";
	  }
	  else
	  {
		  echo "<script type='text/javascript'>alert('failed');
			   window.location.assign('fuelstation.php')</script>";
      }
  }
  ?>