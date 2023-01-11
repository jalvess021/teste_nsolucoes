<?php
    $nvl_acesso = 2;
    require "controller/verify_access.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/plataform.css">
    <title>Sistema | N soluções</title>
    
</head>
<body class='body-plataform'>
    <div class="container text-center">
        <div class="row mt-3">
            <div class="col-12">
            <h3>Listagem de usuários</h3>
            <hr>
        </div>
        <div class="div-search">
                <a href="\teste_nsolucoes/?page=plataform&action=add" class="btn btn-dark btn-lg" id='newUser'>Novo usuário</a>
                <form class="d-flex" role="search">
                    <input class="form-control form-control-lg me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                </form>
            </div>
            <div class="alert-crud"><?php include "view/message/alert_crud.php";?></div>
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr class='title-legend'>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                $quantidade = 10;		
                                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                                $inicio = ($quantidade * $pagina) - $quantidade;

                                if (isset($_POST['filter-user'])) {
                                    #SDASD
                                }else{
                                    $data = mysqli_query($connect, "SELECT * from usuario order by id_usu asc limit $inicio, $quantidade;");
                                }

                                while ($info = mysqli_fetch_array($data)): ?>
                        <tr>
                            <th scope="row"><?= $info['id_usu']?></th>
                            <td><?= $info['nome']?></td>
                            <td><?= $info['usuario']?></td>
                            <td><?= $info['email']?></td>
                            <td><?= $info['telefone']?></td>
                            <td><?= $info['status_usu']?></td>
                            <td class='actions btn-group-sm'><?= "
                                <a class='btn btn-xs' href='?content_adm=view_aula&id_usu=".$info['id_usu']."' data-toggle='tooltip' data-placement='top' title='Visualizar'> <i class='bi bi-eye-fill'></i> </a>
                                <a class='btn btn-xs ml-2' href='?content_adm=lista_aula&edit_aula=".$info['id_usu']."' data-toggle='tooltip' data-placement='top' title='Editar'> <i class='bi bi-pencil-fill'></i> </a>
                                <a href='?content_adm=lista_aula&delete_aula=".$info['id_usu']."' class='btn btn-xs ml-2' data-toggle='tooltip' data-placement='top' title='Excluir'> <i class='bi bi-trash-fill'></i></a>
                            "?></td>
                        <?php endwhile; ?>
                        </tr>
                    </tbody>
                </table>
                <?php
                        $sqlTotal = "select id_usu from usuario;";
				
						$qrTotal  		= mysqli_query($connect, $sqlTotal) or die (mysqli_error());
						$numTotal 		= mysqli_num_rows($qrTotal);
						$totalpagina 	= (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);
						$exibir 		= 3;
						$anterior 		= (($pagina-1) <= 0) ? 1 : $pagina - 1;
						$posterior 		= (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;
                       
						echo "<ul class='pagination d-flex justify-content-center mt-4'>";
						echo "<li class='page-item'><a class='page-link text-white fw-bold' href='?page=plataform&pagina=1'> Primeira</a></li> ";
						echo "<li class='page-item'><a class='page-link text-white' href=\"?page=plataform&pagina=$anterior\"> &laquo;</a></li> ";
						echo "<li class='page-item'><a class='page-link c-destaque-10 text-white' href='?page=plataform&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";
						for($i = $pagina+1; $i < $pagina+$exibir; $i++){
							if($i <= $totalpagina)
							echo "<li class='page-item'><a class='page-link text-white' href='?page=plataform&pagina=".$i."'> ".$i." </a></li> ";
						}
						echo "<li class='page-item'><a class='page-link text-white' href=\"?page=plataform&pagina=$posterior\"> &raquo;</a></li> ";
						echo "<li class='page-item'><a class='page-link text-white fw-bold' href=\"?page=plataform&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";
                    ?>
            </div>
        </div>
</body>
</html>
<?php include "view/modal/modal_create.php";?>
