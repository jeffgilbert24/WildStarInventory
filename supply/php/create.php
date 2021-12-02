<?php
if (isset($_POST['create'])) {
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



    $user_data = 'itemName=' .$itemName. 'picture=' .$picture. 'department=' .$department. 'modelNumbert=' .$modelNumber. 'vendor=' .$vendor. 
    'costPer=' .$costPer. 'itemLocation=' .$itemLocation. 'minQty=' .$minQty. 'maxQty=' .$maxQty. 'qtyOnHand=' .$qtyOnHand. 'qtyOnOrder=' .$qtyOnOrder. 'qtyRequested=' .$qtyRequested. 'needToOrder=' .$needToOrder;
    
    

    /*echo $user_data;*/

    if (empty($itemName)) {
        header("Location: ../supply.php?error= item name is required&user_data");  
    }
    else
    if (empty($department)) {
        header("Location: ../supply.php?error= department is required&user_data");
    }
    else
    if (empty($modelNumber)) {
        header("Location: ../supply.php?error= model number is required&user_data");
    }
    else
    if (empty($vendor)) {
        header("Location: ../supply.php?error= vendor is required&user_data");
    }
    else
    if (empty($costPer)) {
        header("Location: ../supply.php?error= costPer is required&user_data");
    }
    else
    if (empty($itemLocation)) {
        header("Location: ../supply.php?error= item location is required&user_data");
    }
    else
    if (empty($minQty)) {
        header("Location: ../supply.php?error= minQty is required&user_data");
    }
    else
    if (empty($maxQty)) {
        header("Location: ../supply.php?error= maxQty is required&user_data");
    }
    else
    if (empty($qtyOnHand)) {
        header("Location: ../supply.php?error= qty on hand is required&user_data");
    }
    else
    if (empty($qtyOnOrder)) {
        header("Location: ../supply.php?error= qtyOnOrder is required&user_data");
    }
    else
    if (empty($qtyRequested)) {
        header("Location: ../supply.php?error= qty requested is required&user_data");
    }
   
    else
    if (empty($needToOrder)) {
        header("Location: ../supply.php?error= need to order is required&user_data");
    }
   
    else{

       
        $sql = "INSERT INTO supplies(itemName, department, modelNumber, vendor, costPer, itemLocation, minQty, maxQty, qtyOnHand, qtyOnOrder, qtyRequested, needToOrder)
                VALUES('$itemName', '$department', '$modelNumber', '$vendor', '$costPer', '$itemLocation', '$minQty', '$maxQty', '$qtyOnHand', '$qtyOnOrder', '$qtyRequested', '$needToOrder')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "success";
            }else {
                header("Location: ../supply.php?error=unknown error occurred&user_data");
            }
    }


}
