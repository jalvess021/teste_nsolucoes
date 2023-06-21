<?php
        //Conexão
        require "../configuration/connect.php";

        
    //verificação de cadastro de usuário
    if (isset($_POST['user-register']) && isset($_POST['email-register']) && isset($_POST['pass-register'])) {
        $userR = $_POST['user-register'];
        $emailR = $_POST['email-register'];
        $passR = $_POST['pass-register'];

        //Criptografando a senha com sha1
        $cript = sha1($passR);

        $query = mysqli_query($connect, "INSERT into usuario (id_usu, usuario, email, senha, status_usu,  nvl_acesso, dt_cadastro) values (0, '".$userR."', '".$emailR."', '".$cript."', 'Ativo', 1, NOW())");
        
        if ($query) {
            header('Location: \teste_nsolucoes/?info=registered');
        }
    }

    //Validação de login
    if (isset($_POST['user-login']) && isset($_POST['pass-login'])) {
        $userL = $_POST['user-login'];
        $passL = $_POST['pass-login'];

        $criptLog = sha1($passL);
        
        // Validação do usuário/senha digitados
        $sql  = "select id_usu, usuario, nvl_acesso from usuario where usuario = ".$userL."";
        $sql .= "and senha = '".sha1($passL)."' and status_usu = 'Ativo' limit 1";

        $query = mysqli_query($connect, "SELECT id_usu, usuario, nvl_acesso from usuario where usuario = '".$userL."' and senha = '".$criptLog."'");

        if (mysqli_num_rows($query) == 1) {

            // Salva os dados encontados na variável $resultado
            $resultado = mysqli_fetch_array($query);
            
            ////// - Salvando os dados na sessão do PHP ////////

            // Se a sessão não existir, inicia uma
                if (!isset($_SESSION)){
                    session_start();
                }

            // Salva os dados encontrados na sessão
            $_SESSION['UsuarioID'] = $resultado['id_usu'];
            $_SESSION['Usuario'] = $resultado['usuario'];
            $_SESSION['UsuarioNivel'] = $resultado['nvl_acesso'];
            
            
        
                /// Redireciona o visitante
                switch($_SESSION['UsuarioNivel']){
                    //Usuário comum
                    case 1: header("Location: \\teste_nsolucoes/?page=plataform"); exit;break;
                    //Administrador
                    case 2: header("Location: \\teste_nsolucoes/?page=plataform"); exit;break;
                } 
        }else{
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            header("Location: \\teste_nsolucoes/?info=invalid_login");
        }

        }


?>