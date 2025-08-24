<?php

$sname= "b7xqzvtfanhnwhk0ydhl-mysql.services.clever-cloud.com";

$unmae= "ungq3eze6t76zt2v";

$password = "gKDg6YLdRDIADNXHy58g";

$db_name = "b7xqzvtfanhnwhk0ydhl";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "";
}