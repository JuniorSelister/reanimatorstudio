let button = document.querySelector('.main-menu__btn');
let mainMenu = document.querySelector('.main-menu');
button.addEventListener("click", menuOpenClose);

function menuOpenClose(event){
    mainMenu.classList.toggle('main-menu__btn--closed');
}