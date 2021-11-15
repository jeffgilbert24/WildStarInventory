<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class="container">  
        <form action="php/addUser.php" method="POST">
            <h4 class="display-4 text-center">Create</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>           
                <div class="alert alert-warning" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>
        <div class="mb-3">           
            <input type="firstName" class="form-control" id="firstName"
            name="firstName" placeholder="first name">
        </div>

        <div class="mb-3">            
            <input type="lastName" class="form-control" id="lastName"
            name="lastName" placeholder="last name">
        </div>

        <div class="mb-3">            
            <input type="division" class="form-control" id="division" 
            name="division"  placeholder="division">
        </div>

        <div class="mb-3">            
            <input type="email" class="form-control" id="email" 
            name="email"  placeholder="users email">
        </div>
        
        <button type="submit" class="btn btn-primary"
        name="create">Submit</button>
        </form>


    </div>
  
    </body>
</html>