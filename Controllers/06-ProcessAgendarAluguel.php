<?php

session_start();

// OBJETOS DE MANIPULAÇAO 
include_once("../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

//VERIFICA SE EXISTE O CLICK DO BOTAO DO FORMULARIO
if (isset($_POST['Agendar'])) {

    //VERIFICA SE OS CAMPOS ESTAO TODOS PREENCHIDOS
    if (!empty($_POST['marca']) && (!empty($_POST['BMW']) or !empty($_POST['HONDA']) or !empty($_POST['YAMAHA'])) && !empty($_POST['dataAgend']) && !empty($_POST['horaAgend'])) {

        //DECLARAÇAO DE VARIAVEIS
        $MARCA = $_POST['marca'];
        $DATA = $_POST['dataAgend'];
        $HORA = $_POST['horaAgend'];
        $MODELO_BMW = $_POST['BMW'];
        $MODELO_HONDA = $_POST['HONDA'];
        $MODELO_YAMAHA = $_POST['YAMAHA'];

        $NOME_CLIENTE = $_SESSION['NomeClient'];
        $TELEFONE_CLIENTE = $_SESSION['TelefoneClient'];

        //DECLARAÇAO DE VARIAVEIS PARA VERIFICAR HORA E DATA
        date_default_timezone_set('America/Sao_Paulo');
        $DATA_ATUAL = date('Y-m-d');
        $HORA_ABRE = strtotime('08:00');
        $HORA_FECHA = strtotime('17:00');
        $HORA_CONVERT = strtotime($HORA);

        //VERIFICAR SE A DATA INFORMADA E MAIOR QUE A ATUAL
        if ($DATA > $DATA_ATUAL) {

            //VERIFICAR SE A LOJA ESTARÁ ABERTA
            if ($HORA_CONVERT > $HORA_ABRE && $HORA_CONVERT < $HORA_FECHA) {

                //INSERIR DADOS CADASTRUAIS DO AGENDAMENTO
                switch ($MARCA) {

                    case ($MARCA == "BMW"):

                        //BMW
                        $MANIPULATION->setDadosValues("'$NOME_CLIENTE', '$TELEFONE_CLIENTE', '$MARCA', '$MODELO_BMW', '$DATA', '$HORA'");
                        $MANIPULATION->InsertTableDadosAgendamento("AGENDAMENTOS (NomeCliente, Telefone, Marca, Modelo, Data, Hora)");
                        break;

                    case ($MARCA == "HONDA"):

                        //HONDA
                        $MANIPULATION->setDadosValues("'$NOME_CLIENTE', '$TELEFONE_CLIENTE', '$MARCA', '$MODELO_HONDA', '$DATA', '$HORA'");
                        $MANIPULATION->InsertTableDadosAgendamento("AGENDAMENTOS (NomeCliente, Telefone, Marca, Modelo, Data, Hora)");
                        break;

                    case ($MARCA == "YAMAHA"):

                        //YAMAHA
                        $MANIPULATION->setDadosValues("'$NOME_CLIENTE', '$TELEFONE_CLIENTE', '$MARCA', '$MODELO_YAMAHA', '$DATA', '$HORA'");
                        $MANIPULATION->InsertTableDadosAgendamento("AGENDAMENTOS (NomeCliente, Telefone, Marca, Modelo, Data, Hora)");
                        break;

                    default:
                        header('Location: http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php');
                        exit();
                        break;
                }
            } else {

                $_SESSION['msg-horario-invalido'] = true;
                header('Location: http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php');
                exit();
            }
        } else {

            $_SESSION['msg-data-ivalida'] = true;
            header('Location: http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php');
            exit();
        }
    } else {
        $_SESSION['msg-preencher-campos'] = true;
        header('Location: http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php');
        exit;
    }
}
