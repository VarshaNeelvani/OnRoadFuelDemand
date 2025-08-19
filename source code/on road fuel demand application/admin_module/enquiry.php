<html>
 <head>
  <title>enquiry</title>
 </head>
 <style>
  input[type=text]{
	  width:10%;
	  padding:15px 20px;
	  margin:8px 0;
	  box-sizing:border-box;
  }
  input[type=submit]
  {
	  margin:4px 2px;
	  padding:5px 22px;
	  cursor:pointer;
	  width:5%;
  }
  
  input::placeholder{
	  font-size:20px;
	  text-align:center;
	  letter-spacing:2px;
  }
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow:hidden ;
  margin:10;
  padding:0;
  background-color: #82E0AA; //box sizing:border-box
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
   background-color:#641E16;
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
        color: ;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
	    		    .button{
	  background:#641E16;
	  border:none;
	  border-radius:25%;
	  color:white;
	  padding:10px 15px;
	  text-align: left;
	  text-decoration:none;
	  dispaly:inline-block;
	  font-size:16px;
	  margin:4px 2px;
	  cursor:pointer;
	}
 </style>
 </head>
 <body background="bg.jpeg" style="background-repeat:no-repeat;background-size:99% 99%;">
<center>
<h1 style = "font-family: Georgia, serif;" ><font color="black">ON ROAD FUEL DEMAND APPLICATION</font color></h1><br/>
<h2><marquee direction="left"><font color="#2874A6">"On-road fuel supply applications for developing on-demand fuel supplies depend on user orders and
requirements."</font color></marquee></h2><br/>
<div class="topnav">
  <a  href="adminhomepage.php">Home</a>
  <a href="fuelstation.php">Fuel station</a>
  <a  class="active" href="enquiry.php">Enquiry</a>
  <a href="about.php">About</a>
  <a href="logout.php">Log out</a>
</div>
<center><h3><font color="e74c3c">Please enter the valid date to get fuel station details</font> </h3>
 <form method="POST">
 <input type="date" class="box" name="dated"--- required /><br/><br/>
 
 <input type="submit" name="search" value="search" class="button"/>
 </form></center></br>
 </body>
</html>
<?php
if(isset($_POST['search']))
{
include("db_connect2.php");

$d=$_POST['dated'];
$query=mysqli_query($conn,"SELECT * FROM enquiry WHERE dated='$d'");

?>
<html>
 <head>
  <title>enquiry</title>
  </head>
  <body>
  <h3>Date=<?php echo $d;?>&nbsp &nbsp  Details Table:</h3>
  <table border="5" cellspacing="4" cellpadding="6" align="center">
  <tr bgcolor="5499c7">
  <th>User name</th>
  <th>Mobile no</th>
  <th>Shop Id</th>
   <th>Requirement work details</th>
   <th >Dated</th>
  </tr>
   <?php
  while($r=mysqli_fetch_array($query))
  {
	  $uname=$r['user_name'];
	  $mob=$r['user_mobile'];
	  $iname=$r['shop_id'];
	  $qty=$r['requirement_work_details'];
	  $date=$r['dated'];
	 ?>
	 <tr align="center" bgcolor="ecfof1">
	  <td><?php echo $uname?></td>
	  <td><?php echo $mob?></td>
	  <td><?php echo $iname?></td>
	  <td><?php echo $qty?></td>
	  <td><?php echo $date?></td>
	  </tr>
  <?php } ?>
  <?php } ?>
  </table>
  </body>
  </html>