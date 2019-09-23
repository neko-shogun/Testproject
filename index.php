<!DOCTYPE html>
<html>
<head>
    <META content="text/html; charset=utf-8" http-equiv=Content-type lang="ru-RU">
    <title>Регистрация без смс и регистрации</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
require_once 'connect2db.php'; //look at my php, my php is amazing
if (isset($_POST['username']) && isset($_POST['password'])) {
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Something went wrong while connecting to db" . mysqli_error($link)); //connection to db

    $username = htmlentities(mysqli_real_escape_string($link, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); //hash password
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

    $query = "INSERT INTO userpasswords VALUES('$username','$hashed_password', '$email')"; //asking db to work

    $result = mysqli_query($link, $query) or die("Error while adding new user" . mysqli_error($link));
    if ($result) {
        echo "<script type='text/javascript'>alert('Регистрация успешна! Теперь Вы можете залогиниться. ')</script>";
    }
    mysqli_close($link); //closing connection
}
?>

<?php
    ///require_once 'connect2db.php'; //look at my php, my php is amazing
        //$password = $_POST['password']; //get the password
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT); //hash this shit
    //if(password_verify($password, $hashed_password)) { // If the password inputs matched the hashed password in the database log user in
        ////
    //}
?>

Я просто бесполезный скрипт и не могу ничего сделать сам. Помогите мне сделать свою работу, зарегистрируйтесь или войдите в систему.
<div class="big-box">
    <div class="left-box">
        <p>Зарегистрироваться</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <p>Имя пользователя</p>
            <input type="text" name="username" maxlength="20" required  placeholder="Имя пользователя"/>

            <p>Пароль</p>
            <input type="password" name="password" maxlength="16" required placeholder="Пароль" />

            <p>E-mail</p>
            <input type="text" name="email" required placeholder="Электронная почта"/>

            <input type="submit" name="register" value="Регистрация" />

        </form>
    </div>

    <div class="right-box">
        <p>Войти</p>
        <form method="POST" id="login" action="login.php">
            <p>Имя пользователя</p>
            <input type="password" name="username" required placeholder="Имя пользователя"/>
            <p>Пароль</p>
            <input type="text" name="password" required placeholder="Пароль" />
            <input type="submit" name="loging-in" value="Залогиниться" />
        </form>
    </div>
</div>

</body>
</html>