<?php

include "db_conn.php";

$sql = "SELECT * FROM vendor ORDER BY Id DESC";
$result = mysqli_query($conn, $sql);