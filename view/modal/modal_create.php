<?php 
if (isset($_GET['action']) && $_GET['action'] === "add") {

echo "

<!-- Modal -->
<div class='modal fade' id='modalAdd' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
      <div class='modal-header bg-dark'>
        <h1 class='modal-title fs-5 text-white' id='staticBackdropLabel'>Cadastro de usuário - [".date("d/m/Y")."]</h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <form id='formAdd' action='\\teste_nsolucoes\model\create_user.php' method='post'>
        <div class='row mt-3'>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='user' class='form-label'> &bull; Usuário:</label>
                    <input type='text' class='form-control' name='user' id='user' placeholder='Preencha este campo.' required>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='name' class='form-label text-start'>&bull; Nome:</label>
                    <input type='text' class='form-control' name='name' id='name' placeholder='Preencha este campo.' required>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='email' class='form-label text-start'>&bull; Email:</label>
                    <input type='email' class='form-control' name='email' id='email' placeholder='name@example.com' required>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='pass' class='form-label text-start'>&bull; Senha:</label>
                    <input type='password' class='form-control' name='pass' id='pass' placeholder='Mínimo 8 caractéres.' required>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='pass' class='form-label text-start'>&bull; Confirmar Senha:</label>
                    <input type='password' class='form-control' name='pass' id='passConfirm' disabled required>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='tel' class='form-label'> &bull; Telefone:</label>
                    <input type='text' class='form-control' name='tel' id='tel' id='tel' placeholder='(xx) xxxxx-xxxx' required>
                </div>
            </div>
        </div>

        <div class='row mt-3'>
            <div class='col-4'>
                <div class='mb-3'>
                    <select class='form-select' name='nvl' id='nvl' aria-label='Default select example' required>
                        <option selected disabled>Nível de acesso</option>
                        <option value='1'>Funcionário</option>
                        <option value='2'>Administrador</option>
                    </select>
                </div>
            </div>
            <div class='col-4'>
                <div class='input-group mb-3'>
                    <input type='text' name='cpf' id='cpf' class='form-control' placeholder='xxx.xxx.xxx-xx' aria-label='Recipient's username' aria-describedby='basic-on2' required>
                    <span class='input-group-text' id='basic-on2'>CPF</span>
                </div>
            </div>
            <div class='col-4'>
                <div class='input-group mb-3'>
                    <input type='text' name='cep' class='form-control' placeholder='xxxxx-xxx' aria-label='Recipient's username' aria-describedby='basic-on2' id='cep' required>
                    <span class='input-group-text' id='basic-on2'>CEP</span>
                </div>
            </div>
        </div>
        <h6>Localidade: <h6/>
        <hr>
        <div class='row mt-3'>
            <div class='col-4'>
                <input type='text' id='estado' class='form-control form-control-sm localidades-cep' id='estado' placeholder='Estado' disabled readonly>
            </div>
            <div class='col-4'>
                <input type='text' class='form-control form-control-sm localidades-cep' id='cidade' placeholder='Cidade' disabled readonly>
            </div>
            <div class='col-4'>
                <input type='text' class='form-control form-control-sm localidades-cep' id='bairro' placeholder='Bairro' disabled readonly>
            </div>
        </div>
        <div class='row mt-3'>
            <div class='col-4'>
                    <input type='text' class='form-control form-control-sm localidades-cep' id='complemento' placeholder='Complemento' disabled readonly>
            </div>
            <div class='col-4'>
                    <input type='text' class='form-control form-control-sm localidades-cep' id='rua' placeholder='Rua'disabled readonly>
            </div>
            <div class='col-4'>
                    <div class='input-group input-group-sm mb-3'>
                        <input type='text' name='num' class='form-control' aria-label='Recipient's username' aria-describedby='basic-on2' >
                        <span class='input-group-text' id='basic-on2'>Número</span>
                    </div>
            </div>
        </div>
      </form>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' form='formAdd' id='btnForm' class='btn btn-primary'>Understood</button>
      </div>
    </div>
  </div>
</div>
";
    }
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
    var modalAdd = new bootstrap.Modal(document.getElementById('modalAdd'))
    modalAdd.show();
    
   
    function verifyInputs() {
        setInterval(() => {

          const regEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;

            const user = $('#user').val();
            const name = $('#name').val();
            const email = $('#email').val();
            const pass = $('#pass').val();
            const tel = $('#tel').val();
            const nvl = $('#nvl').val();
            const cpf = $('#cpf').val();
            const cep = $('#cep').val();


            //Input user
            if (user.length < 5) {
                $('#user').addClass('is-invalid');
            }
                if(user.length == 0){
                    $('#user').removeClass("is-invalid");
                    $('#user').removeClass("is-valid");
            } 
            if(user.length >= 5) {
                $('#user').removeClass("is-invalid");
                $('#user').addClass('is-valid');
            }

            //InputName
            if (name.length < 8) {
                $('#name').addClass('is-invalid');
            }
                if(name.length == 0){
                    $('#name').removeClass("is-invalid");
                    $('#name').removeClass("is-valid");
            } 
            if(name.length >= 8) {
                $('#name').removeClass("is-invalid");
                $('#name').addClass('is-valid');
            }

            //Verificar email
            verifyEmail = regEmail.test(email);
            if (email.length > 0) {
                if (verifyEmail) {
                $('#email').removeClass("is-invalid");
                $('#email').addClass('is-valid');
            }else{
                $('#email').removeClass("is-valid");
                $('#email').addClass('is-invalid');
            }
            }else{
                $('#email').removeClass("is-invalid");
                $('#email').removeClass("is-valid");
            }
            
            //Verificar senha
            if (pass.length < 8) {
                $('#pass').addClass('is-invalid');
                $('#passConfirm').val("");
                $('#passConfirm').prop("disabled", true);
            }
                if(pass.length == 0){
                    $('#pass').removeClass("is-invalid");
                    $('#pass').removeClass("is-valid");
                    $('#passConfirm').removeClass("is-invalid");
            } 
            if(pass.length >= 8) {
                $('#pass').removeClass("is-invalid");
                $('#pass').addClass('is-valid');
                $('#passConfirm').prop("disabled", false);
                if ($('#passConfirm').val() === pass) {
                    $('#passConfirm').removeClass("is-invalid");
                    $('#passConfirm').addClass('is-valid');
                }else{
                    $('#passConfirm').removeClass("is-valid");
                    $('#passConfirm').addClass('is-invalid');
                }
            }

            //Verificar tel
            const regTel = /^\([0-9]{2}\)\s[0-9]{5}\-[0-9]{4}$/g;
            verifyTel = regTel.test(tel);
            if (tel.length > 0) {
               if (verifyTel) {
                    $('#tel').removeClass("is-invalid");
                    $('#tel').addClass("is-valid");
               }else{
                $('#tel').removeClass("is-valid");
                $('#tel').addClass("is-invalid");
               }
            }else{
                $('#tel').removeClass("is-invalid");
                $('#tel').removeClass("is-valid");
            }

            //Verificar CPF
            regCpf = /^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/g;
            verifyCpf = regCpf.test(cpf);
            if (cpf.length > 0) {
               if (verifyCpf) {
                    $('#cpf').removeClass("is-invalid");
                    $('#cpf').addClass("is-valid");
               }else{
                $('#cpf').removeClass("is-valid");
                $('#cpf').addClass("is-invalid");
               }
            }else{
                $('#cpf').removeClass("is-invalid");
                $('#cpf').removeClass("is-valid");
            }


        }, 150);
}
    //Verifica o nivel
    nvl.addEventListener("change",()=>{nvl.classList.add("is-valid");})
    //Chama a funcao que verifica tudo
    verifyInputs();
    //Mascaras p/ preencher corretamente
    $("#tel").mask("(99) 99999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#cep").mask("99999-999");
    
</script>



