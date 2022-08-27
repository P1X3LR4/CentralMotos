<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessAdmin.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();
// BUSCAR REGISTROS DE LOGIN NO BANCO DE DADOS

// VARIAVEIS
$ID = $_POST['idFuncionario'];
$NomeFuncionario = $_POST['nomeFuncionario'];
$SobrenomeFuncionario = $_POST['sobrenomeFuncionario'];
$Telefone = $_POST['telefoneFuncionario'];
$EmailFuncionario = $_POST['emailFuncionario'];
$IdadeFuncionario = $_POST['idadeFuncionario'];
$UsernameFuncionario = $_POST['usernameFuncionario'];

// VERIFICA SE EXISTE O CLICK DO BOTAO DO FORMULARIO
if (isset($_POST['EditFuncionario'])) {

    if (!empty($NomeFuncionario) && !empty($SobrenomeFuncionario) && !empty($Telefone) && !empty($EmailFuncionario) && !empty($IdadeFuncionario) && !empty($UsernameFuncionario)) {

        $MANIPULATION->setCodId("$ID");

        $MANIPULATION->AlterarFuncionario("FUNCIONARIOS", $NomeFuncionario, $SobrenomeFuncionario, $Telefone, $EmailFuncionario, $IdadeFuncionario, $UsernameFuncionario);
    } else {

        $_SESSION['msg-preencher-campos'] = true;
        header("Location: http://localhost/CentralMotos/Pages/Views/04-ViewEditFuncionario.php?id=$ID");
        exit();
    }
}
