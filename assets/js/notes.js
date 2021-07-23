//Логика заметок
let
    body       = document.querySelector('body'), 
    titleInput = document.querySelector('.form__title'), //Заголовок записи
    textArea = document.querySelector('.form__text'),    //Текст записи
    btn = document.querySelector('.form__btn'),     //Кнопка добавить запись
    resultBox = document.querySelector('.notes'), //Блок куда выводить результат
    id = getRandomInt(1000000000);


//Функции записей
function addNote() {
    let
        data = {
            title: titleInput.value,
            desc:  textArea.value,
            class: body.dataset.note,
        }

    localStorage.setItem(`${body.dataset.note}-ID:${id}`, JSON.stringify(data))
    id++
    titleInput.value = '';
    textArea.value = '';
    loop();
    id = getRandomInt(1000000000)

    сlaims__overlay.removeClass('active');
    claims__modal.removeClass('active');

    invoices__overlay.removeClass('active');
    invoices__modal.removeClass('active');

    notesWork__overlay.removeClass('active');
    notesWork__modal.removeClass('active');

    phone__overlay.removeClass('active');
    phone__modal.removeClass('active');
}

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

function edit() {
    let 
        edit = document.querySelectorAll('.edit'),
        save = document.querySelectorAll('.save'),
        holder  = document.querySelectorAll('.result__holder'),
        title   = document.querySelectorAll('.result__title'),
        pre     = document.querySelectorAll('.result__text');
    edit.forEach(function(item, index) {
        item.addEventListener('click', () => {
            let textHeight = pre[index].offsetHeight;
            item.style.display = 'none';
            save[index].style.display = 'block';
            holder[index].removeChild(pre[index])
            let
                editArea = document.createElement('textarea');
                value    = JSON.parse(localStorage.getItem(item.dataset.type));
                editArea.value = value.desc;
                editArea.style.fontFamily = "'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"
                editArea.style.width = '100%';
                editArea.style.minHeight = '50px'
                editArea.style.height = textHeight + 'px';
            holder[index].append(editArea)
            save[index].addEventListener('click', () => {
                let
                    editNote = {
                        title: title[index].textContent,
                        desc:  editArea.value,
                        class: body.dataset.note, 
                    }
                localStorage.setItem(item.dataset.type, JSON.stringify(editNote))
                loop();
            })
            
        })
    })
}

function remove() {
    let item = document.querySelectorAll('.remove');
    item.forEach(function(item, index) {
        item.addEventListener('click', () => {
            localStorage.removeItem(item.dataset.type)
            loop();
        })
    })
}

function loop() {
    resultBox.innerHTML = '';
    for (let i = 0; i < localStorage.length; i++) {
        let 
            key = localStorage.key(i),
            notes = JSON.parse(localStorage.getItem(key))

        resultBox.innerHTML += `
            <div class="result__holder ${notes.class}">
                <button class="save" data-type="${key}"><img src="https://image.flaticon.com/icons/png/512/907/907128.png"></button>
                <button class="edit" data-type="${key}"><img src="https://image.flaticon.com/icons/png/512/2910/2910768.png"></button>
                <button class="remove" data-type="${key}"><img src="https://image.flaticon.com/icons/png/512/3096/3096673.png"></button>
                <h2 class="result__title">${notes.title}</h2>
                <pre class="result__text">${notes.desc}</pre>
            </div>
            `
    }
    render();
    edit();
    remove();
}

function render() {
    let holder = document.querySelectorAll('.result__holder');
    holder.forEach(item => {
        if (item.matches(`.${body.dataset.note}`)) {
            item.style.display = 'block';
        }
    })
}

//Вывод записей
loop();
btn.addEventListener('click', addNote)