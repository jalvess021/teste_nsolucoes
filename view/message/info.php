<?php 

    if (isset($_GET['info'])) {
        switch ($_GET['info']) {
            case 'registered':
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Cadastro realizado!</strong> Faça o login para acessar.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;

            case 'invalid_login':
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Erro ao acessar!</strong> Usuário ou senha incorreto.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;

            case 'not_access':
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Acesso negado!</strong> Sem permissão para acessar.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;
        }
    }
    
?>