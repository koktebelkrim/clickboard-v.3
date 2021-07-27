// document.querySelector('#claims__search').oninput = function() {
//     let val    = this.value.trim();
//     let titles = document.querySelectorAll('.result__title');
//     let note   = document.querySelectorAll('.result__holder');
//     if (val != '') {
//         titles.forEach(function(item, index) {
//             if (item.innerText.search(val) == -1) {
//                 note[index].style.display = 'none';
//             } else {
//                 note[index].style.display = 'block';
//             }
//         });
//     } else {
//         titles.forEach(function(item, index) {
//             note[index].style.display = 'block';
//         });
//     }
// }

let body = document.querySelector('body');
if (body.dataset.note == 'fast-note') {

    let search = document.querySelectorAll('.search__input');

    search.forEach(function (item) {
        item.oninput = function () {
            let val = this.value.trim().toLowerCase();
            let titles = document.querySelectorAll('.modal__boots-link');
            let info = document.querySelectorAll('.modal__boots-info');
            if (val != '') {
                titles.forEach(function (item, index) {
                    if (item.innerText.toLowerCase().search(val) == -1) {
                        item.style.display = 'none';
                        info[index].style.display = 'none';
                    } else {
                        item.style.display = 'block';
                        info[index].style.display = 'block';
                    }
                });
            } else {
                titles.forEach(function (item, index) {
                    item.style.display = 'block';
                    info[index].style.display = 'block';
                });
            }
        }
    });
} else {
    let search = document.querySelectorAll('.search__input');

    search.forEach(function (item) {
        item.oninput = function () {
            let val = this.value.trim().toLowerCase();
            let titles = document.querySelectorAll('.result__title');
            let note = document.querySelectorAll('.result__holder');
            if (val != '') {
                titles.forEach(function (item, index) {
                    if (item.innerText.toLowerCase().search(val) == -1) {
                        note[index].style.display = 'none';
                    } else {
                        note[index].style.display = 'block';
                    }
                });
            } else {
                titles.forEach(function (item, index) {
                    note[index].style.display = 'block';
                });
            }
        }
    })
}