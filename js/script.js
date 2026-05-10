const topBtn = document.getElementById("topBtn");

window.addEventListener("scroll", () => {

if(window.scrollY > 300){
topBtn.style.display = "block";
}else{
topBtn.style.display = "none";
}

});

topBtn.addEventListener("click", () => {

window.scrollTo({
top:0,
behavior:"smooth"
});

});

// animação cards

const cards = document.querySelectorAll('.service-box');

cards.forEach(card => {

card.addEventListener('mouseenter', () => {

card.style.transform = 'translateY(-10px)';

});

});