const cepInput = document.getElementById("cep");

if(cepInput){

cepInput.addEventListener("blur", async () => {

const cep = cepInput.value.replace(/\D/g,'');

if(cep.length !== 8){
    alert("CEP inválido");
    return;
}

try{

const response = await fetch(
`https://viacep.com.br/ws/${cep}/json/`
);

const dados = await response.json();

document.getElementById("cidade").value =
dados.localidade || "";

}catch(error){

alert("Erro ao buscar CEP");

}

});

}