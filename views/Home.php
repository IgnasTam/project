<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href = "../src/style.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forum</title>
</head>
<body>
<div class="container forumBackground">
    <div class="row">
        <div class="col-lg-12">
            <a href="Home.php">Home</a> <i class="fa fa-chevron-circle-right paginationarrow"></i>
            <a class = "pullRight" href = "index.php?logout='1'" style = "color: red;">Logout</a>
        </div>
    </div>
        <div class="row forumModule">
                <div class="col-lg-12 collumPad">
                    <div class="pullLeft">
                        <h1 id = "demo">Programavimas</h1>
                    </div>
                    <div class="pullRight">
                        <a id = "programing" class="btn btn-primary themeButton" href="#">Start Discussion</a>
                    </div>
                </div>
        </div>

        <div id ="new_programing" class="row forumModule" style="display: none">
            <div>
                <form class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name = "newDiscussionTitle">
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" rows="10" name = "newDiscussionText"></textarea>
                    </div>
                    <a  class="btn btn-primary themeButton btn_s" href="#">Add</a>
                </form>
            </div>
        </div>


            <div id = "demo1" class="row forumPad " style="display:none">
                <table class="col-lg-12"
                    <thead>
                        <th>
                            Discussion
                        </th>
                        <th>
                            Author
                        </th>
                        <th class="pullRight">
                            Replies
                        </th>
                    </thead>
                    <tr>
                        <td>
                            <a href="#">HTML</a>
                        </td>
                        <td>
                            <a href="#">Benediktas</a>
                        </td>
                        <td class="pullRight">
                            27
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">CSS</a>
                        </td>
                        <td>
                            <a href="#">Jonas</a>
                        </td>
                        <td class="pullRight">
                            27
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Java script</a>
                        </td>
                        <td>
                            <a href="#">Ponas</a>
                        </td>
                        <td class="pullRight">
                            27
                        </td>
                    </tr>
                </table>
            </div>
    <div class="row forumModule">
        <div class="col-lg-12 collumPad">
            <div class="pullLeft">
                <h1 id = "disk">Keliones</h1>
            </div>
            <div class="pullRight">
                <a id = "countries" class="btn btn-primary themeButton" href="#">Start Discussion</a>
            </div>
        </div>
    </div>
    <div id ="new_countries" class="row forumModule" style="display: none">
        <div>
            <form class="col-lg-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name = "newDiscussionTitle">
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" id="text" rows="10" name = "newDiscussionText"></textarea>
                </div>
                <a class="btn btn-primary themeButton btn_s" href="#">Add</a>
            </form>
        </div>
    </div>
    <div id = "disk1" class="row forumPad " style="display:none">
        <table class="forumTable"
        <thead>
        <th>
            Discussion
        </th>
        <th>
            Author
        </th>
        <th class="pullRight">
            Replies
        </th>
        </thead>
        <tr>
            <td>
                <a href="#">Europa</a>
            </td>
            <td>
                <a href="#">Benjaminas</a>
            </td>
            <td class="pullRight">
                27
            </td>
        </tr>
        <tr>
            <td>
                <a href="#">Azija</a>
            </td>
            <td>
                <a href="#">Antanas</a>
            </td>
            <td class="pullRight">
                27
            </td>
        </tr>
        <tr>
            <td>
                <a href="#">Amerika</a>
            </td>
            <td>
                <a href="#">Petras</a>
            </td>
            <td class="pullRight">
                27
            </td>
        </tr>
        </table>
    </div>
</div>
        </div>
    </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src = "../src/forum.js" type="text/javascript"></script>
</body>
</html>