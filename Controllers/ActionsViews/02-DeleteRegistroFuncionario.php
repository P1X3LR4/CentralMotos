<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessAdmin.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

// REALIZA A BUSCA DOS REGISTROS DE CADASTROS NO BANCO DE DADOS
$BUSCAR_FUNCIONARIOS_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM FUNCIONARIOS");

//VARIAVEL BUSCA O ID PELA URL
$ID_FUNCIONARIOS = $_GET['id'];

if (!empty($ID_FUNCIONARIOS)) {

    //DELETAR O REGISTRO DO FUNCIONARIOS DO BANCO DE DADOS 
    $BUSCAR_FUNCIONARIOS_BD = $MANIPULATION->ExecutarCommandSql("DELETE FROM FUNCIONARIOS WHERE id = '$ID_FUNCIONARIOS'");
    $_SESSION['registro-deletado-success'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/02-ViewFuncionarios.php");
    exit();
} else {
    $_SESSION['operacao-incompleta'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/02-ViewFuncionarios.php");
    exit();
}
