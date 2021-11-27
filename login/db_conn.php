<?php

$sname = "localhost";
$unmae = "root";
$password = "password";

$db_name = "inventory_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connecction Failed!";
}
