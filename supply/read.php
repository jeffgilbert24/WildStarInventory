<?php include "php/read.php";
session_start() 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">         
</head>
    <body>        
        <div class="container"> 
            <div class="box">
                <h4 class="display-4 text-center">Inventory</h4><br>
                <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
                <?php if (mysqli_num_rows($result)) { ?>                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">itm name</th>
                            <th scope="col">picture</th>
                            <th scope="col">Department</th>
                            <th scope="col">model #</th>
                            <th scope="col">vendor</th>
                            <th scope="col">cost per</th>
                            <th scope="col">itm Location</th>
                            <th scope="col">min Qty</th>
                            <th scope="col">max Qty</th>
                            <th scope="col">qty on hand</th>
                            <th scope="col">qty on order</th>
                            <th scope="col">qty requested</th>
                            <th scope="col">need to order</th>                            
                            <th scope="col">Action</th>
                        </tr>
                    </thead>                  
                    <tbody>
                    <?php
                    $bgred = 'null';
                    $i = 0;
                     while($rows = mysqli_fetch_assoc($result)){ 
                     $i++;        
                     
                                                             
                  
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$rows['itemName']?></td>
                            <td><?php echo $rows['picture']; ?></td>
                            <td><?php echo $rows['department']; ?></td>
                            <td><?php echo $rows['modelNumber']; ?></td>
                            <td><?php echo $rows['vendor']; ?></td>
                            <td><?php echo $rows['costPer']; ?></td>
                            <td><?php echo $rows['itemLocation']; ?></td>
                            <td><?php echo $rows['minQty']; ?></td>
                            <td><?php echo $rows['maxQty']; ?></td>
                            <td><?php echo $rows['qtyOnHand']; ?></td>
                            <td><?php echo $rows['qtyOnOrder']; ?></td>
                            <td><?php echo $rows['qtyRequested']; ?></td>
                            <td><?php echo $rows['needToOrder']; ?></td>
                            
                           
                            <td><a href="update.php?Id=<?=$rows['Id']?>" 
                            class="btn btn-success">Update</a>

                            <a href="php/delete.php?Id=<?=$rows['Id']?>" 
                            class="btn btn-danger">Delete</a>          
                        
                        </td>                           
                        </tr>
                        <?php } ?>  
                    
                    </tbody>
                </table>
                <?php } ?>
            <div class="link-right">                 

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">                                    
                               
                    <a href="supply.php" class="link-primary">Create   </a>                    
                    <a href="../login/logout.php" class="link">Logout</a>
                    <a href="order.php" class="link">Orders</a>
                    <a href="../users/read.php" class="link">Users</a>
                    <a href="../vendor/read.php" class="link">Vendors</a>
                </div>
            </div>          
    
         </div>
    
    </body>
</html>