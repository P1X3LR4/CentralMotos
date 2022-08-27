<nav class="navbar navbar-expand-md fixed-top bg-dark text-center">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/CentralMotos/Pages/01-PageInitial.php"><b class="p-2 border-orange text-orange"> Central Motos </b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CentralMotos/Pages/01-PageInitial.php">HOME</a>
                </li>
                <li class="nav-item mx-2 mb-2 my-md-0">
                    <a class="nav-link" href="http://localhost/CentralMotos/Pages/01-PageInitial.php#parallax-about">SOBRE</a>
                </li>
                <li class="nav-item mx-2 mb-2 my-md-0">
                    <a class="nav-link" href="http://localhost/CentralMotos/Pages/01-PageInitial.php#LinkInternalServices">SERVIÇOS</a>
                </li>

                <!-------- SUMIR COM A OPCAO DE CADASTRO E LOGIN QUANDO LOGADO ---------->
                <?php if (!isset($_SESSION['client-logado']) && !isset($_SESSION['admnistrador-logado']) && !isset($_SESSION['funcionario-logado'])) : ?>

                    <li class="nav-item mx-2 mb-2 my-md-0">
                        <a class="nav-link" href="http://localhost/CentralMotos/Pages/02-PageCadastroClient.php">CADASTRE-SE</a>
                    </li>
                    <li class="nav-item mx-2 mb-2 my-md-0">
                        <a class="nav-link" href="http://localhost/CentralMotos/Pages/03-PageLoginClient.php">ENTRAR</a>
                    </li>

                <?php endif; ?>
            </ul>

        </div>

        <!-------- SUMIR COM A OPCAO DE CADASTRO E LOGIN QUANDO LOGADO ---------->
        <?php if (isset($_SESSION['client-logado']) || isset($_SESSION['admnistrador-logado']) || isset($_SESSION['funcionario-logado'])) : ?>

            <div class="btn-group dropleft">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user mr-2"></i>
                    <?php if (isset($_SESSION['funcionario-logado']) || isset($_SESSION['admnistrador-logado'])) {
                        echo $_SESSION['NameFuncionario'];
                    } ?>
                    <?php if (isset($_SESSION['client-logado'])) {
                        echo $_SESSION['NomeClient'];
                    } ?>
                </button>
                <div class="dropdown-menu">

                    <!-------- OPÇAO EXCLUSIVA DO ADMINISTRADOR ------------>
                    <?php if (isset($_SESSION['client-logado']) || isset($_SESSION['admnistrador-logado']) || isset($_SESSION['funcionario-logado'])) : ?>

                        <a class="dropdown-item" href="http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php">Agendar Locação</a>

                        <?php if (!isset($_SESSION['admnistrador-logado']) && !isset($_SESSION['funcionario-logado'])) : ?>
                            <a href="../Controllers/ActionsViews/DeleteConta.php?id=<?php echo $_SESSION['IdCliente']; ?>" class="dropdown-item text-danger">Apagar Conta</a>

                        <?php endif; ?>

                    <?php endif; ?>

                    <!-------- OPÇAO EXCLUSIVA DO ADMINISTRADOR ------------>
                    <?php if (isset($_SESSION['admnistrador-logado'])) : ?>

                        <a class="dropdown-item" href="http://localhost/CentralMotos/Pages/Views/01-ViewClientes.php">Clientes Cadastrados</a>
                        <a class="dropdown-item" href="http://localhost/CentralMotos/Pages/Views/02-ViewFuncionarios.php">Funcionários</a>
                        <a class="dropdown-item" href="http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php">Cadastrar Funcionário</a>


                    <?php endif; ?>
                    <!------------------------------------------------------->

                    <?php if (isset($_SESSION['admnistrador-logado']) || isset($_SESSION['funcionario-logado'])) : ?>
                        <a class="dropdown-item" href="http://localhost/CentralMotos/Pages/Views/03-ViewAgendamentos.php">Agendamentos</a>

                    <?php endif; ?>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://localhost/CentralMotos/Controllers/Logout.php">Sair</a>
                </div>
            </div>


        <?php endif; ?>

    </div>
</nav>