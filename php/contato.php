<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO contatos
(nome,email,telefone,assunto,mensagem)

VALUES

('$nome','$email','$telefone','$assunto','$mensagem')";

mysqli_query($conn,$sql);

header("Location: ../contato.html");

?>