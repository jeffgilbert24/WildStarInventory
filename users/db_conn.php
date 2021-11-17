<?php
$sname = "localhost";
$uname = "root";
$password = "password";

$db_name = "inventory_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "connection failed !";
}