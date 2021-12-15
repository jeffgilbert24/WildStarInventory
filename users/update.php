<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container">  
        <form action="php/update.php" method="POST">
        
            <h4 class="display-4 text-center">Update User</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
        <div class="mb-3">
           <label for="firstName">First name</label>
            <input type="firstName" class="form-control" id="firstName"
            name="firstName" value="<?=$row['firstName'] ?>">
        </div>
        <div class="mb-3">
        <label for="lastName">Last name</label>
            <input type="lastName" class="form-control" id="lastName"
            name="lastName" value="<?=$row['lastName'] ?>">
        </div>
        <div class="mb-3">
        <label for="department">Department</label>
            <input type="department" class="form-control" id="department"
            name="department" value="<?=$row['department'] ?>">
        </div>
        <div class="mb-3">
        <label for="email">Email</label>
            <input type="email" class="form-control" id="email" 
            name="email" value="<?=$row['email'] ?>">
        </div>
        <div class="mb-3">
        <label for="email">Password</label>
            <input type="password" class="form-control" id="password" 
            name="password" value="<?=$row['password'] ?>">
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