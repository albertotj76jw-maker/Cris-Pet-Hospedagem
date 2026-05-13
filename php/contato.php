<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO contatos
(nome,email,telefone,assunto,mensagem)
VALUES(?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
"sssss",
$nome,
$email,
$telefone,
$assunto,
$mensagem
);

if($stmt->execute()){

header("Location: ../contato.html?sucesso=1");

}else{

echo "Erro ao enviar";

}

?>