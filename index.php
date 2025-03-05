<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <title>Produtos</title>
    <script src="jquery-3.7.0.min.js"></script>
    <script>  
      $(document).ready(function() {
        $("button").click(function() {
            // Pegando os valores dos inputs nome e senha
            var usernome = $("#nome").val();
            var password = $("#pass").val();
            $.ajax({
                url: "usuario.php",
                type: "POST",
                // Enviando os dados via POST
                data: "usernome="+usernome+"&password="+password,
                dataType: "html"
            }).done(function(resposta) {
                $("p").html(resposta);
            }).fail(function(jqXHR, textStatus) {
                console.log("Request failed:" + textStatus);
            })
        });
    });
</script>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-4">
    <div class="col-md-3">
    <input autocomplete="off" id="nome" type="text" class="form-control" placeholder="Usuário">
    <br></div>
    <div class="col-3"><input class="form-control"id="pass" type="password" placeholder="Senha"></div><br><button class="btn btn-outline-primary">entrar</button>
    </div>
    <p></p>
</div>
</body>
</html>