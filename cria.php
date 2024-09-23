<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $pg_atual = 'cria';
   include 'produto.php';
   include 'navbar.php';

    if (isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['valorProduto']) && isset($_POST['urlImagem']) && isset($_POST['urlCompra'])) {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valorProduto = $_POST['valorProduto'];
        $urlImagem = $_POST['urlImagem'];
        $urlCompra = $_POST['urlCompra'];

        $produtoNovo = new Produto ($nome, $descricao, $valorProduto, $urlImagem, $urlCompra);

        }else{
            header('Location: novo.php');
            exit;
        }

    session_start();
    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }
    $_SESSION['produtos'][] = serialize($produtoNovo);

    header('Location: mostra.php');
    exit;
    ?>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>