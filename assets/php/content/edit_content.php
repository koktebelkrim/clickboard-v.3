<?php
    
    require '../app_config.php';

    $id       = $_GET["id"];
    $category = $_GET["category"];
    $content  = $_POST["edited-content"];

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME); #Открыть подключение к БД
    $mysql->query("UPDATE `$category` SET `content`='$content' WHERE `id`='$id'");

    $mysql->close(); #Закрыть подключение к БД

    header("Location: /clickboard-v.3/settings.php");
?>