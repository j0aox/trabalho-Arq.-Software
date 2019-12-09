<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cadastrar-cliete.php">Clientes</a>
                            <a class="dropdown-item" href="#">Carros</a>
                        </div>
                    </li>
            </div>
        </div>
        <div>
            <?php if (isset($_SESSION['nome'])): ?>
            Bem Vindo: <?php echo $_SESSION['nome']; ?>
            <?php endif ?>
            <button class="btn btn-outline-success my-2 my-sm-0"><a href="index.php?sair='1'">Sair</a></button>
        </div>
</nav>