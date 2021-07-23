<?php
    require '../app_config.php';

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME); #Открыть подключение к БД
    $id = $_GET['id'];
    $page = $_GET['page'];

    $mysql->query("INSERT INTO `$page` (`id`, `title`, `text`, `date`, `date-of-change`)
                   SELECT `id`, `title`, `text`, `date`, `date-of-change`
                   FROM `arch_$page`
                   WHERE `id` = $id");
    $mysql->query("DELETE FROM `arch_$page` WHERE `id` = $id");

    $mysql->close();

    header("Location: /clickboard-v.3/archive.php?page=$page");
?>