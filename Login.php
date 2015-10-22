<!DOCTYPE html>
<html>
<head>
<title>Login Page</title></head>
<body>
    <?php
        if(!isset($_POST['submit'])){ ?>
            <form action="Admin.php" method="post">
            <fieldset>
                <legend>Login</legend>
                Username<br>
                <input type="text" name="username" placeholder="username"><br>
                Password<br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="submit" value="Log In">
            </fieldset>
            </form>
            <?php }
             else {
            $servername = "localhost";
            $username1 = " ";
            $password1 = " ";
            $dbname = "login";
            $mysqli = new mysqli($servername, $username1, $password1, $dbname);
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * from login WHERE Username LIKE '{$username}' AND Password LIKE 
            '{$password}'";
            $result = $mysqli->query($sql);
            if (!$result->num_rows == 1) {
                echo "<p>Invalid Username/Password</p>";
            } else {
                header("location: Admin.php");
            }
            }
        ?> 
    </body>
</html>