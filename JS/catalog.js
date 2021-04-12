// Like button
let likeBut = document.querySelectorAll('.like');
let items = document.querySelectorAll('.catalog-item');

for (let i = 0; i < likeBut.length; i++){
  likeBut[i].onclick = function() {
    likeBut[i].classList.toggle('like-on');    
    if (likeBut[i].className === 'like like-on') {      
      items[i].style.boxShadow = '0 0 30px 5px rgb(70, 69, 69)';
      items[i].style.borderColor = 'red';
    } else {
      items[i].style.boxShadow = '0 0 20px 0 rgb(70, 69, 69)';
      items[i].style.borderColor = '#c7c7c7';
    } 
  }
}

// Zoom button
let zoomBut = document.querySelectorAll('.catalog-item .zoom');
let closeBut = document.querySelector('.modal-photo .close-but')
let pic = document.querySelectorAll('.catalog-item img');
let darkBg = document.querySelector('.dark-bg');
let modalPhotoImg = document.querySelector('.modal-photo img'); 
let modalPhoto = document.querySelector('.modal-photo'); 

for (let i = 0; i < zoomBut.length; i++){
  zoomBut[i].onclick = function() {
    modalPhotoImg.src = pic[i].src;
    modalPhoto.style.display = 'block';
    darkBg.style.display = 'block';
  }
}

closeBut.onclick = function() {
  modalPhoto.style.display = 'none';
  darkBg.style.display = 'none';
}
darkBg.onclick = function() {
  mobMenu.style.display = 'none';
  closeButMenu.style.display = 'none';
  menuBut.style.display = 'block';
  darkBg.style.display = 'none';
  modalPhoto.style.display = 'none';
  darkBg.style.display = 'none';
}

    




