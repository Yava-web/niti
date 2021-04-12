let check = document.querySelector('.custom-check');
let sel = document.getElementById('select_del');
check.onchange = function() {
    
    sel.toggleAttribute('disabled');
}