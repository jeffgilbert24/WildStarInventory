<!DOCTYPE html>
<html>
    <head>
        <title>Add Vendor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/create.php" method="POST">
        
            <h4 class="display-4 text-center">Add Vendor</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
        <div class="mb-3">
           
            <input type="vendorsName" class="form-control" id="vendorsName"
            name="vendorsName" value="<?php if(isset($_GET['vendorsName'])) 
            echo($_GET['vendorsName']); ?>" placeholder="vendors name">
        </div>
     
        <div class="mb-3">
         
            <input type="vendorsPhone" class="form-control" id="vendorsPhone"
            name="vendorsPhone" value="<?php if(isset($_GET['vendorsPhone'])) 
            echo($_GET['vendorsPhone']); ?>" placeholder="vendors Phone">
        </div>
        <div class="mb-3">
           
            <input type="vendorsEmail" class="form-control" id="vendorsEmail" 
            name="vendorsEmail" value="<?php if(isset($_GET['vendorsEmail'])) 
            echo($_GET['vendorsEmail']); ?>"  placeholder="vendore email">
        </div>
        
        <button type="submit" class="btn btn-primary"
        name="create">Submit</button>
        <a href="read.php" class="link-primary">View</a>
        

        </form>
    </div>
    
    </body>
</html>