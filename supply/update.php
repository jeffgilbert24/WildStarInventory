<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Inventory</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/update.php" method="POST">
        
            <h4 class="display-4 text-center">Update Inventory</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
        <div class="mb-3">
           <label for="itemName">Item name</label>
            <input type="itemName" class="form-control" id="itemName"
            name="itemName" value="<?=$row['itemName'] ?>">
        </div>
        <div class="mb-3">
        <label for="picture">Picture</label>
            <input type="picture" class="form-control" id="picture"
            name="picture" value="<?=$row['picture'] ?>">
        </div>
        <div class="mb-3">
        <label for="department">Department</label>
            <input type="department" class="form-control" id="department"
            name="department" value="<?=$row['department'] ?>">
        </div>
        <div class="mb-3">
        <label for="modelNumber">Model Number</label>
            <input type="modelNumber" class="form-control" id="modelNumber" 
            name="modelNumber" value="<?=$row['modelNumber'] ?>">
        </div>

        <div class="mb-3">
           <label for="vendor">Vendor</label>
            <input type="vendor" class="form-control" id="vendor"
            name="vendor" value="<?=$row['vendor'] ?>">
        </div>
        <div class="mb-3">
        <label for="costPer">Cost Per</label>
            <input type="costPer" class="form-control" id="costPer"
            name="costPer" value="<?=$row['costPer'] ?>">
        </div>
        <div class="mb-3">
        <label for="itemLocation">Item Location</label>
            <input type="itemLocation" class="form-control" id="itemLocation"
            name="itemLocation" value="<?=$row['itemLocation'] ?>">
        </div>
        <div class="mb-3">
        <label for="minQty">min qty</label>
            <input type="minQty" class="form-control" id="minQty" 
            name="minQty" value="<?=$row['minQty'] ?>">
        </div>

        <div class="mb-3">
           <label for="maxQty">max qty</label>
            <input type="maxQty" class="form-control" id="maxQty"
            name="maxQty" value="<?=$row['maxQty'] ?>">
        </div>
        <div class="mb-3">
        <label for="qtyOnHand">qty on hand</label>
            <input type="qtyOnHand" class="form-control" id="qtyOnHand"
            name="qtyOnHand" value="<?=$row['qtyOnHand'] ?>">
        </div>
        <div class="mb-3">
        <label for="qtyOnOrder">qty on order</label>
            <input type="qtyOnOrder" class="form-control" id="qtyOnOrder"
            name="qtyOnOrder" value="<?=$row['qtyOnOrder'] ?>">
        </div>
        <div class="mb-3">
        <label for="qtyRequested">qty requested</label>
            <input type="qtyRequested" class="form-control" id="qtyRequested" 
            name="qtyRequested" value="<?=$row['qtyRequested'] ?>">
        </div>
        <div class="mb-3">
        <label for="needToOrder">need to order</label>
            <input type="needToOrder" class="form-control" id="needToOrder" 
            name="needToOrder" value="<?=$row['needToOrder'] ?>">
        </div>
        <input type="text" name ="Id" value="<?=$row['Id']?>"
        hidden>
        
        <button type="submit" class="btn btn-primary"
        name="update">Update</button>
       
        <a href="read.php" class="link-primary">View</a>
        

        </form>
    </div>
    
    </body>
</html>