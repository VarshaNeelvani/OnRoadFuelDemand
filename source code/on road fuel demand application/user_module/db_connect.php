<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "id20499452_onroadfueldemand";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}