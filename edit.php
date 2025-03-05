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
  </head>
  <body>
    <?php include('navbar.php'); ?>
   <div class="container mt-5">
    <div class="row">
        <div class="md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Adicionar Livro
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
<?php
                if (isset($_GET['id'])) {
                    $livros_id = mysqli_real_escape_string($conn, $_GET['id']);

                    $sql = "SELECT * FROM `livros` WHERE id='$livros_id'";
                    $query = mysqli_query($conn, $sql);

                    
                    if (mysqli_num_rows($query) > 0) {
                        $livros = mysqli_fetch_array($query);
?>
                    <form action="acoes.php" method="POST">
                        <input type="hidden" name="livros_id" value="<?=$livros['id'];?>">
                        <div class="mb-3">
                            <label for="">Nome</label>
                            <input type="text" name="Nome" class="form-control" value="<?=$livros['nome']?>">
                           
                            <label for="">Quantidade</label>
                            <input type="text" name="Quantidade" class="form-control" value="<?=$livros['quantidade']?>">

                            <label for="">Categoria</label>
                            <input type="text" name="Categoria" class="form-control" value="<?=$livros['categoria_id']?>">
                        </div>
                    <div class="mb-3">
                        <button type="submit" name="update"class="btn btn-primary">Salvar</button>
                    </div>
                    </form>
                    <?php
                }else{
                    echo "<h5>Produto não cadastrado!</h5>";
                }
                }
                    ?>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>