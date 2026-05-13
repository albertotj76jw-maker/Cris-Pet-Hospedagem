<?php

include 'conexao.php';

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$descricao = $_POST['descricao'];
$cidade = $_POST['cidade'];

$imagem = $_FILES['imagem']['name'];
$tmp = $_FILES['imagem']['tmp_name'];

move_uploaded_file($tmp, "../uploads/" . $imagem);

$sql = "INSERT INTO pets
(nome,raca,descricao,cidade,imagem,status_pet)
VALUES(?,?,?,?,?,?)";

$status = "desaparecido";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
"ssssss",
$nome,
$raca,
$descricao,
$cidade,
$imagem,
$status
);

$stmt->execute();

header("Location: ../index.html");
?>