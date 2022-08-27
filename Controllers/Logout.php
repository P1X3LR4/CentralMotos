<?php

//FECHAMENTO DE TODAS AS SESSOES EXISTENTES
session_start();

$_SESSION = array();

session_destroy();

header('Location: http://localhost/CentralMotos/Pages/01-PageInitial.php');

exit();
