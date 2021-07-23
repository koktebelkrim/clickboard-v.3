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

  <script src="assets/database/bootsDataBase.js"></script>
  <script src="https://cdn.tiny.cloud/1/i5t6yigcxnte5lktj5qj1xngyfpahjswjmkh09ucqakqaenz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body class="page" data-note="fast-note">

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
    <?php require "template-parts/menu.php"; ?>

    <main class="settings">
      <div class="content-wrap settings__content">
        <h2 class="title">Панель управления контентом</h2>
        <form action="add_content.php?content=boots" method="POST">
          <textarea class="form__text" name="content"></textarea>
        </form>
      </div>
    </main>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src="assets/js/common.js"></script>

  <?php endif; ?>

</body>

</html>