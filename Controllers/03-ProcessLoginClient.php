<?php

session_start();

// OBJETOS DE MANIPULAÇAO 
include_once("../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

if (isset($_POST['LoginClient'])) {

    // VERIFICAR SE OS CAMPOS ESTAO VAZIOS
    if (empty($_POST['cpfClient']) || empty($_POST['senhaClient'])) {

        header("Location: http://localhost/CentralMotos/Pages/03-PageLoginClient.php");
        exit();
    }

    //DECLARAÇÃO DE VARIAVEIS
    $CPFClient = $_POST['cpfClient'];
    $SenhaClient = $_POST['senhaClient'];

    // BUSCAR CLIENT NO BANCO DE DADOS
    $BUSCAR_CLIENT = $MANIPULATION->ExecutarCommandSql("SELECT * FROM CLIENTES WHERE CPF = '$CPFClient' AND Senha = '$SenhaClient'");
    $RESULT_BUSCA_CLIENT = $MANIPULATION->BuscarDados($BUSCAR_CLIENT);

    // VERIFICAR SE O CLIENTE EXISTE NO BANCO DE DADOS
    if ($RESULT_BUSCA_CLIENT == 1) {

        // VERIFICAR NIVEL DE ACESSO
        while ($GUARDAR_NOME_CLIENT = $MANIPULATION->PercorrerTable($BUSCAR_CLIENT)) {

            $_SESSION['NomeClient'] = $GUARDAR_NOME_CLIENT['Nome'];
            $_SESSION['TelefoneClient'] = $GUARDAR_NOME_CLIENT['Telefone'];
            $_SESSION['IdCliente'] = $GUARDAR_NOME_CLIENT['id'];
        }

        $_SESSION['client-logado'] = true;
        $_SESSION['msg-client-bem-vindo'] = true;
        header('Location: http://localhost/CentralMotos/Pages/01-PageInitial.php');
        exit();
    } else {

        $_SESSION['msg-client-nao-encontrado'] = true;
        header('Location: http://localhost/CentralMotos/Pages/03-PageLoginClient.php');
        exit();
    }
}
