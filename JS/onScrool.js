let upBut = document.querySelector('.up-button');
let header = document.querySelector('.header');
let main = document.querySelector('main');
let logoClass = document.getElementById('logoid');
let menuClass = document.getElementById('mainMenuid');
let logoImg = document.querySelector('.logo img');
let headerFixed = document.querySelector('.header-fixed');


    window.onscroll = function () {
        if (window.pageYOffset > 300) {
            upBut.classList.add('shown');
            upBut.disabled = false; 
        } else {
            upBut.disabled = true;
            upBut.classList.remove('shown');
        }
        if (window.screen.width > 1280) {
        if (window.pageYOffset > 300) { 
            header.classList.add('header-fixed');
            main.style.paddingTop = '128.81px';
            logoImg.src = '../img/logo_medium.png';
            menuGridFixed();                   
        } else {            
            header.classList.remove('header-fixed');
            main.style.paddingTop = '20px';
            logoImg.src = '../img/logo.png';
            menuGrid();
        }
        }
        if (window.pageYOffset > 0) {
            menuBut.style.top = '0';
        } else {
            menuBut.style.top = '30px';
        }
    
    }
upBut.onclick = function () {
        window.scrollTo(0, 0);
}

function menuGridFixed () {
    logoClass.classList.remove('col-xl-4','col-lg-3');            
    logoClass.classList.add('col-lg-2', 'offset-lg-2');
    menuClass.classList.remove('col-xl-8','col-lg-9');            
    menuClass.classList.add('col-lg-6');
}
function menuGrid () {
    logoClass.classList.remove('col-lg-2', 'offset-lg-2');
    logoClass.classList.add('col-xl-4','col-lg-3');            
    menuClass.classList.remove('col-lg-6');
    menuClass.classList.add('col-xl-8','col-lg-9');    
}