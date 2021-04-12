let elements = document.querySelectorAll('.main-menu a');
/* Активная страница */
for (let element of elements) {    
    let location = window.location.href;
    let link = element.href;
    if (location == link) {
        element.classList.add('active');        
    }
}

