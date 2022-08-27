<?php

session_start();

// OBJETOS DE MANIPULAÇAO 
include_once("../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

if (isset($_POST['LoginFuncionario'])) {

    // VERIFICAR SE OS CAMPOS ESTAO VAZIOS
    if (empty($_POST['cpfFuncionario']) || empty($_POST['usernameFuncionario']) || empty($_POST['senhaFuncionario'])) {

        header("Location: http://localhost/CentralMotos/Pages/04-PageLoginFuncionario.php");
        exit();
    }

    //DECLARAÇÃO DE VARIAVEIS
    $CPFFuncionario = $_POST['cpfFuncionario'];
    $UsernameFuncionario = $_POST['usernameFuncionario'];
    $SenhaFuncionario = $_POST['senhaFuncionario'];

    // BUSCAR FUNCIONARIO NO BANCO DE DADOS
    $BUSCAR_FUNCIONARIO = $MANIPULATION->ExecutarCommandSql("SELECT * FROM FUNCIONARIOS WHERE CPF = '$CPFFuncionario' AND Username = '$UsernameFuncionario' AND Senha = '$SenhaFuncionario'");
    $RESULT_BUSCA_FUNCIONARIO = $MANIPULATION->BuscarDados($BUSCAR_FUNCIONARIO);

    // VERIFICAR SE O FUNCIONARIO EXISTE NO BANCO DE DADOS
    if ($RESULT_BUSCA_FUNCIONARIO == 1) {

        // VERIFICAR NIVEL DE ACESSO
        while ($VERIFICAR_ACESSO = $MANIPULATION->PercorrerTable($BUSCAR_FUNCIONARIO)) {

            $ACESSO = $VERIFICAR_ACESSO['Acesso'];

            $_SESSION['NameFuncionario'] = $VERIFICAR_ACESSO['Nome'];

            if ($ACESSO == 1) {

                $_SESSION['admnistrador-logado'] = true;
                $_SESSION['msg-admnistrador'] = true;
                header('Location: http://localhost/CentralMotos/Pages/Views/02-ViewFuncionarios.php');
                exit();
            } else {

                $_SESSION['funcionario-logado'] = true;
                $_SESSION['msg-funcionario'] = true;
                header('Location: http://localhost/CentralMotos/Pages/Views/03-ViewAgendamentos.php');
                exit();
            }
        }
    } else {

        $_SESSION['msg-funcionario-nao-encontrado'] = true;
        header('Location: http://localhost/CentralMotos/Pages/04-PageLoginFuncionario.php');
        exit();
    }
}
