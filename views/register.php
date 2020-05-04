<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
$path = ROOT_PATH . '/src/server.php';
include ($path);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel ="stylesheet" type="text/css" href = "style.css">
    <title>Register</title>
</head>
<body>
<div class ="header">
    <h2>Register</h2>
</div>
<form method="post" action = "register.php">
    <?php include('errors.php'); ?>
    <div class = "input-group">
        <label>Username</label>
        <input type = "text" name = "username" value ="<?php echo $username; ?>"">
    </div>
    <div class = "input-group">
        <label>Email</label>
        <input type = "text" name = "email" value ="<?php echo $email; ?>"">
    </div>
    <div class = "input-group">
        <label>Password</label>
        <input type = "text" name = "password_1">
    </div>
    <div class = "input-group">
        <label>Confirm Password</label>
        <input type = "text" name = "password_2">
    </div>
    <div class = "input-group">
        <button type = "sumbit" name ="register" class = "btn">Register</button>
    </div>
    <p>
        Already a member ? <a href = "login.php">Sign in</a>
    </p>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

<script src="assets/app.js"></script>
</body>
</html>
