// BOTÃO TOPO

const topBtn = document.getElementById("topBtn");

window.addEventListener("scroll", () => {

if(window.scrollY > 300){

topBtn.style.display = "flex";

}else{

topBtn.style.display = "none";

}

});

// SCROLL TO TOP

topBtn.addEventListener("click", () => {

window.scrollTo({
top:0,
behavior:"smooth"
});

});

// ANIMAÇÃO NAVBAR

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

navbar.classList.toggle("shadow-lg", window.scrollY > 50);

});

// ANIMAÇÃO CARDS

const revealElements = document.querySelectorAll(
'.pet-card, .service-box, .stat-box, .gallery-img'
);

const revealOnScroll = () => {

const triggerBottom = window.innerHeight * 0.85;

revealElements.forEach(el => {

const elementTop = el.getBoundingClientRect().top;

if(elementTop < triggerBottom){

el.style.opacity = "1";
el.style.transform = "translateY(0)";

}

});

};

revealElements.forEach(el => {

el.style.opacity = "0";
el.style.transform = "translateY(40px)";
el.style.transition = "all 0.8s ease";

});

window.addEventListener("scroll", revealOnScroll);

revealOnScroll();

// FORMULÁRIO

function mensagem(){

alert("Mensagem enviada com sucesso!");

}

// LOADER

window.addEventListener("load", () => {

document.body.classList.add("loaded");

});