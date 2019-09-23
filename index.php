<!DOCTYPE html>
<html>
<head>
    <META content="text/html; charset=utf-8" http-equiv=Content-type lang="ru-RU">
    <title>Регистрация без смс и регистрации</title>
</head>
<body>

<?php
require_once 'connect2db.php'; //look at my php, my php is amazing
if (isset($_POST['username']) && isset($_POST['password'])) {
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Something went wrong while connecting to db" . mysqli_error($link)); //connection to db

    $username = htmlentities(mysqli_real_escape_string($link, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

    $query = "INSERT INTO userpasswords VALUES('$username','$password', '$email')"; //asking db to work

    $result = mysqli_query($link, $query) or die("Error while adding new user" . mysqli_error($link));
    if ($result) {
        echo "<script type='text/javascript'>alert('Регистрация успешна! Теперь Вы можете залогиниться. ')</script>";
    }
    mysqli_close($link); //closing connection
}
?>

Я просто бесполезный скрипт и не могу ничего сделать сам. Помогите мне сделать свою работу, зарегистрируйтесь или войдите в систему.

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <p>Имя пользователя</p>
    <input type="text" name="username" maxlength="16" required  placeholder="Имя пользователя"/>

    <p>Пароль</p>
    <input type="text" name="password" maxlength="16" required placeholder="Пароль" />

    <p>E-mail</p>
    <input type="text" name="email" maxlength="30" required placeholder="Электронная почта"/>

    <input type="submit" name="register" value="Регистрация" />

</form>

<form method="POST" id="login" action="login.php">
    <p>Имя пользователя</p>
    <input type="text" name="username" required placeholder="Имя пользователя"/>
    <p>Пароль</p>
    <input type="text" name="password" required placeholder="Пароль" />
    <input type="submit" name="loging-in" value="Залогиниться" />
</form>

</body>
</html>