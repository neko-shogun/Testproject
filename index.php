<!DOCTYPE html>
<html>
<head>
    <META content="text/html; charset=utf-8" http-equiv=Content-type lang="ru-RU">
    <title>Регистрация без смс и регистрации</title>
</head>
<body>

<?php
    require_once 'connect2db.php'; //look at my php, my php is amazing

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Something went wrong while connecting to db" . mysqli_error($link)); //connection to db

    mysqli_close($link); //close connection to db
?>

Я просто бесполезный скрипт и не могу ничего сделать сам. Помогите мне сделать свою работу, зарегистрируйтесь или войдите в систему.

<form method="POST" id="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <p>Имя пользователя</p>
    <input type="text" name="username" value="Odmen"/>

    <p>Пароль</p>
    <input type="text" name="password" value="123456" />

    <p>E-mail</p>
    <input type="text" name="email" value="nagibator777@mail.ru"/>

    <input type="submit" name="register" value="Регистрация" />

</form>

<form method="POST" id="login" action="login.php">
    <p>Имя пользователя</p>
    <input type="text" name="username" value="Odmen"/>
    <p>Пароль</p>
    <input type="text" name="password" value="123456" />
    <input type="submit" name="loging-in" value="Залогиниться" />
</form>

</body>
</html>