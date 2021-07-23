//Шаблоны
let 
    inputSdek  = document.querySelector('#input__sdek'),
    insertSdek = document.querySelector('#insert__sdek'),
    inputMail  = document.querySelector('#input__mail'),
    insertMail = document.querySelector('#insert__mail');

//Скрипт генерации шаблонных форм
inputSdek.addEventListener('change', () => {insertSdek.innerHTML = inputSdek.value;});
inputMail.addEventListener('change', () => {insertMail.innerHTML = inputMail.value;});