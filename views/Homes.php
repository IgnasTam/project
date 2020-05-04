<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div>
        <form action="insertPrograming.php" method="POST" class="mx-3 mt-3">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mx-auto my-2" name="submit">Comment</button>
            </div>
        </form>
    </div>
</body>
</html>