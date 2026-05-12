<?php

session_start();

include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
WHERE email='$email'
AND senha='$senha'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$_SESSION['admin']=$email;

header("Location: ../index.html");

}else{

echo "Login inválido";

}

?>