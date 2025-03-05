<?php 
define('HOST', 'localhost'); 
define('USUARIO', 'root'); 
define('SENHA', ''); 
define('DB', 'biblioteca'); 

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
 
?>