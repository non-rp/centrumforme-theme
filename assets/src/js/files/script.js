// Подключение функционала "Чертогов Фрилансера"
import { isMobile } from "./functions.js";
// Подключение списка активных модулей
import { flsModules } from "./modules.js";

import "./cloud.js";


document.addEventListener('click', function (e) {

    let target = e.target;

    // if (target.closest('.politika__icon')) {
    //     target.closest('.politika__icon').classList.toggle('shom-icon');
    //     target.closest('.politika__icon').querySelector('input').checked = true;
    // }

    if (target.closest('.menu__link')) {
        let html = document.querySelector('html')
        html.classList.remove('lock');
        html.classList.remove('menu-open');
    }

})



