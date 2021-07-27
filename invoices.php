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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/title-ico.png" type="image/png">

    <script src="https://cdn.tiny.cloud/1/i5t6yigcxnte5lktj5qj1xngyfpahjswjmkh09ucqakqaenz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body class="page" data-note="invoices">

    <?php
    if ($_COOKIE['user'] == '') :
    ?>

        <div class="auth">
            <div class="col">
                <div class="logo auth__logo">
                    <img class="logo__img" src="assets/img/logo.png" alt="logo">
                </div>
                <h1 class="auth__title">Авторизация</h1>
                <form action="assets/php/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button type="submit" class="auth__btn btn btn-success">Авторизоваться</button>
                </form>
            </div>
        </div>

    <?php else : ?>

        <!-- Меню -->
        <?php require "template-parts/menu.php" ?>

        <main class="invoices">
            <div class="content-wrap">
                <h2 class="title">
                    Заказы по счёту
                </h2>
                <div class="form-navigation-row">
                    <button class="add-note-btn invoices__add-note-btn">
                        Добавить запись
                    </button>
                    <a class="archive-link" href="archive.php?page=invoices">Архив записей</a>
                    <div class="search">
                        <button class="search__btn">
                            <img class="search__icon" src="assets/img/icons/search.png">
                        </button>
                        <input type="text" class="search__input" placeholder="Поиск">
                    </div>
                </div>

                <div class="notes invoices__notes">
                    <?php
                    require 'assets/php/app_config.php';

                    $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
                    $result = $mysql->query("SELECT * FROM `invoices` ORDER BY `id` DESC");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <div class='result__holder'>
                                
                                <a href='assets/php/notes/delete_note.php?id=".$row["id"]."&page=invoices'>
                                    <button class='remove'><img src='https://image.flaticon.com/icons/png/512/3096/3096673.png'></button>
                                </a>

                                <form action='assets/php/notes/edit_note.php?id=".$row["id"]."&page=invoices' method='post'>
                                    <h2 class='result__title'>" . $row["title"] . "</h2>
                                    <div class='result__text'>" . $row["text"] . "</div>
                                    <button class='edit'><img src='https://image.flaticon.com/icons/png/512/2910/2910768.png'></button>
                                    <button class='save'><img src='https://image.flaticon.com/icons/png/512/907/907128.png'></button>
                                </form>

                                <span class='result__date'>Дата создания: ". $row["date"] ."</span>
                                <br>
                                <span class='result__date'>Дата изменения: ". $row["date-of-change"] ."</span>
                                
                            </div>
                            ";
                        }
                    }
                    $mysql->close();
                    ?>

                </div>
            </div>

            <div class="modal-overlay" id="invoices__overlay">
                <div class="modal form__modal" id="invoices__modal">
                    <a class="close-modal" id="invoices__close">
                        <svg viewBox="0 0 20 20">
                            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                            </path>
                        </svg>
                    </a><!-- close modal invoices -->

                    <div class="modal-content">
                        <form action="assets/php/notes/add_note.php?page=invoices" method="post" class="form invoices__form">
                            <input class="form__title" placeholder="Заголовок заметки" type="text" name="title">
                            <textarea class="form__text" placeholder="Кратко опишите главный смысл заметки" name="text"></textarea>
                            <button type="submit" class="form__btn">Сохранить</button>
                        </form>
                    </div><!-- content -->
                </div><!-- modal invoices -->
            </div> <!-- modal invoices -->
        </main>



        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
        <script src="assets/js/common.js"></script>
        <script src="assets/js/modal.js"></script>
        <script src="assets/js/search.js"></script>

    <?php endif; ?>
</body>

</html>