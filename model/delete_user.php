<?php
    require "../configuration/connect.php";
    if (isset($_GET['user'])) {
        $query = mysqli_query($connect, "DELETE from usuario where id_usu = '".$_GET['user']."';");
        if ($query) {
            header('Location: \\teste_nsolucoes/?page=plataform&alert=3');
        }else {
            header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
        }
    }else {
        header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
    }
?>