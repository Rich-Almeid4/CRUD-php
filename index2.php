<?php
session_start();
require 'conecta.php';

?>
<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Completo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
    </head>
<header>
<?php include('navbar.php'); ?>

</header>
<body>
    <div class="container mt-4">
<div class="row">    
<?php include('mensagem.php');?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
<h4>Produtos

<a href="create.php" class="btn btn-primary float-end">Add</a>

</h4>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
        <tbody>
            <?php
            $sql = 'SELECT * FROM livros';
            $livros = mysqli_query($conn, $sql);
            if (mysqli_num_rows($livros) > 0) {
                foreach($livros as $livros) {
            ?>
            <tr>
            <td><?=$livros['nome']?></td>
            <td><?=$livros['quantidade']?></td>
            <td><?=$livros['categoria_id']?></td>
            <td>
            <a href="view.php?id=<?=$livros['id'];?>" class="btn btn-secondary btn-sm"><span class="bi bi-eye">&nbsp; Visualizar</span></a>
            <a href="edit.php?id=<?=$livros['id'];?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill">&nbsp;Editar</span></a>
            <form action="acoes.php" method="POST" class="d-inline">
                  <button onclick="return confirm('Tem certeza que deseja excluir esse item?')"type="submit" name="delete" value="<?=$livros['id'];?>" class="btn btn-danger btn-nm"><span class="bi-trash">&nbsp;Excluir</span></button>
            </form>
            </td>
            </tr>
            <?php
                }
            }else{
                    echo '<h5><center>Nenhum produto cadastrado.</center></h5>';
                }?>
            </tbody>
    </thead>
</table>
</div>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>