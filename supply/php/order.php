<?php

include "db_conn.php";

$sql = "SELECT * FROM supplies WHERE qtyOnOrder > 0"; 
$result = mysqli_query($conn, $sql);