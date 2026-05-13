<?php

session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

    $usuario = $result->fetch_assoc();

    if(password_verify($senha, $usuario['senha'])){

        $_SESSION['usuario'] = $usuario['nome'];

        header("Location: ../dashboard.php");

    }else{

        echo "Senha inválida";

    }

}else{

    echo "Usuário não encontrado";

}
?>