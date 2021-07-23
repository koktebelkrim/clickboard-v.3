//Модальные окна
let 
    outcall = $('#outcall__overlay, #outcall__modal'),
    boots   = $('#boots__overlay, #boots__modal'),
    uniform = $('#uniform__overlay, #uniform__modal'),
    pants   = $('#pants__overlay, #pants__modal'),
    belts   = $('#belts__overlay, #belts__modal');

$('#outcall__btn').click(function(){
    outcall.addClass('active');
});
$('.clickboard__size-item_boots').click(function(){
    boots.addClass('active');
});
$('.clickboard__size-item_uniform').click(function(){
    uniform.addClass('active');
});
$('.clickboard__size-item_pants').click(function(){
    pants.addClass('active');
});
$('.clickboard__size-item_belts').click(function(){
    belts.addClass('active');
});

$('#outcall__close').click(function(){
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
});
$('#boots__close').click(function(){
    boots.removeClass('active');
});
$('#uniform__close').click(function(){
    uniform.removeClass('active');
});
$('#pants__close').click(function(){
    pants.removeClass('active');
});
$('#belts__close').click(function(){
    belts.removeClass('active');
});


try {
    сlaims__overlay  = $('#claims__overlay');
    claims__modal    = $('#claims__modal');

    $('.claims__add-note-btn').click(function(){
        сlaims__overlay.addClass('active');
        claims__modal.addClass('active');
    });
    $('#claims__close').click(function(){
        сlaims__overlay.removeClass('active');
        claims__modal.removeClass('active');
    });
} catch {
    console.log('Claims error')
}

try {
    invoices__overlay  = $('#invoices__overlay');
    invoices__modal    = $('#invoices__modal');

    $('.invoices__add-note-btn').click(function(){
        invoices__overlay.addClass('active');
        invoices__modal.addClass('active');
    });
    $('#invoices__close').click(function(){
        invoices__overlay.removeClass('active');
        invoices__modal.removeClass('active');
    });
} catch {
    console.log('invoices error')
}

try {
    notesWork__overlay  = $('#notes-work__overlay');
    notesWork__modal    = $('#notes-work__modal');

    $('.notes-work__add-note-btn').click(function(){
        notesWork__overlay.addClass('active');
        notesWork__modal.addClass('active');
    });
    $('#notes-work__close').click(function(){
        notesWork__overlay.removeClass('active');
        notesWork__modal.removeClass('active');
    });
} catch {
    console.log('notes-work error')
}

try {
    phone__overlay  = $('#phone__overlay');
    phone__modal    = $('#phone__modal');

    $('.phone__add-note-btn').click(function(){
        phone__overlay.addClass('active');
        phone__modal.addClass('active');
    });
    $('#phone__close').click(function(){
        phone__overlay.removeClass('active');
        phone__modal.removeClass('active');
    });
} catch {
    console.log('phone error')
}
