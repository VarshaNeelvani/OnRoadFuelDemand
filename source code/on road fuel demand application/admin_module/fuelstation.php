<html>

<head>
  <title>fuel station</title>
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
      background-color: #2874A6;
      border: none;
      border-radius: 50%;
      color: white;
      padding: 12px 15px;
      text-align: left;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>

<body background="bg.jpeg" style="background-repeat:no-repeat;background-size:99% 110%;">
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
      <a class="active" href="fuelstation.php"> Fuel Station</a>
      <a href="enquiry.php">Enquiry</a>
      <a href="about.php">About</a>
      <a href="logout.php">Log out</a>
    </div>
    <br />
  </center>
  <h3> &nbsp &nbsp &nbsp <font color="#660066">Do you want to add new fuel station? click here >></font color>
    <input type="button" class="button" name="add" Value="ADD" onclick="window.location.href='add.php'" />
  </h3>
  <br />
  <center>
    <?php
    $conn = mysqli_connect("b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com", "ungq3eze6t76zt2v", "gKDg6YLdRDIADNXHy58g", "b7xqzvtfanhnwhk0ydhl", 3306);
    $query = mysqli_query($conn, "SELECT  * FROM work_details ");
    ?>
    <html>

    <head>
      <title> my page</title>
    </head>

    <body>
      <table border="4" border color="#641E16" cellspacing="6" cellpadding="10" align="center">
        <tr bgcolor="grey">
          <center>
            <th>shop id</th>
            <th> shop name </th>
            <th>work facility details</th>
            <th> service_charge </th>
            <th> Edit</th>
            <th> Delete </th>
          </center>
        </tr>
        <?php
        while ($r = mysqli_fetch_array($query)) {
          $shop_id = $r['shop_id'];
          $shop_name = $r['shop_name'];
          $work_facility_details = $r['work_facility_details'];
          $service_charge = $r['service_charge'];
        ?>
          <tr>
            <td> <?php echo $shop_id; ?></td>
            <td> <?php echo $shop_name; ?></td>
            <td> <?php echo $work_facility_details; ?></td>
            <td> <?php echo $service_charge; ?></td>
            <td><a href="edit.php?id=<?php echo $shop_id ?>">edit </a></td>
            <td><a href="delete.php?id=<?php echo $shop_id ?>">delete</a>
          </tr>
        <?php } ?>
      </table>
    </body>

    </html>