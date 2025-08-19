<?php
session_start();
include "db_connect2.php";

if (isset($_POST['submit'])) {
	// Collect and sanitize inputs
	$admin_id = trim($_POST["A"]);
	$admin_name = trim($_POST["B"]);
	$shop_name = trim($_POST["C"]);
	$shop_address = trim($_POST["D"]);
	$mobile_no = trim($_POST["E"]);
	$password = trim($_POST["F"]);

	if (empty($admin_id) || empty($admin_name) || empty($password)) {
		echo "<script>alert('Please fill all required fields'); window.location='adminsignup.php';</script>";
		exit();
	}

	// Hash password
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	// Insert using prepared statement
	$stmt = $conn->prepare("INSERT INTO admin (admin_id, admin_name, shop_name, shop_address, mobile_no, password) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssss", $admin_id, $admin_name, $shop_name, $shop_address, $mobile_no, $hashedPassword);

	if ($stmt->execute()) {
		echo "<script>alert('Account created successfully'); window.location='login.php';</script>";
	} else {
		echo "<script>alert('Account creation failed: " . $stmt->error . "'); window.location='adminsignup.php';</script>";
	}
}
?>

<!-- HTML remains unchanged -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>admin sign up</title>
	<style>
		* {
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

		input[type=button],
		input[type=submit],
		input[type=reset] {
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
	<form method="POST">
		<div class="form-box">
			<div class="header-text">Sign up Form</div>
			<input type="text" name="A" placeholder="Enter your ID" required />
			<input type="text" name="B" placeholder="Enter your name" required />
			<input type="text" name="C" placeholder="Enter your shop name" />
			<input type="text" name="D" placeholder="Enter your address" />
			<input type="tel" name="E" placeholder="mobile number(+919812345678)" maxlength="13" pattern="[+]{1}[0-9]{2}[0-9]{10}" required />
			<input type="password" name="F" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required />
			<br />
			<input id="terms" type="checkbox" required>
			<label for="terms"></label>
			<span>Agree with <a href="#">Terms & Conditions</a></span>
			<input type="submit" value="Sign up" name="submit">
		</div>
	</form>
</body>

</html>