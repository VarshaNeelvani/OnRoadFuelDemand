<?php
$conn = mysqli_connect("b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com", "ungq3eze6t76zt2v", "gKDg6YLdRDIADNXHy58g", "b7xqzvtfanhnwhk0ydhl", 3306);
?>
<html>

<head>
  <title>edit</title>
  <style>
    .button {
      background: #641E16;
      border: none;
      border-radius: 25%;
      color: white;
      padding: 10px 15px;
      text-align: left;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      margin: 10;
      padding: 0;
      background-color: #82E0AA;
    }

    .topnav a {
      float: left;
      border-right: 1px solid #bbb;
      color: white;
      text-align: center;
      padding: 10px 10px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #641E16;
      color: white;
    }

    .topnav a.active {
      background-color: #641E16;
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

<body>

  <?php {
    $shop_id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM work_details WHERE shop_id='$shop_id'");
    while ($r = mysqli_fetch_array($query)) {
      $shop_id = $r['shop_id'];
      $shop_name = $r['shop_name'];
      $work_facility_details = $r['work_facility_details'];
      $service_charge = $r['service_charge'];
    }
  }
  ?>

  <body background="bg.jpeg" style="background-repeat:no-repeat;background-size:99% 99%;">
    <center>
      <h1 style="font-family: Georgia, serif;">
        <font color="black">ON ROAD FUEL DEMAND APPLICATION</font color>
      </h1><br />
      <h2>
        <marquee direction="left">
          <font color="#2874A6">"On-road fuel supply applications for developing on-demand fuel supplies depend on user orders and
            requirements."</font color>
        </marquee>
      </h2><br />
      <div class="topnav">
        <a href="adminhomepage.php">Home</a>
        <a class="active" href="fuelstation.php">Fuel Stations</a>
        <a href="enquiry.php">Enquiry </a>
        <a href="about.php">About</a>
        <a href="logout.php">Log out</a>
      </div>
      <form method="POST">
        <table cellspacing="0" cellpadding="10">
          <tr>
            <td colspan="2" align="center"><label>
                <h2><font-size="15">EDIT FORM</h2>
              </label></td>
          </tr><br />
          </tr>
          <tr>
            <td>
              <p><b>
                  <h3>
                    <font color="#2874A6">SHOP ID :
                </b>
            </td> <br />
            <td><input type="text" name="f1" class="box" value="<?php echo $shop_id; ?>" /></td><br />
          </tr>
          <tr>
            <td>
              <p><b>
                  <h3>
                    <font color="#2874A6">SHOP NAME :
                </b>
            </td><br />
            <td><input type="text" name="f2" class="box" value="<?php echo $shop_name; ?>" /></td>
          </tr>
          </p><br />
          </tr>
          <tr>
            <td>
              <p><b>
                  <h3>
                    <font color="#2874A6"> WORK FACILITY DETAILS :
                </b>
            </td>
            <td> <input type="text" name="f3" class="box" value="<?php echo $work_facility_details; ?>" /></td>
          </tr>
          </p>
          </tr>
          <tr>
            <td>
              <p><b>
                  <h3>
                    <font color="#2874A6">SERVICE CHARGE :
                </b>
            </td>
            <td><input type="text" name="f4" class="box" value="<?php echo $service_charge; ?>" /></td>
          </tr>
          </p>
          <tr>
            <th colspan="2"><input type="submit" name="update" class="button" value="EDIT" /></th>
          </tr>
    </center>
    </form>
    <?php
    if (isset($_POST['update'])) {
      echo "Update in process";
      $v1 = $_POST["f1"];
      $v2 = $_POST["f2"];
      $v3 = $_POST["f3"];
      $v4 = $_POST["f4"];
      $query = mysqli_query($conn, "UPDATE work_details SET shop_name='$v2',work_facility_details='$v3',service_charge='$v4'  WHERE shop_id='$v1'");
      if ($query) {
        echo "<script type='text/javascript'>alert('Edited successfully');
			   window.location.assign('fuelstation.php')</script>";
      } else {
        echo "<script type='text/javascript'>alert('failed to edit');
			   window.location.assign('fuelstation.php')</script>";
      }
    }
    ?>
  </body>

</html>