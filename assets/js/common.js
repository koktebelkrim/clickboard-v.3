//Прилипающее меню
let
    menu = document.querySelector('.menu');

window.addEventListener('scroll', () => {
    menu.style.top = window.scrollY + 'px';
})

//Текущее меню
let
    menuItem = document.querySelectorAll('.menu__item'),
    menuLink = document.querySelectorAll('.menu__link'),
    page = location.pathname.substring(16);

menuLink.forEach(function (item, index) {
    if (item.getAttribute('href') == page) {
        menuItem[index].classList.add('menu__item_current');
    }
})

try {
    //Инициализация текстового редактора
    tinymce.init({
        selector: '.form__text',
    });

} catch {
    console.log('Page doesn`t have text editor')
}

try {

    let
        note = document.querySelectorAll('.result__holder'),
        noteTitle = document.querySelectorAll('.result__title'),
        searchBtn = document.querySelector('.search__btn'),
        searchInput = document.querySelector('.search__input');

    searchBtn.addEventListener('click', () => {
        for (let i = 0; i < noteTitle.length; i++) {
            if (!noteTitle[i].textContent.indexOf(searchInput.value)) {
                for (let j = 0; j < note.length; j++) {
                    note[j].style.display = 'none';
                }
                note[i].style.display = 'block';
            }
        }
        searchInput.value = '';
    })

    window.addEventListener('keydown', event => {
        if (event.key == 'Enter') {
            for (let i = 0; i < noteTitle.length; i++) {
                if (!noteTitle[i].textContent.indexOf(searchInput.value)) {
                    for (let j = 0; j < note.length; j++) {
                        note[j].style.display = 'none';
                    }
                    note[i].style.display = 'block';
                }
            }
            searchInput.value = '';
        }

    })

} catch {
    console.log('Page doesn`t have search');
}

try {
    
    let 
        editBtn = document.querySelectorAll('.edit'),
        saveBtn = document.querySelectorAll('.save'),
        text    = document.querySelectorAll('.result__text');

    editBtn.forEach(function(item, i) {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            let 
                content       = text[i].innerHTML,
                contentHeight = text[i].offsetHeight;

            item.style.display       = 'none';
            saveBtn[i].style.display = 'block';
            let
                editArea = document.createElement('textarea');
                editArea.setAttribute('class', 'edit-area');
                editArea.setAttribute('name', 'edit-text');
                editArea.style.minHeight = contentHeight + 'px';
                editArea.value = content;

            text[i].innerHTML = '';
            text[i].appendChild(editArea);

            tinymce.init({
                selector: '.edit-area',
            });

        })
    })

} catch {
    console.log('Edit button not found')
}

try {
    let
        bootsLink = document.querySelectorAll('.modal__boots-link'),
        bootsInfo = document.querySelectorAll('.modal__boots-info');
    
    console.log(bootsInfo);
    
    bootsLink.forEach(function(item, i) {
        item.addEventListener('click', () => {
            bootsInfo.forEach(item => {
                item.classList.remove('modal__boots-info_active');
            })
            bootsInfo[i].classList.toggle('modal__boots-info_active');
        })
    })

} catch {
    console.log('Info links not found')
}