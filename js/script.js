// DARK MODE

const darkBtn =
document.getElementById("darkModeBtn");

if(localStorage.getItem("theme") === "dark"){

document.body.classList.add("dark-mode");

}

if(darkBtn){

darkBtn.addEventListener("click", () => {

document.body.classList.toggle("dark-mode");

if(document.body.classList.contains("dark-mode")){

localStorage.setItem("theme","dark");

}else{

localStorage.setItem("theme","light");

}

});

}

// BOTÃO TOPO

const topBtn =
document.getElementById("topBtn");

window.addEventListener("scroll", () => {

if(topBtn){

topBtn.style.display =
window.scrollY > 300
? "flex"
: "none";

}

});

if(topBtn){

topBtn.addEventListener("click", () => {

window.scrollTo({

top:0,
behavior:"smooth"

});

});

}

// NAVBAR

const navbar =
document.querySelector(".navbar");

window.addEventListener("scroll", () => {

if(navbar){

navbar.classList.toggle(
"shadow-lg",
window.scrollY > 50
);

}

});

// REVEAL

const reveal =
document.querySelectorAll(
'.pet-card,.service-box,.stat-box,.gallery-img'
);

const revealScroll = () => {

const trigger =
window.innerHeight * 0.85;

reveal.forEach(el => {

const top =
el.getBoundingClientRect().top;

if(top < trigger){

el.classList.add("active");

}

});

};

window.addEventListener("scroll", revealScroll);

revealScroll();

// LOADER

window.addEventListener("load", () => {

const loader =
document.getElementById("loader");

if(loader){

setTimeout(() => {

loader.style.opacity = "0";

setTimeout(() => {

loader.style.display = "none";

},600);

},1200);

}

});

// VIACEP

const cepInput =
document.getElementById("cep");

if(cepInput){

cepInput.addEventListener("blur", async () => {

const cep =
cepInput.value.replace(/\D/g,'');

if(cep.length !== 8){

alert("CEP inválido");

return;

}

try{

const response =
await fetch(`https://viacep.com.br/ws/${cep}/json/`);

const dados =
await response.json();

document.getElementById("cidade").value =
dados.localidade || "";

}catch{

alert("Erro ao buscar CEP");

}

});

}

// TOAST

const toastEl =
document.getElementById("liveToast");

if(toastEl){

const toast =
new bootstrap.Toast(toastEl);

setTimeout(() => {

toast.show();

},2500);

}

