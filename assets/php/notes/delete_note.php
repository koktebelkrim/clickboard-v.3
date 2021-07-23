<?php
    require '../app_config.php';

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME); #Открыть подключение к БД
    $id = $_GET['id'];
    $page = $_GET['page'];
    $mysql->query("INSERT INTO `arch_$page` (`id`, `title`, `text`, `date`, `date-of-change`)
                   SELECT `id`, `title`, `text`, `date`, `date-of-change`
                   FROM `$page`
                   WHERE `id` = $id");

    $mysql->query("DELETE FROM `$page` WHERE `id` = $id");

    $mysql->close();

    switch ($page) {
        case 'fast-notes':
            header('Location: /clickboard-v.3/');
            break;
        case 'claims':
            header('Location: /clickboard-v.3/claims.php');
            break;
        case 'invoices':
            header('Location: /clickboard-v.3/invoices.php');
            break;
        case 'note':
            header('Location: /clickboard-v.3/notes.php');
            break;
        case 'phone':
            header('location: /clickboard-v.3/phone.php');
            break;
    }
?>