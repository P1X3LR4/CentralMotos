<?php

// VERIFICAR LOGADO
if (isset($_SESSION['admnistrador-logado']) || isset($_SESSION['funcionario-logado']) || isset($_SESSION['client-logado'])) {

    header('Location: http://localhost/CentralMotos/Pages/01-PageInitial.php');
    exit();
}
