<?php include "php/order.php";
session_start() 
?>
<!DOCTYPE html>
<html>
<head>
    <title>On Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">         
</head>
    <body>        
        <div class="container"> 
            <div class="box">
                <h4 class="display-4 text-center">On Order</h4><br>
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
                   
                    $i = 0;
                    $j = 0;
                     while($rows = mysqli_fetch_assoc($result)){ 
                     $i++;   
                   //  if($rows['qtyOnOrder'] >0){
                    //    $j++;
                     
                                                             
                  
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$rows['itemName']?></td>
                           
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
                            
                           
                            <td>
                            <a href="php/cancel.php?Id=<?=$rows['Id']?>" 
                            class="btn btn-danger">Cancel</a>                               
                        
                        </td>                           
                        </tr>
                        <?php } ?>  
                    
                    </tbody>
                </table>
                <?php } ?>
            <div class="link-right">                 

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">                                    
                               
                    <a href="read.php" class="link-primary">Back To Supply</a>                   
                    
                </div>
            </div>          
    
         </div>
    
    </body>
</html>