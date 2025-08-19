<!DOCTYPE html>
<html lang="en">
<head>

	<title>User Sign Up</title>
<style>	* {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 620px;
}
.form-box:before {
	background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
span a {
	color: #BBB;
}

input[type=button], input[type=submit], input[type=reset]
 {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<form method ="POST">
	<div class="form-box">
		<div class="header-text">
			Sign up Form
		</div><input type ="text" name ="A" placeholder ="Enter your ID"/> <input type ="text" name ="B"placeholder ="Enter your name" /> <input type ="text" name ="C" placeholder ="Enter your city"/> <input type ="tel" name ="D" placeholder="mobile number(+919812345678)" name ="mobile_no" maxlength ="13" pattern="[+]{1}[0-9]{2}[0-9]{10}" required/> <input type ="email" name ="E" placeholder ="Enter your email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/> <input type ="text" name ="F" placeholder ="Enter your address"/> <input type ="password" name ="G" placeholder ="Enter your password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required maxlength="6" /> <input id="terms" type="checkbox"> <label for="terms"></label><span>Agree with <a href="#">Terms & Conditions</a></span> 
		<input type="submit" value="Sign up" name="submit" >
	</div>
	</form>
</body>
</html>
<?php 
$conn = mysqli_connect("localhost","root","","id20499452_onroadfueldemand");
if(isset($_POST['submit']))
{
	$v1=$_POST["A"];
	$v2=$_POST["B"];
	$v3=$_POST["C"];
	$v4=$_POST["D"];
	$v5=$_POST["E"];
	$v6=$_POST["F"];
	$v7=$_POST["G"];
	$query = mysqli_query ($conn, "insert into user values('$v1','$v2','$v3','$v4','$v5','$v6','$v7')");
	if($query)
	      {
               echo"<script type='text/javascript'>alert('Account created successful');
			   window.location.assign('login.php')</script>";
	      }
		  else
		  { echo"<script type='text/javascript'>alert('Account creation Failed Please Fill Up The Form with valid data');
			   window.location.assign('usersignup.php')</script>";
			   }
}
?>
