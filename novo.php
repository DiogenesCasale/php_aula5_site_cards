
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Novo Produto</title>
</head>
<body>
    <?php
    $pg_atual = 'novo';   
    require_once 'navbar.php';
    ?>

<div class="container text-center">
<h1>Cadastrar Novo Produto</h1>
<form action="cria.php" method="POST">
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Nome Do Produto:</label>
    <input type="text" id="nome" name="nome" class="form-control"> <br><br>
    </div>
    </div>
    <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Descrição Do Produto:</label>
    <input type="text" maxlength="25" id="descricao" name="descricao" class="form-control"> <br><br>
    </div>
    </div>
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">Valor Do Produto:</label>
    <input type="number_format(float)" id="valorProduto" name="valorProduto" class="form-control"> <br><br>
    </div>
    </div>
  <div class="row">
    <div class="col">
    <label for="nome" class="form-label">URL Da Imagem Do Produto:</label>
    <input type="text" id="urlImagem" name="urlImagem" class="form-control"> <br><br>
    </div>
    </div>
    <div class="row">
    <div class="col">
    <label for="nome" class="form-label">URL Para Compra Do Produto:</label>
    <input type="text" id="urlCompra" name="urlCompra" class="form-control"> <br><br>
    <input type="submit" value="Enviar" class="btn btn-primary">
    </div>
    </div>
</div>
    
</body>
</html>
