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

  <script src="https://cdn.tiny.cloud/1/i5t6yigcxnte5lktj5qj1xngyfpahjswjmkh09ucqakqaenz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body class="page" data-note="fast-note">

  <!-- Авторизация -->
  <?php if ($_COOKIE['user'] == '') : ?>
  <?php require "template-parts/auth.php" ?>
  <?php else : ?>

  <!-- Меню -->
  <?php require "template-parts/menu.php"; ?>

    <main class="clickboard">
      <div class="content-wrap clickboard__content-grid">
        <div class="clickboard__templates">
          <h2 class="title">Шаблоны</h2>

          <!-- Шаблонизатор СДЭК -->
          <?php require "template-parts/copy-templates/temp-sdek.php" ?>

          <!-- Шаблонизатор ПОЧТА -->
          <?php require "template-parts/copy-templates/temp-mail.php" ?>

          <!-- Вызов модального окна шаблонизатора НДЗ -->
          <button type="button" class="fieldset-template__btn fieldset-template__btn_long" id="outcall__btn">Недозвон</button> <!-- btn__outcall -->
        </div>

        <div class="clickboard__info">
          <h2 class="title">Таблицы типовых размеров</h2>

          <div class="clickboard__size-holder">
            <button class="clickboard__size-item clickboard__size-item_boots">
              <img class="clickboard__size-icon" src="assets/img/icons/boot.png">
              <p class="clickboard__item-title">ОБУВЬ</p>
            </button>

            <button class="clickboard__size-item clickboard__size-item_uniform">
              <img class="clickboard__size-icon" src="assets/img/icons/uniform.png">
              <p class="clickboard__item-title">КУРТКИ</p>
            </button>

            <button class="clickboard__size-item clickboard__size-item_pants">
              <img class="clickboard__size-icon" src="assets/img/icons/pants.png">
              <p class="clickboard__item-title">БРЮКИ</p>
            </button>

            <button class="clickboard__size-item clickboard__size-item_belts">
              <img class="clickboard__size-icon" src="assets/img/icons/belt.png">
              <p class="clickboard__item-title">РЕМНИ</p>
            </button>
          </div>

          <h2 class="title">Быстрые заметки</h2>

          <form class="form" action="assets/php/notes/add_note.php?page=fast-notes" method="post">
            <input class="form__title" placeholder="Заголовок" type="text" name="title">
            <textarea class="form__text" placeholder="Текст" name="text"></textarea>
            <button type="submit" class="form__btn clickboard__note-btn">Сохранить</button>
          </form>

        </div>

        <div class="notes clickboard__notes">

          <?php
          require 'assets/php/app_config.php';

          $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
          $result = $mysql->query("SELECT * FROM `fast-notes` ORDER BY `id` DESC");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
              <div class='result__holder'>

                <a href='assets/php/notes/delete_note.php?id=" . $row["id"] . "&page=fast-notes'>
                  <button class='remove'><img src='https://image.flaticon.com/icons/png/512/3096/3096673.png'></button>
                </a>

                <form action='assets/php/notes/edit_note.php?id=" . $row["id"] . "&page=fast-notes' method='post'>
                  <h2 class='result__title'>" . $row["title"] . "</h2>
                  <div class='result__text'>" . $row["text"] . "</div>
                  <button class='edit'><img src='https://image.flaticon.com/icons/png/512/2910/2910768.png'></button>
                  <button class='save'><img src='https://image.flaticon.com/icons/png/512/907/907128.png'></button>
                </form>

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
    
    <!-- Шаблонизатор НДЗ (modal) -->
    <?php require "template-parts/modal/modal-outcall.php" ?>
    
    <!-- Обувь (modal) -->
    <?php require "template-parts/modal/modal-boots.php" ?>

    <!-- Куртки (modal) -->
    <?php require "template-parts/modal/modal-uniform.php" ?>

    <!-- Брюки (modal) -->
    <?php require "template-parts/modal/modal-pants.php" ?>

    <!-- Ремни (modal) -->
    <?php require "template-parts/modal/modal-belts.php" ?>

    
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src="assets/js/lib/clickboard.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/templates.js"></script>
    <script src="assets/js/outcall.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/search.js"></script>
    <script>
      var cb = new Clipboard('.btn'); // класс кнопки
      cb.on('success', function(e) {
        inputSdek.value = '';
        inputMail.value = '';
        window.setTimeout(function() {
          e.clearSelection();
        }, 100);
      });
    </script>

  <?php endif; ?>

</body>

</html>