<?php
    require "../configuration/connect.php";
    if (isset($_POST['user'], $_POST['name'], $_POST['cpf'], $_POST['email'],$_POST['tel'],$_POST['nvl'],$_POST['cep'],$_POST['num'], $_POST['pass'])) {

      $user = $_POST['user']; 
      $name = $_POST['name']; 
      $cpf = $_POST['cpf']; 
      $email = $_POST['email'];
      $tel = $_POST['tel'];
      $nvl = $_POST['nvl'];
      $cep = $_POST['cep'];
      $num = $_POST['num'];

      $pass = $_POST['pass']; 
      $cript = sha1($pass);

      $query = mysqli_query($connect, "INSERT into usuario (id_usu, usuario, nome, senha, cpf, email, telefone, status_usu,
       nvl_acesso, dt_cadastro, cep) values ('0', '".$user."', '".$name."', '".$cript."', '".$cpf."', '".$email."', '".$tel."', 'Ativo', '".$nvl."', NOW(), '".$cep."');");

      if ($query) {
        header('Location: \\teste_nsolucoes/?page=plataform&alert=1');
      }else {
        header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
      }
    }else {
        header('Location: \\teste_nsolucoes/?page=plataform&alert=4');
    }
?>