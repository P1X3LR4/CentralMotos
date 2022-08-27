<?php session_start(); ?>

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

    <title> Central Motos </title>

</head>

<body>

    <!----------------- MENU ------------------>
    <?php include_once('../Components/Layout/Menu.php'); ?>

    <!----------------- HEADER ------------------>
    <div class="py-5 text-center cover d-flex flex-column bg-dark">
        <div class="container my-auto">
            <div class="row">
                <div class="mx-auto col-lg-6 col-md-8 animate__animated animate__bounceIn animate__slow">
                    <h1 class="mb-0 mt-5 big-title text-center text-capitalize display-1 text-orange title-font"> Central <br> Motos <br> </h1>
                    <h3 class="mb-4 text-secondary"><b>Locadora de Motocicletas</b></h3>
                </div>
            </div>
        </div>
        <div class="container mt-auto">
            <div class="row">
                <div class="mx-auto col-lg-6 col-md-8 col-10 animate__animated animate__flash animate__infinite animate__slower">
                    <a><i class="d-block fa fa-angle-down fa-3x text-orange"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 filter-dark cover bg-fixed align-items-center" id="parallax-about">
        <div class="container my-auto">
            <div class="">
                <div class="position-relative p-3 text-white text-center">
                    <h3 class="display-3 text-orange"> QUEM SOMOS ?<br></h3>
                    <p class="lead">
                        Somos uma empresa global que conecta pessoas às melhores opções de carros para aluguel. Nosso time é composto por talentos de diversas culturas, habilidades e experiências. Buscamos oferecer a melhor experiência possível aos nossos clientes
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!----------------- SERVICE ------------------>
    <div class="jumbotron bg-dark services" id="LinkInternalServices">
        <div class="container text-center ">
            <h3 class="display-3 text-orange mb-4"> SERVIÇOS <br></h3>
            <div class="row  text-secondary">
                <div class="col-lg-4 border-service-orange-right">
                    <div class="rounded-circle circles center-circles">
                        <i class="fas fa-user-shield fa-3x mt-1 ml-2"></i>
                    </div>
                    <h2 class="mt-4 mb-4">Segurança</h2>
                    <p>Todos os veículos possuem seguro. Garantimos maior facilidade e segurança para cada cliente. Como já sabemos segurança em primeiro lugar, Né!.</p>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-circle circles center-circles">
                        <i class="fas fa-motorcycle fa-4x"></i>
                    </div>
                    <h2 class="mt-4 mb-4">Conforto</h2>
                    <p>Temos todos os cuidados necessários com os carros. Fazemos revisão para que possamos garantir a melhor experiência possível.</p>
                </div>
                <div class="col-lg-4 border-service-orange-left">
                    <div class="rounded-circle circles center-circles">
                        <i class="fas fa-phone fa-3x mt-2"></i>
                    </div>
                    <h2 class="mt-4 mb-4">Atendimento 24H</h2>
                    <p>Possuímos uma central de atendimento que fica disponível 24 horas todos os dias, assim podemos proporcionar maior praticidade nos atendimentos</p>
                </div>
            </div>
        </div>
    </div>

    <!----------------- ATTENTION ------------------>
    <div class="py-5 filter-dark cover bg-fixed align-items-center" id="parallax-attention">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-8 p-3 text-white align-items-center">
                    <h3 class="display-2 text-secondary">BUSCANDO AVENTURA ?<br></h3>
                    <p class="lead">
                        Você veio para o lugar certo. Aqui você vai encontrar variedades de motos para sua necessecidade
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!----------------- MARCAS ------------------>
    <div class="py-5 section bg-dark">
        <div class="container p-3 text-center">
            <div class="align-items-center mb-4">
                <div class="text-center d-inline-flex mb-4">
                    <h2 class="text-orange"><b class="mx-2 my-3">Top Marcas</b></h2>
                </div>
                <div class="pl-lg-4 mb-2">
                    <p class="lead mb-0 text-secondary">
                        Essas são as marcas quem trabalhamos, onde oferecemos <span class="text-orange">Garantia</span> e <span class="text-orange">Segurança</span>
                    </p>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-md-2 col-4">
                    <img class="center-block img-fluid d-block" src="../Components/Images/LogoBmw.svg"> </div>
                <div class="col-md-2 col-4">
                    <img class="center-block img-fluid d-block" src="../Components/Images/LogoYamaha.svg"> </div>
                <div class="col-md-2 col-4">
                    <img class="center-block img-fluid d-block" src="../Components/Images/LogoSuzuki.svg"> </div>
                <div class="col-md-2 col-4">
                    <img class="center-block img-fluid d-block" src="../Components/Images/LogoHonda.svg"> </div>
                <div class="col-md-2 col-4">
                    <img class="center-block img-fluid d-block" src="../Components/Images/LogoHarley.svg"> </div>
            </div>
        </div>
    </div>

    <!----------------- ALBUM ------------------>
    <?php include_once('../Components/Layout/Album.php'); ?>

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

</body>

</html>