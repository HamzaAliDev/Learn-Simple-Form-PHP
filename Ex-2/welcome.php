<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
        // Check if username and password are set
        if (isset($_POST['username']) && isset($_POST['password'])) {
            // Retrieve the posted form data
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === "alihamza" && $password === '123') {
                echo "<h1>Login Successfully</h1>";
            } else {
                echo "<h1>Invalid Username or Password.</h1>";
            }
        } else {
            echo "<h1>Username or Password not set.</h1>";
        }
    ?>
</body>
</html>
