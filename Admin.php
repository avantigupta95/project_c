<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
    <body>
       <h1>Admin Panel</h1>
        Welcome<?php echo $_SESSION['username']; ?>
        <form>
            <input type="submit" value="Logout">
        </form>
    </body>
</html>
