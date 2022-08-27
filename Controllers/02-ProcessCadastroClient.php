<?php

session_start();

// OBJETOS DE MANIPULAÇAO 
include_once("../Class/Manipulation.php");

$MANIPULATION = new Manipulation();


// VERIFICA SE EXISTE O CLICK DO BOTAO DO FORMULARIO
if (isset($_POST['CadastrarClient'])) {

    // VERIFICA SE OS CAMPOS ESTAO TODOS PREENCHIDOS
    if (!empty($_POST['nomeClient']) && !empty($_POST['sobrenomeClient']) && !empty($_POST['cpfClient']) && !empty($_POST['telefoneClient']) && !empty($_POST['emailClient']) && !empty($_POST['senhaClient']) && !empty($_POST['confirmSenhaClient'])) {

        // ARMAZENAR DADOS EM VARIAVEIS
        $NomeClient = $_POST['nomeClient'];
        $SobrenomeClient = $_POST['sobrenomeClient'];
        $CPFClient = $_POST['cpfClient'];
        $TelefoneClient = $_POST['telefoneClient'];
        $EmailClient = $_POST['emailClient'];
        $SenhaClient = $_POST['senhaClient'];
        $ConfirmarSenhaClient = $_POST['confirmSenhaClient'];

        // BUSCAR CPF NO BANCO DE DADOS
        $BUSCAR_CPF_CLIENT = $MANIPULATION->ExecutarCommandSql("SELECT * FROM CLIENTES WHERE CPF = '$CPFClient'");

        $RESULT_BUSCA_CPF_CLIENT = $MANIPULATION->BuscarDados($BUSCAR_CPF_CLIENT);

        // VERIFICAR SE JA EXISTE CPF CADASTRSDO NO BANCO DE DADOS
        if ($RESULT_BUSCA_CPF_CLIENT > 0) {

            $_SESSION['msg-cpf-existente'] = true;
            header('Location: http://localhost/CentralMotos/Pages/02-PageCadastroClient.php');
            exit();
        } else {

            // VALIDAÇAO DO CAMPO CPF
            if (strlen($CPFClient) == 14) {

                // VALIDAÇAO DA SENHA
                if ($SenhaClient == $ConfirmarSenhaClient) {

                    //INSERIR DADOS CADASTRUAIS DO CLIENTE
                    $MANIPULATION->setDadosValues("'$NomeClient', '$SobrenomeClient', '$CPFClient', '$TelefoneClient', '$EmailClient', '$SenhaClient'");
                    $MANIPULATION->InsertTableDados("CLIENTES (Nome, Sobrenome, CPF, Telefone, Email, Senha)");
                } else {

                    $_SESSION['msg-senha-confirm'] = true;
                    header('Location: http://localhost/CentralMotos/Pages/02-PageCadastroClient.php');
                    exit();
                }
            } else {

                $_SESSION['msg-cpf-incorreto'] = true;
                header('Location: http://localhost/CentralMotos/Pages/02-PageCadastroClient.php');
                exit();
            }
        }
    } else {

        $_SESSION['msg-preencher-campos'] = true;
        header('Location: http://localhost/CentralMotos/Pages/02-PageCadastroClient.php');
        exit();
    }
}
