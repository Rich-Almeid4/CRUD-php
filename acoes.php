<?php
session_start();
require 'conecta.php';

if (isset($_POST['create'])) {
    $nome = mysqli_real_escape_string($conn, trim($_POST['Nome']));
    $quantidade = mysqli_real_escape_string($conn, trim($_POST['Quantidade']) );
    $categoria = mysqli_real_escape_string($conn, trim($_POST['Categoria']) );

$sql = "INSERT INTO livros (nome, quantidade, categoria_id) VALUES ('$nome', '$quantidade', '$categoria')";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)>0) {
    $_SESSION['mensagem'] = 'Produto cadastrado!';
    header('Location: index2.php');
    exit;
}else {
    $_SESSION['mensagem'] = 'Erro ao cadastrar!';
    header('Location: index2.php');
    exit;
}
}

if (isset($_POST['update'])) {
    $livros_id = mysqli_real_escape_string($conn, $_POST['livros_id']);
    $nome = mysqli_real_escape_string($conn, trim($_POST['Nome']));
    $quantidade = mysqli_real_escape_string($conn, trim($_POST['Quantidade']) );
    $categoria = mysqli_real_escape_string($conn, trim($_POST['Categoria']) );

$sql = "UPDATE livros set nome = '$nome', quantidade = '$quantidade', categoria_id = '$categoria'  WHERE id = '$livros_id'";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)>0) {
    $_SESSION['mensagem'] = 'Produto atualizado com sucesso 👍👍👍';
    header('Location: index2.php');
    exit;
}else {
    $_SESSION['mensagem'] = 'Erro ao atualizar produto';
    header('Location: index2.php');
    exit;
}
}

if (isset($_POST['delete'])){
    $livros_id = mysqli_real_escape_string($conn, $_POST['delete']);

    $sql = "DELETE from livros WHERE id = '$livros_id'";
    mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)>0) {
        $_SESSION['mensagem'] = 'Deletado com sucesso'; 
        header('Location: index2.php');
        exit;
    }else{
        $_SESSION['mensagem'] = 'Erro ao deletar'; 
        header('Location: index2.php');
        exit;
    }

}

?>