<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Painel Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark text-white">

<div class="container py-5">

<h1>
Bem-vindo,
<?php echo $_SESSION['usuario']; ?>
</h1>

<a href="sos.html" class="btn btn-success mt-4">
Cadastrar Pet SOS
</a>

<a href="php/logout.php" class="btn btn-danger mt-4">
Sair
</a>

</div>

</body>
</html>