<?php
if (isset($_GET['Id'])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Id = validate($_GET['Id']);

    $sql = "SELECT * FROM vendor WHERE Id = $Id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0){
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: read.php");
    }
}else
    if(isset($_POST['update'])){
        include "../db_conn.php";
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $vendorsName = validate($_POST['vendorsName']);       
        $vendorsPhone = validate($_POST['vendorsPhone']);
        $vendorsEmail = validate($_POST['vendorsEmail']);
        $Id = validate($_POST['Id']);
        
      
    
        if (empty($vendorsName)) {
            header("Location: ../update.php?Id=$Id&error= name is required");  
        }
        else
        if (empty($vendorsPhone)) {
            header("Location: ../update.php?Id=$Id&error= Phone is required");
        }
        else
        if (empty($vendorsEmail)) {
            header("Location: ../update.php?Id=$Id&error= email is required");
        }
        else{
    
            echo "fine";
            $sql = "UPDATE vendor 
                        SET vendorsName='$vendorsName', vendorsPhone='$vendorsPhone', vendorsEmail= '$vendorsEmail'
                        WHERE Id=$Id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header("Location: ../read.php?success=successfully updated");
                }else {
                    header("Location: ../update.php?Id=$Id&error=unknown error occurred&user_data");
                }
        }
    
    }
else{
    header("Location: read.php");
}