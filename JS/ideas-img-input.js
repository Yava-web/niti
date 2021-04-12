let inp = document.getElementById('idea-img');
let lbl = document.querySelector('.input-file-text');
let clr =document.querySelector('.clr');
let countFiles = 0;
inp.onchange = function() {    
    countFiles++;
    if (inp.value != '') {
        lbl.textContent = 'Выбрано файлов: ' + countFiles;
        clr.style.display = 'block';
    } else {
        lbl.textContent = 'Выберите файл:'; 
        countFiles = 0;  
    } 
}

clr.onclick = function(event) {
    event.preventDefault();
    inp.value = '';
    lbl.textContent = 'Выберите файл:'; 
    clr.style.display = 'none';
    countFiles = 0;
}

