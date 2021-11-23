<?php
    include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['upassword'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['upassword']);

    if(empty($uname)){
        header("Location: index.php?error=User name is Required!");
        exit();
    }else if(empty($pass)) {
        header("Location: index.php?error=Password is Required!");
        exit();
    }else {
        $sql = "SELECT * FROM employee WHERE email= '$uname' AND upassword= '$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)=== 1){
           $row = mysqli_fetch_assoc($result);

            print_r($row);

            echo "hello";
        }
    }
    }else{
        header("Location: index.php");
        exit();
    }
