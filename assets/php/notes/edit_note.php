<?php
    require '../app_config.php';

    date_default_timezone_set('Europe/Moscow');

    $edited_text = trim($_POST['edit-text']);
    $id = $_GET["id"];
    $page = $_GET["page"];
    $edited_date = date('d-m-Y H:i', time());

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME); #Открыть подключение к БД
    $mysql->query("UPDATE `$page` SET `text`='$edited_text' WHERE `id`='$id'");
    $mysql->query("UPDATE `$page` SET `date-of-change`='$edited_date' WHERE `id`='$id'");

    $mysql->close(); #Закрыть подключение к БД

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