let yak1 = document.querySelector('.scroll-btn.one');
let yak2 = document.querySelector('.scroll-btn.two');
let reviewsList = document.getElementById('reviews-list');
let reviewForm = document.getElementById('review-form');
let sbm = document.getElementById('sbm');

yak1.onclick = function() {    
    reviewsList.scrollIntoView({block: "center", inline: "center"});    
}

yak2.onclick = function() {    
    reviewForm.scrollIntoView({block: "center", inline: "center"});
}

// Char-counter
let textCounter = document.querySelector('.text-counter');
let charCounter = document.querySelector('.char-counter');
let reviewArea = document.getElementById('review_area');
let sbmBut = document.getElementById('sbm');

reviewArea.oninput = function() {
    charCounter.textContent = reviewArea.value.length;
    if (reviewArea.value.length > 200) {
        textCounter.classList.add('disabled');
        sbmBut.disabled = true;
    } else {
        textCounter.classList.remove('disabled');
        sbmBut.disabled = false;
    }
}


