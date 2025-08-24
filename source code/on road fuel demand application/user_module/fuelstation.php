<?php
$conn = mysqli_connect("b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com", "ungq3eze6t76zt2v", "gKDg6YLdRDIADNXHy58g", "b7xqzvtfanhnwhk0ydhl", 3306);
$sql = "SELECT DISTINCT shop_id FROM work_details";
$res = mysqli_query($con, $sql);
?>

<html>

<head>
  <title>Fuel station</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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

    .box {
      width: 120px;
      height: 40px;
      border: 1px solid #999;
      font-size: 18px;
      color: #1c87c9;
      background-color: #eee;
      border-radius: 5px;
      box-shadow: 4px 4px #ccc;
    }
  </style>
</head>

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
      <a href="userhomepage.php">Home</a>
      <a class="active" href="fuelstation.php"> Fuel Station</a>
      <a href="myenquiry.php">My Enquiry</a>
      <a href="about.php">About</a>
      <a href="logout.php">Log out</a>
    </div>
    <br />
    <br />
    <center>
      <h2>
        <font color="#641E16">-- SELECT SHOP ID TO GET SHOP INFORMATION --
      </h2>
    </center>
    <form method="POST">
      <select name="fuel" class="box">
        <option> SHOP ID </option>
        <?php while ($rows = mysqli_fetch_array($res)) {
        ?>
          <option value="<?php echo $rows['shop_id']; ?>"> <?php echo $rows['shop_id']; ?> </option>
        <?php
        }
        ?>
      </select></br><br />
      <input type="submit" class="button" name="search" value="search" />
    </form>
</body>

</html>
<?php
if (isset($_POST['search'])) {
  $d = $_POST['fuel'];
  $query = mysqli_query($con, "SELECT * FROM work_details WHERE shop_id='$d'");

?>
  <html>

  <head>
    <title></title>
  </head>

  <body>
    <h3>shop id=<?php echo $d; ?>&nbsp &nbsp Details Table:</h3>
    <table border="5" cellspacing="4" cellpadding="6" align="center">
      <tr bgcolor="5499c7">
        <th>shop id</th>
        <th>shop name</th>
        <th>work facility details </th>
        <th>service charge</th>
        <th> Enquiry </th>
      </tr>
      <?php
      while ($r = mysqli_fetch_array($query)) {
        $uname = $r['shop_id'];
        $mob = $r['shop_name'];
        $iname = $r['work_facility_details'];
        $qty = $r['service_charge'];
      ?>
        <tr align="center">
          <td><?php echo $uname ?></td>
          <td><?php echo $mob ?></td>
          <td><?php echo $iname ?></td>
          <td><?php echo $qty ?></td>
          <td><a href="enquiry.php?id=<?php echo $uname ?>">Enquiry</a></td>

        <?php } ?>
      <?php } ?>
  </body>

  </html>