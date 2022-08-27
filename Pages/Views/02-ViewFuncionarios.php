<?php

session_start();

//VERIFICAR ACESSO
include_once("../../Components/Access/AccessAdmin.php");

// OBJETOS DE MANIPULAÇAO 
include_once("../../Class/Manipulation.php");

$MANIPULATION = new Manipulation();

$LISTAR_FUNCIONARIOS_BD = $MANIPULATION->ExecutarCommandSql("SELECT * FROM FUNCIONARIOS");

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
            <h2 class="text-dark mb-4"><b class="mx-2 my-3">Registros de Cadastro de Funcionários</b></h2>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php while ($LISTAR_FUNCIONARIOS = $MANIPULATION->PercorrerTable($LISTAR_FUNCIONARIOS_BD)) { ?>
                    <tbody>
                        <tr>
                            <th><?php echo $LISTAR_FUNCIONARIOS['id']; ?></th>
                            <td>
                                <?php
                                echo $LISTAR_FUNCIONARIOS['Nome'];
                                echo '  ' . $LISTAR_FUNCIONARIOS['Sobrenome'];
                                ?>
                            </td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['CPF']; ?></td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['Idade']; ?></td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['Telefone']; ?></td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['Email']; ?></td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['Username']; ?></td>
                            <td><?php echo $LISTAR_FUNCIONARIOS['Senha']; ?></td>

                            <td>
                                <a href="04-ViewEditFuncionario.php?id=<?php echo $LISTAR_FUNCIONARIOS['id']; ?>" class="btn btn-xs btn-primary"><i class="fas fa-pen"></i></a>

                                <a href="#myModal" class="btn btn-xs btn-danger trigger-btn" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <!------------------- MODAL CONFIRMAR OPERAÇÃO ------------------>
                    <?php include_once('../../Components/Custom/AlertConfig/02-ModalFuncionario.php'); ?>

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