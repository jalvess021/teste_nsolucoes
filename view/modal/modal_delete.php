<?php 
 
if (isset($_GET['action'], $_GET['user']) && $_GET['action'] === "delete") {
    $query = mysqli_query($connect, "SELECT * from usuario where id_usu = ".$_GET['user'].";");
    if (mysqli_num_rows($query) == 1) {
        $fetch = mysqli_fetch_array($query); 
        echo "

<!-- Modal -->
<div class='modal fade' id='modalDel' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header bg-danger'>
        <h1 class='modal-title fs-5 text-white' id='staticBackdropLabel'>Aviso: Exclusão de usuário!</h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <p> Tem certeza que deseja excluir o usuário <strong>".$fetch['usuario']." (".$fetch['id_usu'].")</strong>?</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
        <a href='\\teste_nsolucoes\model\delete_user.php?user=".$_GET['user']."' form='formDel' id='btnForm' class='btn btn-danger' disabled>Excluir</a>
      </div>
    </div>
  </div>
</div>
";
    }
}
?>
<script>
    var modalDel = new bootstrap.Modal(document.getElementById('modalDel'));
    setTimeout(() => {
      modalDel.show();
    }, 200);
    
</script>



