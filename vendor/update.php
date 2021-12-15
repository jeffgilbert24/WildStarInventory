<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Vendor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/update.php" method="POST">
        
            <h4 class="display-4 text-center">Update Vendor</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
        <div class="mb-3">
           <label for="vendorName">Vendors name</label>
            <input type="vendorsName" class="form-control" id="vendorsName"
            name="vendorsName" value="<?=$row['vendorsName'] ?>">
        </div>
        
        <div class="mb-3">
        <label for="vendorsPhone">Phone</label>
            <input type="vendorsPhone" class="form-control" id="vendorsPhone"
            name="vendorsPhone" value="<?=$row['vendorsPhone'] ?>">
        </div>
        <div class="mb-3">
        <label for="vendorsEmail">Email</label>
            <input type="vendorsEmail" class="form-control" id="vendorsEmail" 
            name="vendorsEmail" value="<?=$row['vendorsEmail'] ?>">
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