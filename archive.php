<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickBoard garsing</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="shortcut icon" href="assets/img/title-ico.png" type="image/png">

</head>

<body class="page">
    
    <!-- Авторизация -->
    <?php if ($_COOKIE['user'] == '') : ?>
    <?php require "template-parts/auth.php" ?>
    <?php else : ?>

    <!-- Меню -->
    <?php require "template-parts/menu.php"; ?>

        <main class="archive">
            <div class="content-wrap">
                <?php
                $page_title = $_GET["page"];

                switch($page_title) {
                    case "claims":
                        $title = "Претензии";
                        break;
                    case "invoices":
                        $title = "Заказы по счёту";
                        break;
                    case "note":
                        $title = "Заметки для сотрудников";
                        break;
                    case "phone":
                        $title = "Телефонные заказы";
                        break;
                }
                ?>
                <h2 class="title">
                    Архив записей "<?php echo $title; ?>"
                </h2>
                <div class="form-navigation-row">
                    <div class="search">
                        <button class="search__btn"></button>
                        <input type="text" class="search__input" placeholder="Поиск">
                    </div>
                </div>
                <div class="notes archive__notes">
                    <?php
                    
                    require 'assets/php/app_config.php';

                    $page = $_GET["page"];

                    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
                    $result = $mysql->query("SELECT * FROM `arch_$page` ORDER BY `id` DESC");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <div class='result__holder'>
                            
                                <a href='assets/php/notes/recover_note.php?id=".$row["id"]."&page=". $page ."'>
                                    <button class='recover'><img src='assets/img/icons/recover.png'></button>
                                </a>

                                <h2 class='result__title'>" . $row["title"] . "</h2>
                                <div class='result__text'>" . $row["text"] . "</div>
                                <span class='result__date'>Дата создания: " . $row["date"] . "</span>
                                <br>
                                <span class='result__date'>Дата изменения: " . $row["date-of-change"] . "</span>
                            </div>
                            ";
                        }
                    }
                    $mysql->close();
                    ?>
                </div>
            </div>
        </main>

    <?php endif; ?>

    <script src="assets/js/common.js"></script>
    <script src="assets/js/search.js"></script>

</body>

</html>