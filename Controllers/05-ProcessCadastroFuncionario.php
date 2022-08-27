<?php

session_start();

// OBJETOS DE MANIPULAÇAO 
include_once("../Class/Manipulation.php");

$MANIPULATION = new Manipulation();


// VERIFICA SE EXISTE O CLICK DO BOTAO DO FORMULARIO
if (isset($_POST['CadastrarFuncionario'])) {

    // VERIFICA SE OS CAMPOS ESTAO TODOS PREENCHIDOS
    if (!empty($_POST['nomeFuncionario']) && !empty($_POST['sobrenomeFuncionario']) && !empty($_POST['telefoneFuncionario']) && !empty($_POST['cpfFuncionario']) && !empty($_POST['emailFuncionario']) && !empty($_POST['idadeFuncionario']) && !empty($_POST['usernameFuncionario']) && !empty($_POST['senhaFuncionario']) && !empty($_POST['confirmFuncionario'])) {

        // ARMAZENAR DADOS EM VARIAVEIS
        $NomeFuncionario = $_POST['nomeFuncionario'];
        $SobrenomeFuncionario = $_POST['sobrenomeFuncionario'];
        $CPFFuncionario = $_POST['cpfFuncionario'];
        $TelefoneFuncionario = $_POST['telefoneFuncionario'];
        $EmailFuncionario = $_POST['emailFuncionario'];
        $IdadeFuncionario = $_POST['idadeFuncionario'];
        $UsernameFuncionario = $_POST['usernameFuncionario'];
        $SenhaFuncionario = $_POST['senhaFuncionario'];
        $ConfirmarSenhaFuncionario = $_POST['confirmFuncionario'];

        // BUSCAR CPF NO BANCO DE DADOS
        $BUSCAR_CPF_FUNCIONARIO = $MANIPULATION->ExecutarCommandSql("SELECT * FROM FUNCIONARIOS WHERE CPF = '$CPFFuncionario'");

        $RESULT_BUSCA_CPF_FUNCIONARIOS = $MANIPULATION->BuscarDados($BUSCAR_CPF_FUNCIONARIO);

        // VERIFICAR SE JA EXISTE CPF CADASTRSDO NO BANCO DE DADOS
        if ($RESULT_BUSCA_CPF_FUNCIONARIOS > 0) {

            $_SESSION['msg-cpf-existente'] = true;
            header('Location: http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php');
            exit();
        } else {

            // VALIDAÇAO DO CAMPO CPF
            if (strlen($CPFFuncionario) == 14) {

                // VALIDAÇAO DA SENHA
                if ($SenhaFuncionario == $ConfirmarSenhaFuncionario) {

                    //INSERIR DADOS CADASTRUAIS DO CLIENTE
                    $MANIPULATION->setDadosValues("'$NomeFuncionario', '$SobrenomeFuncionario', '$TelefoneFuncionario', '$EmailFuncionario', '$CPFFuncionario', '$IdadeFuncionario', '$UsernameFuncionario', '$SenhaFuncionario', '0'");
                    $MANIPULATION->InsertTableDados("FUNCIONARIOS (Nome, Sobrenome, Telefone, Email, CPF, Idade, Username, Senha, Acesso)");
                } else {

                    $_SESSION['msg-senha-confirm'] = true;
                    header('Location: http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php');
                    exit();
                }
            } else {

                $_SESSION['msg-cpf-incorreto'] = true;
                header('Location: http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php');
                exit();
            }
        }
    } else {

        $_SESSION['msg-preencher-campos'] = true;
        header('Location: http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php');
        exit();
    }
}
