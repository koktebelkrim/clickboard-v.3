//Не смогли дозвонится
let //Поля ввода
    orderInput         = document.querySelector('#outCall__orderInput'),          //Добавляем поле ввода для номера заказа (НДЗ)
    adressInput        = document.querySelector('#outCall__deliveryAdressInput'), //Поле ввода для адреса доставки (НДЗ)
    deliveryPriceInput = document.querySelector('#outCall__deliveryPriceInput'),  //Поле ввода стоймости доставки (НДЗ)
    totalPriceInput    = document.querySelector('#outCall__totalPriceInput');     //Поле ввода общая стоймость доставки (НДЗ)

let //Поля выбора
    typeDeliverySelect  = document.querySelector('#outCall__typeDeliverySelect'), //Поле выбора способа доставки (НДЗ)
    paymentMethodSelect = document.querySelector('#outCall__paymentMethodSelect'),//Поле выбора способа оплаты (НДЗ)
    productsCount       = document.querySelector('#outCall__countProductsSelect');//Поле ввода колличества товаров (НДЗ)

let //Блоки вставки
    order              = document.querySelector('#outcall__order'),            //Поле куда вставляется номер заказа (НДЗ)
    productsInputs     = document.querySelector('#outcall__inputs'),           //Блок куда добавлять инпуты для вписание товара
    orderComposition   = document.querySelector('#outcall__order-composition'),//Блок куда добавляются товары в зависимость от значения selectCount в шаблоне
    adress             = document.querySelector('#outCallAdress'),             //Блок куда вставляется адрес из outCall__deliveryAdressInput
    deliveryPrice      = document.querySelector('#outCallDelivery'),           //Блок куда вставляется цена доставки из outCall__typeDeliverySelect
    totalAmount        = document.querySelector('#outCallTotalAmount'),        //Блок куда вставляется общая стоймость из outCall__totalPriceInput
    paymentMethod      = document.querySelector('#outCallTotalPayment'),       //Блок куда вставляется способ оплаты из outCall__paymentMethodSelect
    typeDelivery       = document.querySelector('#outCallTypeDelivery'),       //Блок куда вставляется тип доставки из typeDelivery
    payOnline          = document.querySelector('#payOnline');                 //Блок куда вставляется текст в случае оплаты онлайн

let 
    addProducts    = document.querySelector('.outCall__add-products'), //Добавить инпуты для товаров
    outcallCopyBtn = document.querySelector('.outcall__btn');

//Функции шаблона НДЗ
const addProductsInputs = () => {
    let
        count = +productsCount.value;

    for(let i = 0; i < count; i++) {
        let
            input = document.createElement('input');
            input.classList.add('products-input');
            input.setAttribute(`placeholder`, `Товар-${i + 1}`)
            productsInputs.append(input)
    }
    getProducts();
}

const getProducts = () => {
    let
        products = document.querySelectorAll('.products-input');
    
    products.forEach(item => {
        item.addEventListener('change', () => {
            orderComposition.innerHTML += `<div>${item.value}</div>`;
        })
    })
}

const outcallClearValues = () => {
    orderInput.value = ''
    adressInput.value = ''
    deliveryPriceInput.value = ''
    totalPriceInput.value = ''
    typeDeliverySelect.value = '0'
    paymentMethodSelect.value = '0'
    productsCount.value = ''
    outcall.innerHTML = ''
    outcall.removeClass('active');
    let
        products = document.querySelectorAll('.products-input');

    for(let i = 0; i < products.length; i++) {
        productsInputs.removeChild(products[i])
    }
}

addProducts.addEventListener('click',          addProductsInputs)
orderInput.addEventListener('change',          () => {order.innerHTML = orderInput.value});
adressInput.addEventListener('change',         () => {adress.innerHTML = adressInput.value});
deliveryPriceInput.addEventListener('change',  () => {deliveryPrice.innerHTML = deliveryPriceInput.value});
totalPriceInput.addEventListener('change',     () => {totalAmount.innerHTML = totalPriceInput.value});
paymentMethodSelect.addEventListener('change', () => {
    
    let
        value = paymentMethodSelect.value;
        console.log(value);
        if(value == 1) {
            payOnline.innerHTML = 'После чего мы откроем Вам доступ в личном кабинете для оплаты на сайте.<br><br>С уважением, компания Гарсинг!'
            paymentMethod.innerHTML = 'Оплата онлайн'
        } else {
            payOnline.innerHTML = 'После подтверждения мы сформируем накладную и отправим Вам трек-номер для отслеживания статуса посылки.<br><br>С уважением, компания Гарсинг!'
            paymentMethod.innerHTML = 'Наложенный платёж'
        }
});
typeDeliverySelect.addEventListener('change',  () => {
    typeDeliverySelect.value == 1 
    ? typeDelivery.innerHTML = 'Почтой России по адресу:' 
    : typeDelivery.innerHTML = 'СДЭК по адресу:';
});

outcallCopyBtn.addEventListener('click', outcallClearValues);
