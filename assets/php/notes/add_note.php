<?php
    require '../app_config.php';

    date_default_timezone_set('Europe/Moscow');

    $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
    $text = trim($_POST['text']);
    $date = date('d-m-Y_H:i', time());
    $page = $_GET['page'];
    
    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME); 
    $mysql->query("INSERT INTO `$page` (`title`, `text`, `date`, `date-of-change`) VALUES('$title', '$text', '$date', ' - ')"); 
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