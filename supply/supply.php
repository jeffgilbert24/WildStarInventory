<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/create.php" method="POST">
        
            <h4 class="display-4 text-center">Add Item</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>

        <div class="mb-3">           
            <input type="itemName" class="form-control" id="itemName"
            name="itemName" value="<?php if(isset($_GET['itemName'])) 
            echo($_GET['itemName']); ?>" placeholder="item Name">
        </div>

        <div class="mb-3">            
            <input type="picture" class="form-control" id="picture"
            name="picture" value="<?php if(isset($_GET['picture'])) 
            echo($_GET['picture']); ?>" placeholder="picture">
        </div>

        <div class="mb-3">         
            <input type="department" class="form-control" id="department"
            name="department" value="<?php if(isset($_GET['department'])) 
            echo($_GET['department']); ?>" placeholder="department">
        </div>

        <div class="mb-3">           
            <input type="modelNumber" class="form-control" id="modelNumber" 
            name="modelNumber" value="<?php if(isset($_GET['modelNumber'])) 
            echo($_GET['modelNumber']); ?>"  placeholder="modelNumber">
        </div>

        <div class="mb-3"> 
             <input type="vendor" class="form-control" id="vendor"
            name="vendor" value="<?php if(isset($_GET['vendor'])) 
            echo($_GET['vendor']); ?>" placeholder="vendor">
        </div>

        <div class="mb-3">            
            <input type="costPer" class="form-control" id="costPer"
            name="costPer" value="<?php if(isset($_GET['costPer'])) 
            echo($_GET['costPer']); ?>" placeholder="costPer">
        </div>

        <div class="mb-3">         
            <input type="itemLocation" class="form-control" id="itemLocation"
            name="itemLocation" value="<?php if(isset($_GET['itemLocation'])) 
            echo($_GET['itemLocation']); ?>" placeholder="itemLocation">
        </div>

        <div class="mb-3">           
            <input type="minQty" class="form-control" id="minQty" 
            name="minQty" value="<?php if(isset($_GET['minQty'])) 
            echo($_GET['minQty']); ?>"  placeholder="minQty">
        </div>

        <div class="mb-3"> 
            <input type="maxQty" class="form-control" id="maxQty"
            name="maxQty" value="<?php if(isset($_GET['maxQty'])) 
            echo($_GET['maxQty']); ?>" placeholder="maxQty">
        </div>

        <div class="mb-3">            
            <input type="qtyOnHand" class="form-control" id="qtyOnHand"
            name="qtyOnHand" value="<?php if(isset($_GET['qtyOnHand'])) 
            echo($_GET['qtyOnHand']); ?>" placeholder="qtyOnHand">
        </div>

        <div class="mb-3">         
            <input type="qtyOnOrder" class="form-control" id="qtyOnOrder"
            name="qtyOnOrder" value="<?php if(isset($_GET['qtyOnOrder'])) 
            echo($_GET['qtyOnOrder']); ?>" placeholder="qtyOnOrder">
        </div>

        <div class="mb-3">           
            <input type="qtyRequested" class="form-control" id="qtyRequested" 
            name="qtyRequested" value="<?php if(isset($_GET['qtyRequested'])) 
            echo($_GET['qtyRequested']); ?>"  placeholder="qtyRequested">
        </div>

        <div class="mb-3">            
           <input type="needToOrder" class="form-control" id="needToOrder" 
           name="needToOrder" value="<?php if(isset($_GET['needToOrder'])) 
            echo($_GET['needToOrder']); ?>"  placeholder="needToOrder">
       </div>
        
        <button type="create" class="btn btn-primary"
        name="create">Submit</button>
        <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
   
    
    </body>
</html>