<?php
    session_start();
    if(!isset($_SESSION['UsuarioID']) || ($_SESSION['UsuarioNivel'] < $nvl_acesso) || isset($_POST['destroy_session'])) {
        session_destroy();
        header("Location: \\teste_nsolucoes/?info=not_access");
        exit;
    }
?>