<?php
include "8.php";
$comments = getComments();
$comments = addComments($comments);
viewComments($comments);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<br>
<form class="form-horizontal" action="index.php" method = "POST">
    <div class="form-group">
        <label for="userName" class="col-sm-2 control-label"></label>
        <div class="col-sm-8">
            <input type="text" name="userName" class="form-control" placeholder="Please enter your name">

        </div>
    </div>
    <div class="form-group">
        <label for="comment" class="col-sm-2 control-label"></label>
        <div class="col-sm-8">
            <textarea name="comment" class="form-control" placeholder="Please enter your comment"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Ok</button>
        </div>
    </div>

</form>
</body>
</html>