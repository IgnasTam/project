<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
$path = ROOT_PATH . '/src/server.php';
include ($path);

if(empty($_SESSION['username'])) {
    header('location: login.php');
}
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
    <title>Home page</title>
</head>
<body>
<div class ="header">
    <h2>Home page</h2>
</div>

<div class = "content">
    <?php if (isset($_SESSION['success'])): ?>
        <div class = "error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION["username"])): ?>
        <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
        <p><a href = "Home.php">Forumas</a></p>
        <p><a href = "index.php?logout='1'" style = "color: red;">Logout</a> </p>
    <?php endif ?>
</div>
</body>
</html>
