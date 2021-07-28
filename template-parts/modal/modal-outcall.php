<div class="modal-overlay" id="outcall__overlay">
    <div class="modal" id="outcall__modal">
        <a class="close-modal" id="outcall__close">
            <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                </path>
            </svg>
        </a>

        <div class="modal-content">
            <div class="fieldset-template fieldset-template_modal">
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
            </div>
        </div>
    </div>
</div>