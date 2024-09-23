<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CC Compras Casale</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        <?php if($pg_atual == 'novo'): ?>
          <a class="nav-link active" aria-current="page" href="novo.php">Adicionar Produtos</a>
        <?php else: ?>
          <a class="nav-link" href="novo.php">Adicionar Produtos</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostra'): ?>
          <a class="nav-link active" aria-current="page" href="mostra.php">Mostrar Produtos</a>
        <?php else: ?>
          <a class="nav-link" href="mostra.php">Mostrar Produtos</a>
        <?php endif; ?>
        </li>
        <li class="collapse navbar-collapse" >
          <form action="sair.php">
              <input type="submit" value="Encerrar Sessão">
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

