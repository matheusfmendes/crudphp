<?php 

include "connect.php";

$id = 1;
//$id = $_POST['id'];

mysqli_query ($link,"delete from tb_user WHERE id_usuario = '$id'");








?>