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

    <main class="clickboard">
      <div class="content-wrap clickboard__content-grid">
        <div class="clickboard__templates">
          <h2 class="title">
            Шаблоны
          </h2>
          <div class="fieldset-template">
            <div class="hidden-box">
              <pre id="copy__sdek" style="font-family: 'Roboto', sans-serif">
Высылаем трек-номер для отслеживания.
№ <p id="insert__sdek" style="display: inline;"></p>
Заказ можете отследить на сайте - https://www.cdek.ru
С уважением, компания Гарсинг!
                        </pre>
            </div>
            <input class="fieldset-template__input" type="text" name="" id="input__sdek" placeholder="Введите трек-номер" pattern="[0-9]{10}">
            <div class="fieldset-template__holder">
              <img class="fieldset__logo" src="assets/img/logo_sdek.png" alt="sdek">
              <button class="btn fieldset-template__btn" type="button" data-clipboard-action="copy" data-clipboard-target="#copy__sdek">Копировать</button>
            </div>
          </div>
          <div class="fieldset-template">
            <div class="hidden-box">
              <pre class="hidden-box__text" id="copy__mail" style="font-family: 'Roboto', sans-serif"> <!-- TemplateMAILcopyme -->
Высылаем трек-номер для отслеживания.
№ <p class="hidden-box__track-number" id="insert__mail" style="display: inline;"></p>  
Заказ можете отследить на сайте -  https://www.pochta.ru
С уважением, компания Гарсинг!
                      </pre>
            </div>
            <input type="text" name="" id="input__mail" placeholder="Введите трек-номер" class="fieldset-template__input" pattern="[0-9]{14}">
            <div class="fieldset-template__holder">
              <img class="fieldset__logo" src="assets/img/logo_mail.png" alt="mail">
              <button type="button" class="btn fieldset-template__btn" data-clipboard-action="copy" data-clipboard-target="#copy__mail">Копировать</button>
            </div>
          </div>
          <button type="button" class="fieldset-template__btn fieldset-template__btn_long" id="outcall__btn">Недозвон</button> <!-- btn__outcall -->
        </div>

        <div class="clickboard__info">
          <h2 class="title">
            Таблицы типовых размеров
          </h2>
          <div class="clickboard__size-holder">
            <button class="clickboard__size-item clickboard__size-item_boots">
              <img class="clickboard__size-icon" src="assets/img/icons/boot.png">
              <p class="clickboard__item-title">
                ОБУВЬ
              </p>
            </button>
            <button class="clickboard__size-item clickboard__size-item_uniform">
              <img class="clickboard__size-icon" src="assets/img/icons/uniform.png">
              <p class="clickboard__item-title">
                КУРТКИ
              </p>
            </button>
            <button class="clickboard__size-item clickboard__size-item_pants">
              <img class="clickboard__size-icon" src="assets/img/icons/pants.png">
              <p class="clickboard__item-title">
                БРЮКИ
              </p>
            </button>
            <button class="clickboard__size-item clickboard__size-item_belts">
              <img class="clickboard__size-icon" src="assets/img/icons/belt.png">
              <p class="clickboard__item-title">
                РЕМНИ
              </p>
            </button>
          </div>
          <h2 class="title">
            Быстрые заметки
          </h2>

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

    <div class="modal-overlay" id="outcall__overlay">
      <div class="modal" id="outcall__modal">
        <a class="close-modal" id="outcall__close">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
            </path>
          </svg>
        </a><!-- close modal outcall -->

        <div class="modal-content">
          <div class="fieldset-template fieldset-template_modal">
            <!-- Out-call template -->
            <div class="hidden-box">
              <pre id="copy__outCall" class="hidden-box__text" style="font-family: 'Roboto', sans-serif">
Здравствуйте! Не смогли до Вас дозвониться для подтверждения заказа.
Ваш заказ № <div id="outcall__order" style="display: inline;"></div>
<div id="outcall__order-composition"></div>
Доставка <div id="outCallTypeDelivery" style="display: inline;"></div>
<div id="outCallAdress"></div>
Стоимость отправки - <div id="outCallDelivery" style="display: inline;"></div> руб.
Итого - <div id="outCallTotalAmount" style="display: inline;"></div> руб.
Способ оплаты: <div id="outCallTotalPayment" style="display: inline;"></div>
Если вы согласны с условиями заказа, просьба дать подтверждение в ответном письме. <div id="payOnline" style="display: inline;"></div> 
                </pre>
            </div>

            <label for="order">Номер заказа</label>
            <input type="text" name="order" id="outCall__orderInput" placeholder="Номер заказа" class="fieldset-template__input fieldset-template__input--modal" pattern="[0-9]{4}">

            <label for="count">Количество товара</label>
            <input type="number" class="fieldset-template__input fieldset-template__input--modal" id="outCall__countProductsSelect" placeholder="Количество позиций">
            <button class="fieldset-template__btn outCall__add-products">Добавить</button>
            <div class="fieldset-template__new-input" id="outcall__inputs"></div>

            <label for="typeDelivery">Служба доставки</label>
            <select name="typeDelivery" id="outCall__typeDeliverySelect">
              <option value="0" autofocus>Выбрать:</option>
              <option value="1">Почта</option>
              <option value="2">СДЭК</option>
            </select>

            <label for="orderAdress">Адрес доставки</label>
            <input type="text" name="orderAdress" id="outCall__deliveryAdressInput" placeholder="Адрес доставки" class="fieldset-template__input fieldset-template__input--modal">

            <label for="delivery">Стоймость доставки</label>
            <input type="text" name="delivery" id="outCall__deliveryPriceInput" placeholder="Стоймость доставки" class="fieldset-template__input fieldset-template__input--modal">

            <label for="totalAmount">Общая сумма</label>
            <input type="text" name="totalAmount" id="outCall__totalPriceInput" placeholder="Общая сумма заказа" class="fieldset-template__input fieldset-template__input--modal">

            <label for="payment">Способ оплаты</label>
            <select name="payment" id="outCall__paymentMethodSelect">
              <option value="0" autofocus>Выбрать:</option>
              <option value="1">Оплата онлайн</option>
              <option value="2">Наложенный платёж</option>
            </select>
            <form action="index.php">
              <button type="submit" class="btn fieldset-template__btn outcall__btn" data-clipboard-action="copy" data-clipboard-target="#copy__outCall">Копировать
              </button>
            </form>
          </div> <!-- /Out-call template-->
        </div><!-- content -->
      </div><!-- modal outcall -->
    </div> <!-- modal outcall -->

    <div class="modal-overlay" id="boots__overlay">
      <div class="modal main__modal" id="boots__modal">
        <a class="close-modal" id="boots__close">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
            </path>
          </svg>
        </a>

        <div class="modal-content main__modal-content">
          <h3 class="modal__title">
            Размерная сетка обуви garsing

            <div class='search'>
              <button class='search__btn'>
                <img class='search__icon' src='assets/img/icons/search.png'>
              </button>
              <input type='text' class='search__input' id='claims__search' placeholder='Поиск'>
            </div>
          </h3>

          <?php
          require 'assets/php/app_config.php';

          $mysql = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
          $result = $mysql->query("SELECT * FROM `boots-content` ORDER BY `id` DESC");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
              <div class='modal__item'>
                  <a class='modal__boots-link' href='#'>" . $row["title"] . "<img class='arrow-down' src='assets/img/icons/down-arrow.svg'></a>
                  <div class='modal__boots-info'>
                  " . $row["content"] . "
                  </div>
              </div>
              ";
            }
          }
          $mysql->close();
          ?>

          <!-- <div class="modal__item">
          <a class="modal__boots-link" href="#">БОТИНКИ С ВЫСОКИМИ БЕРЦАМИ 1700 «RANGER» (З)</a>
          <div class="modal__boots-info">
            
          </div>
        </div> -->

        </div>
      </div>
    </div> <!-- modal boots -->

    <div class="modal-overlay" id="uniform__overlay">
      <div class="modal" id="uniform__modal">
        <a class="close-modal" id="uniform__close">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
            </path>
          </svg>
        </a><!-- close modal uniform -->

        <div class="modal-content">
          Uniform content
        </div><!-- content -->
      </div><!-- modal uniform -->
    </div> <!-- modal uniform -->

    <div class="modal-overlay" id="pants__overlay">
      <div class="modal" id="pants__modal">
        <a class="close-modal" id="pants__close">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
            </path>
          </svg>
        </a><!-- close modal pants -->

        <div class="modal-content">
          Pants content
        </div><!-- content -->
      </div><!-- modal pants -->
    </div> <!-- modal pants -->

    <div class="modal-overlay" id="belts__overlay">
      <div class="modal" id="belts__modal">
        <a class="close-modal" id="belts__close">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
            </path>
          </svg>
        </a><!-- close modal belts -->

        <div class="modal-content">
          Belts content
        </div><!-- content -->
      </div><!-- modal belts -->
    </div> <!-- modal belts -->

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src="assets/js/lib/clickboard.min.js"></script>
    <script src="assets/js/lib/Date.format.min.js"></script>
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