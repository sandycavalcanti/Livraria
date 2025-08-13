<!-- navbar.php -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
        <img src="../img/icon.png" alt="Bootstrap" width="40">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="livro_cad.php">Cadastrar livro</a></li>
              <li><a class="dropdown-item" href="editora_cad.php">Cadastrar editora</a></li>
              <li><a class="dropdown-item" href="categoria_cad.php">Cadastrar categoria</a></li>
              <li><a class="dropdown-item" href="autor_cad.php">Cadastrar autor</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Checar listas
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lista.php?tabela=livro">Lista de livros</a></li>
            <li><a class="dropdown-item" href="lista.php?tabela=editora">Lista de editoras</a></li>
            <li><a class="dropdown-item" href="lista.php?tabela=categoria">Lista de categorias</a></li>
            <li><a class="dropdown-item" href="lista.php?tabela=autor">Lista de autores</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
