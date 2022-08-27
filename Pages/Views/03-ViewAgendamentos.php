<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/CheckAccess.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

$LISTAR_AGENDAMENTOS_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM AGENDAMENTOS");

?>

<html>

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- 
        ****************
         COMPONENTS CSS
        ****************
    -->

    <!---------------- FRAMEWORKS CSS ---------------->
    <?php include_once('../../Components/Custom/01-FrameworkCss.php'); ?>

    <title> Central Motos </title>

</head>

<body>

    <!----------------- MENU ------------------>
    <?php include_once('../../Components/Layout/Menu.php'); ?>


    <!----------------- SERVICE ------------------>
    <div class="jumbotron services" id="LinkInternalServices">
        <div class="container text-center">
            <h2 class="text-dark mb-4"><b class="mx-2 my-3">Agendamentos</b></h2>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Data</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <?php while ($LISTAR_AGENDAMENTOS = $MANIPULATION->PercorrerTable($LISTAR_AGENDAMENTOS_BD)) { ?>
                    <tbody>
                        <tr>
                            <th><?php echo $LISTAR_AGENDAMENTOS['id']; ?></th>
                            <td><?php echo $LISTAR_AGENDAMENTOS['NomeCliente']; ?></td>
                            <td><?php echo $LISTAR_AGENDAMENTOS['Telefone']; ?></td>
                            <td><?php echo $LISTAR_AGENDAMENTOS['Marca']; ?></td>
                            <td><?php echo $LISTAR_AGENDAMENTOS['Modelo']; ?></td>
                            <td><?php echo $LISTAR_AGENDAMENTOS['Data']; ?></td>
                            <td><?php echo $LISTAR_AGENDAMENTOS['Hora']; ?></td>

                            <td>
                                <a href="#myModal" class="btn btn-xs btn-danger trigger-btn" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <!------------------- MODAL CONFIRMAR OPERAÇÃO ------------------>
                    <?php include_once('../../Components/Custom/AlertConfig/04-ModalAgendamento.php'); ?>

                <?php } ?>

            </table>
        </div>
    </div>


    <!-------------------- FOOTER ------------------------>
    <?php include_once('../../Components/Layout/Footer.php'); ?>

    <!-- 
        ***********************
         COMPONENTS JAVASCRIPT
        ***********************
    -->

    <!---------------------- FRAMEWORKS JAVASCRIPTS ------------------->
    <?php include_once('../../Components/Custom/02-FrameworkJavaScript.php'); ?>
    <!------------------- ALERTS JAVASCRIPT ------------------>
    <?php include_once('../../Components/Messages/01-AlertsJS.php'); ?>

</body>

</html>