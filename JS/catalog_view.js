let bigView = document.querySelector('.big-view');
let smallView = document.querySelector('.small-view');
let catCol = document.querySelectorAll('.catalog .col-md-4');
let catItem = document.querySelectorAll('.catalog-item');
let catItemDescr = document.querySelectorAll('.item-desription span');
let pic1 = document.querySelectorAll('.catalog-item img');

bigView.onclick = function() {
    for(let i=0; i < catCol.length; i++) {
        catCol[i].classList.remove('col-md-4');
        catCol[i].classList.add('col-md-3');
        catItem[i].style.height = '350px';
        pic1[i].style.maxHeight = '226px';
    }
    for(let i=0; i < catItemDescr.length; i++){
        catItemDescr[i].style.top = '50px'; 
        catItemDescr[i].style.right = '5px';       
    }
}
smallView.onclick = function() {
    for(let i=0; i < catCol.length; i++) {
        catCol[i].classList.remove('col-md-3');
        catCol[i].classList.add('col-md-4');
        catItem[i].style.height = '';
        pic1[i].style.maxHeight = '';
    }
    for(let i=0; i < catItemDescr.length; i++){
        catItemDescr[i].style.top = ''; 
        catItemDescr[i].style.right = '';
    }
}

//max-height: 226px;