<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/create.php" method="POST">
        
            <h4 class="display-4 text-center">Add User</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
        <div class="mb-3">
           
            <input type="firstName" class="form-control" id="firstName"
            name="firstName" value="<?php if(isset($_GET['firstName'])) 
            echo($_GET['firstName']); ?>" placeholder="first name">
        </div>
        <div class="mb-3">
            
            <input type="lastName" class="form-control" id="lastName"
            name="lastName" value="<?php if(isset($_GET['lastName'])) 
            echo($_GET['lastName']); ?>" placeholder="last name">
        </div>
        <div class="mb-3">
         
            <input type="department" class="form-control" id="department"
            name="department" value="<?php if(isset($_GET['department'])) 
            echo($_GET['department']); ?>" placeholder="department">
        </div>
        <div class="mb-3">
           
            <input type="email" class="form-control" id="email" 
            name="email" value="<?php if(isset($_GET['email'])) 
            echo($_GET['email']); ?>"  placeholder="users email">
        </div>
        <div class="mb-3">
           
            <input type="password" class="form-control" id="password" 
            name="password" value="<?php if(isset($_GET['password'])) 
            echo($_GET['password']); ?>"  placeholder="users password">
        </div>
        <button type="submit" class="btn btn-primary"
        name="create">Submit</button>
        <a href="read.php" class="link-primary">View</a>
        

        </form>
    </div>
    
    </body>
</html>