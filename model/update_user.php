<?php
    require "../configuration/connect.php";
    if (isset($_POST['id_usu'])) {

        $verify = mysqli_query($connect, "SELECT * from usuario where id_usu = ".$_POST['id_usu'].";");
        if (mysqli_num_rows($verify) == 1) {
            $id = $_POST['id_usu'];
            $user = $_POST['user']; 
            $name = $_POST['name']; 
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $nvl = $_POST['nvl'];
            $cep = $_POST['cep'];
            $num = $_POST['num'];
            $status = $_POST['status'];
    
    
            $query = mysqli_query($connect, "UPDATE usuario set usuario = '".$user."', nome = '".$name."', email='".$email."', telefone='".$tel."', status_usu='".$status."', nvl_acesso='".$nvl."', cep='".$cep."', num_localidade='".$num."' where id_usu='".$id."';");
    
            if ($query) {
                header('Location: \\teste_nsolucoes/?page=plataform&alert=2');
            }else {
                header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
            }
        }else{
            header('Location: \\teste_nsolucoes/?page=plataform&alert=4'); 
        }
    }else {
        header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
    }
    
?>