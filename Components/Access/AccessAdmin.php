<?php

// VERIFICAR ACESSO
if (!isset($_SESSION['admnistrador-logado'])) {

    header('Location: http://localhost/CentralMotos/Pages/01-PageInitial.php');
    exit();
}
