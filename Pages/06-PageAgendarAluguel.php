<?php

session_start();

//VERIFICAR SE ESTA LOGADO
include_once("../Components/Access/AccessLogged.php");

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
    <?php include_once('../Components/Custom/01-FrameworkCss.php'); ?>

    <link rel="stylesheet" href="http://localhost/CentralMotos/Components/Styles/02-StyleConfigPage.css" />

    <title> Central Motos </title>

    <style>
        .hiden {
            display: none;
        }
    </style>

</head>

<body>

    <!----------------- MENU ------------------>
    <?php include_once('../Components/Layout/Menu.php'); ?>

    <!------------------- MODAL HORARIOS ------------------>
    <?php include_once('../Components/Custom/AlertConfig/03-ModalHorarios.php'); ?>

    <section class="hero is-fullheight bg-dark">
        <div class="hero-body">
            <div class="container-body-cadastro text-center border-orange">
                <div class="column-cadastro is-6-cadastro is-offset-3 p-4">
                    <img src="http://localhost/CentralMotos/Components/Images/CentralMotos.svg" class="mb-4 svg-logo" width="270">

                    <div class="conteiner has-text-center is-size-3 text-secondary mt-4">
                        <form action="../Controllers/06-ProcessAgendarAluguel.php" method="POST">

                            <!--------------- Marcas -------------->
                            <div class="field">
                                <h4>Escolha uma Marca</h4>
                                <div class="control">
                                    <select class="custom-select" name="marca" id="marca">
                                        <option selected>Escolher...</option>
                                        <option value="BMW">BMW</option>
                                        <option value="HONDA">HONDA</option>
                                        <option value="YAMAHA">YAMAHA</option>
                                    </select>
                                </div>
                            </div>

                            <!--------------- Modelos -------------->
                            <!-- BMW -->
                            <div class="field hiden" id="BMW">
                                <h4>Selesione o Modelo</h4>
                                <div class="control">
                                    <select class="custom-select" name="BMW">
                                        <option value="G 310 GS">BMW G 310 GS</option>
                                        <option value="S 1000 XR">BMW S 1000 XR</option>
                                        <option value="S 1000 R">BMW S 1000 R</option>
                                    </select>
                                </div>
                            </div>

                            <!-- HONDA -->
                            <div class="field hiden" id="HONDA">
                                <h4>Escolha o Mobelo</h4>
                                <div class="control">
                                    <select class="custom-select" name="HONDA">
                                        <option value="CB 650R">Honda CB 650R</option>
                                        <option value="XRE 190">Honda XRE 190</option>
                                        <option value="CB 500X">Honda CB 500X</option>
                                    </select>
                                </div>
                            </div>

                            <!-- YAMAHA -->
                            <div class="field hiden" id="YAMAHA">
                                <h4>Escolha o Mobelo</h4>
                                <div class="control">
                                    <select class="custom-select" name="YAMAHA">
                                        <option value="R3 ABS">Yamaha R3 ABS</option>
                                        <option value="MT-09">Yamaha MT-09 ABS</option>
                                        <option value="FAZER 250">Yamaha FAZER 250</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <h4>Data</h4>
                                    <div class="control">
                                        <input name="dataAgend" class="form-control input-is-large" type="date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="control mt-3">
                                        <h4 class="text-orange" style="font-size: 0.9rem !important;">Veja os Horários de Funcionamento</h4>
                                        <a href="#myModal" class="btn btn-xs btn-primary trigger-btn" data-toggle="modal">Ver Horários de Funcionamento</i></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>Horário</h4>
                                    <div class="control">
                                        <input name="horaAgend" class="form-control input-is-large" type="time">
                                    </div>
                                </div>
                            </div>

                            <div class="control">
                                <input type="submit" class="btn btn-orange" value="Agendar" name="Agendar"></input>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------- FOOTER ------------------------>
    <?php include_once('../Components/Layout/Footer.php'); ?>

    <!-- 
        ***********************
         COMPONENTS JAVASCRIPT
        ***********************
    -->

    <!---------------------- FRAMEWORKS JAVASCRIPTS ------------------->
    <?php include_once('../Components/Custom/02-FrameworkJavaScript.php'); ?>
    <!------------------- ALERTS JAVASCRIPT ------------------>
    <?php include_once('../Components/Messages/01-AlertsJS.php'); ?>

    <script>
        $(document).ready(function() {

            $("#marca").on('change', function() {

                $(".hiden").hide();
                $("#" + $(this).val()).fadeIn(200);

            }).change();

        })
    </script>

</body>

</html>