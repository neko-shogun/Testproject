<html>
<body>
<?php
    require_once 'connect2db.php'; //look at my php, my php is amazing
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Something went wrong while connecting to db" . mysqli_error($link)); //connection to db

        $username = htmlentities(mysqli_real_escape_string($link, $_POST['username']));
        $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
        $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

        $query ="INSERT INTO userpasswords VALUES('$username','$password', '$email')"; //asking db to work

        $result = mysqli_query($link, $query) or die("Error while adding new user" . mysqli_error($link));
        if($result)
            {
                echo "<span>Я сделалЪ!</span>";
            }
        mysqli_close($link); //closing connection
    }
?>
</body>
</html>
