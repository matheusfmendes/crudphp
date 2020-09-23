<?php

include "connect.php";

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

mysqli_query($link,"update tb_user set nome ='$nome', email = '$email', senha = '$senha' ");

header('location:formup.php');




?>