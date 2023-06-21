<?php 

    if (isset($_GET['alert'])) {
        switch ($_GET['alert']) {
            case 1:
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Usuário cadastrado com sucesso!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;

            case 2:
                echo "
                <div class='alert alert-info alert-dismissible fade show' role='alert'>
                <strong>Usuário atualizado com sucesso!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;

            case 3:
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Usuário deletado com sucesso!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;

            case 4:
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Erro ao acessar a base de dados!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            break;
        }
    }
    
?>