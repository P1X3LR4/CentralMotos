<!-- ******************** PAGINA HOME ******************************** -->
<!-- APRESENTAÇAO CLIENTE -->
<?php if (isset($_SESSION['msg-client-bem-vindo'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                imageUrl: 'http://localhost/CentralMotos/Components/Images/CentralMotos.svg',
                imageWidth: 190,
                imageHeight: 200,
                title: "Seja Bem Vindo",
                html: "<strong class = 'text-orange'> <?php echo $_SESSION['NomeClient']; ?> </strong> <br><br> Agora você pode a seu agendamento para realizar sua Locação",
                showConfirmButton: true,
                timer: 15000,
            });
        });
    </script>
<?php unset($_SESSION['msg-client-bem-vindo']);
endif; ?>

<!-- AREA RESTRITA -->
<?php if (isset($_SESSION['msg-area-restrita'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'warning',
                title: "Área Restrita para Funcionários !!",
                text: "Você NÃO possui permissão de Acesso",
                timer: 5000,
            });
        });
    </script>
<?php unset($_SESSION['msg-area-restrita']);
endif; ?>

<!-- NECESSARIO LOGIN -->
<?php if (isset($_SESSION['msg-realizar-login'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'warning',
                title: "Realize Login",
                text: "Realize login para ter acesso",
                timer: 5000,
            });
        });
    </script>
<?php unset($_SESSION['msg-realizar-login']);
endif; ?>

<!-- ******************** PAGINA CADASTRO CLIENTE && FUNCIONARIO ************************ -->
<!-- CADASTRADO COM SUCESSO -->
<?php if (isset($_SESSION['msg-cadastroFuncionario-sucess']) || isset($_SESSION['msg-cadastroClient-sucess'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'success',
                title: "Cadastro Realizado com Sucesso",
                showConfirmButton: true,
                confirmButtonColor: '#d84900',
                timer: 20000,
            });
        });
    </script>
<?php
    unset($_SESSION['msg-cadastroFuncionario-sucess']);
    unset($_SESSION['msg-cadastroClient-sucess']);
endif; ?>

<!-- CPF EXISTENTE -->
<?php if (isset($_SESSION['msg-cpf-existente'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                title: "CPF",
                text: "O CPF Informado já está em Uso",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-cpf-existente']);
endif; ?>

<!-- CPF INCORRETO -->
<?php if (isset($_SESSION['msg-cpf-incorreto'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'warning',
                title: "CPF",
                text: "Digite o CPF corretamente",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-cpf-incorreto']);
endif; ?>

<!-- SENHA && CONFIRMAR SENHA -->
<?php if (isset($_SESSION['msg-senha-confirm'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'warning',
                title: "Senha",
                text: "Senha e Comfirmar Senha deve ser Iguais",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-senha-confirm']);
endif; ?>

<!-- PREENCHER TODOS OS CAMPOS -->
<?php if (isset($_SESSION['msg-preencher-campos'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'info',
                title: "Preencha Todos os Campos",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-preencher-campos']);
endif; ?>


<!-- ******************** PAGINA CADASTRO CLIENTE && FUNCIONARIO ************************ -->
<!-- CLIENTE NAO ENCONTRADO -->
<?php if (isset($_SESSION['msg-client-nao-encontrado']) || isset($_SESSION['msg-funcionario-nao-encontrado'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'error',
                title: "Dados Inválidos",
                timer: 8000,
            });
        });
    </script>
<?php
    unset($_SESSION['msg-client-nao-encontrado']);
    unset($_SESSION['msg-funcionario-nao-encontrado']);
endif; ?>


<!-- ******************** BOAS VINDAS ADMINISTRADOR && FUNCIONARIO ************************ -->
<!-- ADMINISTRADOR && FUNCIONARIO -->
<?php if (isset($_SESSION['msg-admnistrador']) || isset($_SESSION['msg-funcionario'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                imageUrl: 'http://localhost/CentralMotos/Components/Images/CentralMotos.svg',
                imageWidth: 190,
                imageHeight: 200,
                title: "Seja Bem Vindo <?php echo $_SESSION['NameFuncionario']; ?>",
                text: "Agora você pode realizar o agendamento para realizar Locações",
                timer: 8000,
            });
        });
    </script>
<?php
    unset($_SESSION['msg-admnistrador']);
    unset($_SESSION['msg-funcionario']);
endif; ?>

<!-- CLIENTE -->
<?php if (isset($_SESSION['msg-admnistrador']) || isset($_SESSION['msg-funcionario'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                imageUrl: 'http://localhost/CentralMotos/Components/Images/CentralMotos.svg',
                imageWidth: 190,
                imageHeight: 200,
                title: "Seja Bem Vindo <?php echo $_SESSION['NameFuncionario']; ?>",
                text: "Agora você pode realizar o agendamento para realizar Locações",
                timer: 8000,
            });
        });
    </script>
<?php
    unset($_SESSION['msg-admnistrador']);
    unset($_SESSION['msg-funcionario']);
endif; ?>

<?php if (isset($_SESSION['registro-deletado-success'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'success',
                title: "Registro Apagado com Sucesso",
                showConfirmButton: true,
                timer: 4000,
            });
        });
    </script>
<?php
    unset($_SESSION['registro-deletado-success']);
endif; ?>

<?php if (isset($_SESSION['operacao-incompleta'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'question',
                title: "Operação Incompleta",
                showConfirmButton: true,
                timer: 4000,
            });
        });
    </script>
<?php
    unset($_SESSION['operacao-incompleta']);
endif; ?>

<!-- DATA INVALIDA -->
<?php if (isset($_SESSION['msg-data-ivalida'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'error',
                title: "Data Inválida",
                text: "A data deve ser maior que a atual",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-data-ivalida']);
endif; ?>

<!-- HORARIO INVALIDA -->
<?php if (isset($_SESSION['msg-horario-invalido'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'error',
                title: "Horário Inválido",
                text: "Esxolha um horário em que a empresa esteja aberta",
                timer: 8000,
            });
        });
    </script>
<?php unset($_SESSION['msg-horario-invalido']);
endif; ?>

<!-- CADASTRADO COM SUCESSO -->
<?php if (isset($_SESSION['msg-agend-sucess'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'success',
                title: "Agendamento Realizado",
                showConfirmButton: true,
                timer: 20000,
            });
        });
    </script>
<?php unset($_SESSION['msg-agend-sucess']);
endif; ?>

<!-- FUNCIONARIO ALTERADO COM SUCESSO -->
<?php if (isset($_SESSION['msg-funcionario-alterado-sucess'])) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                icon: 'success',
                title: "Dados do Funcionário Alterados",
                showConfirmButton: true,
                timer: 20000,
            });
        });
    </script>
<?php unset($_SESSION['msg-funcionario-alterado-sucess']);
endif; ?>