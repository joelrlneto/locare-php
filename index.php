<?php if(isset($_GET['pagina'])) $pagina = $_GET['pagina']; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Locadora</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Locadora</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/locadora?pagina=app/paginas/locacoes/listagem.php"">Locações</a>  
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Cadastros
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/carros/listagem.php">Carros</a>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/clientes/listagem.php">Clientes</a>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/funcionarios/listagem.php">Funcionários</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/cidades/listagem.php">Cidades</a>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/bairros/listagem.php">Bairros</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/marcas/listagem.php">Marcas</a>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/cores/listagem.php">Cores</a>
            <a class="dropdown-item" href="/locadora?pagina=app/paginas/estados/listagem.php">Estados de conservação</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <?php if (isset($pagina)) include $pagina; ?>
  </div>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>