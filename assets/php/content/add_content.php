<?php
    $title    = trim($_POST["title"]);
    $content  = $_POST["content"];
    $category = $_GET["category"];

    require '../app_config.php';

    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    $mysql->query("INSERT INTO `$category` (`title`, `content`) VALUES('$title', '$content')");
    $mysql->close();
    
?>