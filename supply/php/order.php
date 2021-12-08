<?php

include "db_conn.php";

$sql = "SELECT * FROM supplies ORDER BY Id DESC"; 
$result = mysqli_query($conn, $sql);