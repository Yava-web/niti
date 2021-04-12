let closeButMenu = document.querySelector('.mobile-nav .close');
let mobMenu = document.querySelector('.mobile-nav ul');
let menuBut = document.querySelector('.mobile-nav .menu');
let darkbg = document.querySelector('.dark-bg');

menuBut.onclick = function() {
    mobMenu.style.display = 'block';
    closeButMenu.style.display = 'block';
    darkbg.style.display = 'block';
    menuBut.style.display = 'none';
}
closeButMenu.onclick = function() {
    mobMenu.style.display = 'none';
    closeButMenu.style.display = 'none';
    menuBut.style.display = 'block';
    darkbg.style.display = 'none';
}
darkbg.onclick = function() {
    mobMenu.style.display = 'none';
    closeButMenu.style.display = 'none';
    menuBut.style.display = 'block';
    darkbg.style.display = 'none';
}
