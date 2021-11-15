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
    $userPhone = validate($_POST['userPhone']);
    $email = validate($_POST['email']);

    $user_data = 'firstName=' .$firstName. 'lastName=' .$lastName. 'userPhone=' .$userPhone. 'email=' .$email;

    if (empty($firstName)) {
        header("Location: ../index.php?error= first name is required&user_data");  
    }
    else
    if (empty($lastName)) {
        header("Location: ../index.php?error= last name is required&user_data");
    }
    else
    if (empty($userPhone)) {
        header("Location: ../index.php?error= phone number is required&user_data");
    }
    else
    if (empty($email)) {
        header("Location: ../index.php?error= email is required&user_data");
    }
    else{
        $sql = "INSERT INTO users(firstName, lastName, userPhone, email)
                VALUES('$firstName', '$lastName', '$userPhone', '$email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "success";
            }else {
                header("Location: ../index.php?error=unknown error occurred&user_data");
            }
    }
  

}
