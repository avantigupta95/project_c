<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
    <body>
       <h1>Admin Panel</h1>
        Welcome<?php echo $_POST['username']; ?>
        <form action="Login.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </body>
</html>
