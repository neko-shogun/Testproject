<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
    require_once 'connect2db.php'; //look at my php, my php is amazing

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Something went wrong while connecting to db" . mysqli_error($link)); //connection to db
    mysqli_close($link); //close connection to db
?>

<form method="POST">
    <input type="text" name="username"/>
    <input type="text" name="password"/>
    <input type="button" name="register" />
</form>

</body>
</html>