<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crispet";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
die("Erro conexão");
}

?>