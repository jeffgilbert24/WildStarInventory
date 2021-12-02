<?php

if (isset($_POST['create'])) {
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



    $user_data = 'vendorsName=' .$vendorsName. 'vendorsPhone=' .$vendorsPhone. 'vendorsEmail=' .$vendorsEmail;

    echo $user_data;

    if (empty($vendorsName)) {
        header("Location: ../user.php?error= name is required&user_data");  
    }  
    else
    if (empty($vendorsPhone)) {
        header("Location: ../user.php?error= phone is required&user_data");
    }
    else
    if (empty($vendorsEmail)) {
        header("Location: ../user.php?error= email is required&user_data");
    }
    else{

        echo "fine";
        $sql = "INSERT INTO vendor(vendorsName, vendorsPhone, vendorsEmail)
                VALUES('$vendorsName', '$vendorsPhone', '$vendorsEmail')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ../read.php?success=successfully created");
            }else {
                header("Location: ../user.php?error=unknown error occurred&user_data");
            }
    }


}