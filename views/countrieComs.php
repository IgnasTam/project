<?php
require_once 'bootstrap.php';
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

<div class = "container">
    <div class="row">
        <?php
        $comments = getComments();

        foreach ($comments as $fetch):
            ?>
            <div class="card bg-light ml-4 mb-3 pl-2" style="max-width: 60rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2" class="border bottom" style=" height: 10rem;">
                            <img src="https://img.icons8.com/color/96/000000/mime.png" class="img-thumbnail"/>
                        </div>
                        <div class="col-md-10">
                            <?php echo $fetch['time'] ?>
                        </div>
                    </div>
                    <div class="ml-1"><?php echo $fetch['text'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>

