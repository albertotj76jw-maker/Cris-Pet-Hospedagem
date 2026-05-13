<?php

include 'conexao.php';

$sql = "SELECT * FROM pets ORDER BY id DESC";

$result = $conn->query($sql);

while($pet = $result->fetch_assoc()){

echo '

<div class="col-md-4">

<div class="card pet-card">

<img src="uploads/'.$pet['imagem'].'">

<div class="card-body">

<h5>'.$pet['nome'].'</h5>

<p>'.$pet['descricao'].'</p>

</div>

</div>

</div>

';

}
?>