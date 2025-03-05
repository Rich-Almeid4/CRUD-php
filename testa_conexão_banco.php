<?php
require 'conecta.php';

if ($conn) {
    echo "Conexão bem-sucedida!";
} else {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>