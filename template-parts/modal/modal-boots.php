<div class="modal-overlay" id="boots__overlay">
    <div class="modal main__modal" id="boots__modal">
        <a class="close-modal" id="boots__close">
            <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                </path>
            </svg>
        </a>

        <div class="modal-content main__modal-content">
            <h3 class="modal__title">Размерная сетка обуви garsing</h3>
            <div class="search">
                <button class="search__btn"></button>
                <input type="text" class="search__input" placeholder='Поиск'>
            </div>

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

        </div>
    </div>
</div>