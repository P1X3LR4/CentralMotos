<?php

// VERIFICAR SE ESTA LOGADO
if (!isset($_SESSION['admnistrador-logado']) && !isset($_SESSION['funcionario-logado']) && !isset($_SESSION['client-logado'])) {

    $_SESSION['msg-realizar-login'] = true;
    header('Location: http://localhost/CentralMotos/Pages/03-PageLoginClient.php');
    exit();
}
