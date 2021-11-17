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

    $sql = "SELECT * FROM employee WHERE Id = $Id";
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
    
        $firstName = validate($_POST['firstName']);
        $lastName = validate($_POST['lastName']);
        $department = validate($_POST['department']);
        $email = validate($_POST['email']);
        $Id = validate($_POST['Id']);
        
      
    
        if (empty($firstName)) {
            header("Location: ../update.php?Id=$Id&error= first name is required");  
        }
        else
        if (empty($lastName)) {
            header("Location: ../update.php?Id=$Id&error= last name is required");
        }
        else
        if (empty($department)) {
            header("Location: ../update.php?Id=$Id&error= department is required");
        }
        else
        if (empty($email)) {
            header("Location: ../update.php?Id=$Id&error= email is required");
        }
        else{
    
            echo "fine";
            $sql = "UPDATE employee 
                        SET firstName='$firstName', lastName='$lastName', department='$department', email= '$email'
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