<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method="POST">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            <label>Enter email address</label>
            <input type="text" name="uname" placeholder="email"><br>
           
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Log in</button>
            <h5>SEE ADMIN FOR PASSWORD RESET</h5>

        </form>

    </body>
</html>