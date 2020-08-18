<?php
include "connect.php";


$consulta = mysqli_query($link,"select * from tb_user");

while($linha = mysqli_fetch_array($consulta)){

    $id = $linha ['id_usuario'];
    $nome = $linha ['nome'];
    $email = $linha ['email'];
    $senha = $linha ['senha'];

    echo "id: $id<br>";
    echo "nome: $nome<br>";
    echo "email: $email<br>";
    echo "senha: $senha<br>";
}





?>