<?php 
session_start();

if(isset($_SESSION['Id']) && isset($_SESSION['email'])){

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['email']; ?></h1>
        <a href="../login/logout.php">Logout</a>

    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>