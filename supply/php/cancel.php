<?php

if(isset($_GET['Id'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Id = validate($_GET['Id']);

    $sql = "UPDATE supplies
            SET qtyOnOrder = 0
            WHERE Id=$Id";
$result = mysqli_query($conn, $sql);
if ($result) {
header("Location: ../read.php?success=successfully deleted");
}else {
header("Location: ../read.php?error=unknown error occurred&user_data");
}
   
}else {
    header("Location: ../read.php");
}