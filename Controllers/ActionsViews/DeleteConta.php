<?php
session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessLogged.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

// REALIZA A BUSCA DOS REGISTROS DE CADASTROS NO BANCO DE DADOS
$BUSCAR_CLIENTE_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM CLIENTES");

//VARIAVEL BUSCA O ID PELA URL
$ID_CLIENTES = $_GET['id'];

if (!empty($ID_CLIENTES)) {

    //DELETAR O REGISTRO DO CLIENTE DO BANCO DE DADOS 
    $BUSCAR_CLIENTE_BD = $MANIPULATION->ExecutarCommandSql("DELETE FROM CLIENTES WHERE id = '$ID_CLIENTES'");
    $_SESSION['conta-deletada'] = true;
    header("Location: http://localhost/CentralMotos/Controllers/Logout.php");
    exit();
} else {
    $_SESSION['operacao-incompleta'] = true;
    header("Location: http://localhost/CentralMotos/Pages/01-PageInitial.php");
    exit();
}
