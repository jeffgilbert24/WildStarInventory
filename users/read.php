<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
         crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="css/style.css">         
    </head>
    <body>        
        <div class="container"> 
            <div class="box">
                <h4 class="display-4 text-center">Users</h4><br>
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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Department</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>                  
                    <tbody>
                    <?php
                    $i = 0;
                        while($rows = mysqli_fetch_assoc($result)){ 
                        $i++;                       
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$rows['firstName']?></td>
                            <td><?php echo $rows['lastName']; ?></td>
                            <td><?php echo $rows['department']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
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
                    <a href="user.php" class="link-primary">Create</a>
                </div>
            </div>          
    
         </div>
    
    </body>
</html>