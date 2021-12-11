<?php

if (isset($_POST['create'])) {
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
    $password = validate($_POST['password']);



    $user_data = 'firstName=' .$firstName. 'lastName=' .$lastName. 'department=' .$department. 'email=' .$email. 'password=' .$password;

    //echo $user_data;

    if (empty($firstName)) {
        header("Location: ../user.php?error= first name is required&user_data");  
    }
    else
    if (empty($lastName)) {
        header("Location: ../user.php?error= last name is required&user_data");
    }
    else
    if (empty($department)) {
        header("Location: ../user.php?error= department is required&user_data");
    }
    else
    if (empty($email)) {
        header("Location: ../user.php?error= email is required&user_data");
    }
    else
    if (empty($password)) {
        header("Location: ../user.php?error= password is required&user_data");
    }
    else{
       // echo "fine";

      $sql = "INSERT INTO employee(firstName, lastName, department, email, password)
                VALUES('$firstName', '$lastName', '$department', '$email', '$password' )";                
            $result = mysqli_query($conn, $sql);

            if ($result) {                
                header("Location: ../read.php?success=successfully created");
            }else {
                header("Location: ../user.php?error=unknown error occurred&user_data");
            } 
    }


}