<?php
    require 'app_config.php';

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass); #Кэшируем пароль

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    /* Данные полученные с помощью запроса возвращаются в виде объекта и с ним не очень удобно работать
        для этого преобразуем $result с помощью метода fetch_assoc(); в массив */
    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "<p style='color: red;'>Неверный логин или пароль</p>";
        exit();
    }

    setcookie('user', $user['login'], time() + 3600 * 11, "/");

    $mysql->close(); #Закрыть подключение к БД

    header('Location: /clickboard-v.3/'); #Переадресация на главную страницу

?>