<html>
      <head>
	        <title> enquiry form </title>
<style>

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
  background-color: #641E16 ;
  color: white;
}

.topnav a.active {
  background-color:#641E16;
  color: white;
}
table {
  position: center;
  border-radius:25px;
  padding:20px;
}


      .button{
	  background:#2874A6;
	  border:none;
	  border-radius:25%;
	  color:black;
	  padding:10px 15px;
	  text-align: left;
	  text-decoration:none;
	  display:inline-block;
	  font-size:16px;
	  margin:4px 2px;
	  cursor:pointer;
	  
	}
	 .box {
        width: 190px;
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
  <a href="userhomepage.php">Home</a>
  <a class="active" href="fuelstation.php"> Fuel Station</a>
  <a href="myenquiry.php">My Enquiry</a>
  <a href="#about">About</a>
  <a href="#about">Log out</a>
</div>
<br/>
<br/>
	  <form method ="POST" >
	  <center>
	  <table  height ="500" width ="450" cellspacing ="9" align ="center">
	  <tr><br/>
	  <td colspan ="2"><h1><center> <font color="#2874A6"> ENQUIRY FORM</center></h1></td></tr><br>
	  <tr ><td><label> <h3><font color="#2874A6">USER NAME :  </lable>
	  <td><input type ="text" class="box" name ="A" placeholder ="Enter your user name"/><br/><br/></td></tr>
	  <tr><td><label> <h3> <font color="#2874A6"> SHOP ID :  </lable>
	  <td><input type ="text" class="box" name ="B" placeholder ="Enter your shop ID" /><br/><br/></td></tr>
	  	<tr><td><label> <h3><font color="#2874A6"> MOBILE NUMBER :  </lable>
	  <td><input type ="tel" class="box" name ="C" placeholder ="Ex +911234567898" maxlength ="13" pattern="[+]{1}[0-9]{2}[0-9]{10}" required /><br/><br/></td></tr>
		<tr><td><label> <h3> <font color="#2874A6"> REQUIREMENT WORK  &nbsp <br/> DETAILS :  </label>
		
	  <td><input type ="text" class="box" name ="D" placeholder ="Enter your requirements"/><br/><br/></td></tr>
	  <tr><td><label> <h3><font color="#2874A6"> DATED : </lable>
	  <td><input type ="date" class="box" name ="E" placeholder ="Enter your address"/><br/><br/></td></tr>
	  
				<td colspan="2" align="center">
			    <input type="Submit" class="button" name ="submit">
				</td>
	  </tr></table>
	  </center>
	  </form>
	  </body>
</html>

<?php 
$conn = mysqli_connect("localhost","root","","id20499452_onroadfueldemand");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $v1 = mysqli_real_escape_string($conn, $_POST["A"]);
    $v2 = mysqli_real_escape_string($conn, $_POST["B"]);
    $v3 = mysqli_real_escape_string($conn, $_POST["C"]);
    $v4 = mysqli_real_escape_string($conn, $_POST["D"]);
    $v5 = mysqli_real_escape_string($conn, $_POST["E"]);

    $sql = "INSERT INTO enquiry (user_name, shop_id, user_mobile, requirement_work_details, dated) 
            VALUES ('$v1','$v2','$v3','$v4','$v5')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        echo "<script type='text/javascript'>
                alert('Thank you for your enquiry. We will contact you soon.');
                window.location.assign('userhomepage.php');
              </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Your enquiry failed. Please try again.');
                window.location.assign('fuelstation.php');
              </script>";
    }
}
?>
