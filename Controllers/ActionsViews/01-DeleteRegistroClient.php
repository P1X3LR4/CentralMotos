<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessAdmin.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

// REALIZA A BUSCA DOS REGISTROS DE CADASTROS NO BANCO DE DADOS
$BUSCAR_CLIENTES_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM CLIENTES");

//VARIAVEL BUSCA O ID PELA URL
$ID_CLIENTE = $_GET['id'];

if (!empty($ID_CLIENTE)) {

    //DELETAR O REGISTRO DO CLIENTE DO BANCO DE DADOS 
    $BUSCAR_CLIENTES_BD = $MANIPULATION->ExecutarCommandSql("DELETE FROM CLIENTES WHERE id = '$ID_CLIENTE'");
    $_SESSION['registro-deletado-success'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/01-ViewClientes.php");
    exit();
} else {
    $_SESSION['operacao-incompleta'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/01-ViewClientes.php");
    exit();
}
