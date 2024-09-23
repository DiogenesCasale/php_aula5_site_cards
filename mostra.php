<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
    $pg_atual = 'mostra';
    include 'navbar.php';

    session_start();

    include 'produto.php';


    if (isset($_SESSION['produtos']) && !empty($_SESSION['produtos'])) {
        ?> <div class="row justify-content-center"> <?php
        foreach ($_SESSION['produtos'] as $produtoSerializado) {
            $produto = unserialize($produtoSerializado);
            echo $produto->exibirInformacoes();
        }?>
        </div> <?php
    } else {
        echo "Erro ao obter o produto da sessão.";
    }
?>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>