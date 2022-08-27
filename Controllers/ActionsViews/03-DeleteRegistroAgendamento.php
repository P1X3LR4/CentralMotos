<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessAdmin.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

// REALIZA A BUSCA DOS REGISTROS DE CADASTROS NO BANCO DE DADOS
$BUSCAR_AGENDAMENTOS_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM AGENDAMENTOS");

//VARIAVEL BUSCA O ID PELA URL
$ID_AGENDAMENTOS = $_GET['id'];

if (!empty($ID_AGENDAMENTOS)) {

    //DELETAR O REGISTRO DO CLIENTE DO BANCO DE DADOS 
    $BUSCAR_AGENDAMENTOS_BD = $MANIPULATION->ExecutarCommandSql("DELETE FROM AGENDAMENTOS WHERE id = '$ID_AGENDAMENTOS'");
    $_SESSION['registro-deletado-success'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/03-ViewAgendamentos.php");
    exit();
} else {
    $_SESSION['operacao-incompleta'] = true;
    header("Location: http://localhost/CentralMotos/Pages/Views/03-ViewAgendamentos.php");
    exit();
}
