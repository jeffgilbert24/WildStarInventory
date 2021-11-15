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

    $user_data = 'firstName=' .$firstName. 'lastName=' .$lastName. 'department=' .$department. 'email=' .$email;

    if (empty($firstName)) {
        header("Location: ../addUser.php?error= first name is required&user_data");  
    }
    else
    if (empty($lastName)) {
        header("Location: ../addUser?error= last name is required&user_data");
    }
    else
    if (empty($department)) {
        header("Location: ../addUser?error= department is required&user_data");
    }
    else
    if (empty($email)) {
        header("Location: ../addUser?error= email is required&user_data");
    }
    else{
        $sql = "INSERT INTO users(firstName, lastName, department, email)
                VALUES('$firstName', '$lastName', '$department', '$email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "success";
            }else {
                header("Location: ../addUser.php?error=unknown error occurred&user_data");
            }
    }
  

}
