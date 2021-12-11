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

    $sql = "SELECT * FROM supplies WHERE Id = $Id";
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
    
        $itemName = validate($_POST['itemName']);
        $picture = validate($_POST['picture']);
        $department = validate($_POST['department']);
        $modelNumber = validate($_POST['modelNumber']);
        $vendor = validate($_POST['vendor']);
        $costPer = validate($_POST['costPer']);
        $itemLocation = validate($_POST['itemLocation']);
        $minQty = validate($_POST['minQty']);
        $maxQty = validate($_POST['maxQty']);
        $qtyOnHand = validate($_POST['qtyOnHand']);
        $qtyOnOrder = validate($_POST['qtyOnOrder']);
        $qtyRequested = validate($_POST['qtyRequested']);
        $needToOrder = validate($_POST['needToOrder']);
        $Id = validate($_POST['Id']);
        
      
    
        if (empty($itemName)) {
            header("Location: ../update.php?Id=$Id&error= item name is required");  
        }
        else
        if (empty($department)) {
            header("Location: ../update.php?Id=$Id&error= department is required");
        }
        else
        if (empty($modelNumber)) {
            header("Location: ../update.php?Id=$Id&error= model number is required");
        }
        else
        if (empty($vendor)) {
            header("Location: ../update.php?Id=$Id&error= vendor is required");
        }
        if (empty($costPer)) {
            header("Location: ../update.php?Id=$Id&error= cost per is required");  
        }
        else
        if (empty($itemLocation)) {
            header("Location: ../update.php?Id=$Id&error= item location is required");
        }
        else
        if (empty($minQty)) {
            header("Location: ../update.php?Id=$Id&error= min qty is required");
        }
        else
        if (empty($maxQty)) {
            header("Location: ../update.php?Id=$Id&error= max qty is required");
        }      
        else {
    
            echo "fine";
            $sql = "UPDATE supplies 
                        SET itemName='$itemName', picture= '$picture', department='$department', modelNumber='$modelNumber', vendor= '$vendor',
                        costPer= '$costPer', itemLocation= '$itemLocation', minQty= '$minQty', maxQty= '$maxQty', qtyOnHand= '$qtyOnHand', 
                        qtyOnOrder= '$qtyOnOrder', qtyRequested= '$qtyRequested', needToOrder= '$needToOrder'

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