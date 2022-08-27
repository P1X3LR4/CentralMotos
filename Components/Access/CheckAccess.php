<?php

// VERIFICAR ACESSO
if (!isset($_SESSION['admnistrador-logado']) && !isset($_SESSION['funcionario-logado'])) {

    $_SESSION['msg-area-restrita'] = true;
    header('Location: http://localhost/CentralMotos/Pages/01-PageInitial.php');
    exit();
}
