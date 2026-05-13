<?php

include 'conexao.php';

$nome_pet = $_POST['nome_pet'];
$raca = $_POST['raca'];
$cidade = $_POST['cidade'];
$descricao = $_POST['descricao'];
$telefone = $_POST['telefone'];

$imagem =
$_FILES['imagem']['name'];

$tmp =
$_FILES['imagem']['tmp_name'];

move_uploaded_file(
$tmp,
"../uploads/".$imagem
);

$sql = "INSERT INTO pets
(nome,raca,descricao,cidade,imagem,status_pet)
VALUES(?,?,?,?,?,?)";

$status = "desaparecido";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
"ssssss",
$nome_pet,
$raca,
$descricao,
$cidade,
$imagem,
$status
);

$stmt->execute();

header("Location: ../index.html");

?>