<?php 
 
if (isset($_GET['action'], $_GET['user']) && $_GET['action'] === "view") {
    $query = mysqli_query($connect, "SELECT * from usuario where id_usu = ".$_GET['user'].";");
    if (mysqli_num_rows($query) == 1) {
        $fetch = mysqli_fetch_array($query); 
        echo "

<!-- Modal -->
<div class='modal fade' id='modalRead' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
      <div class='modal-header bg-primary'>
        <h1 class='modal-title fs-5 text-white' id='staticBackdropLabel'>Visualização do usuário (".$fetch['id_usu'].")</h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <h6>Data de cadatro - [".date('H:i:s | d/m/Y', strtotime($fetch['dt_cadastro']))."]<h6/>
      <hr>
        <div class='row mt-3'>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='user' class='form-label'> &bull; Usuário:</label>
                    <input type='text' class='form-control' name='user' id='user' placeholder='Preencha este campo.' required autocomplete='off' value='".$fetch['usuario']."' disabled>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='name' class='form-label text-start'>&bull; Nome:</label>
                    <input type='text' class='form-control' name='name' id='name' placeholder='Preencha este campo.' required autocomplete='off' value='".$fetch['nome']."' disabled>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='email' class='form-label text-start'>&bull; Email:</label>
                    <input type='email' class='form-control' name='email' id='email' placeholder='name@example.com' required autocomplete='off' value='".$fetch['email']."' disabled>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-4'>
                <div class='mb-3'>
                <label for='pass' class='form-label text-start'>&bull; Id usuário:</label>
                <input type='text' class='form-control' name='id_usu' value='".$fetch['id_usu']."' readonly autocomplete='off' disabled>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                <label for='pass' class='form-label text-start'>&bull; Status usuário:</label>
                <input type='text' class='form-control' name='status' value='".$fetch['status_usu']."' readonly autocomplete='off' disabled>
                </div>
            </div>
            <div class='col-4'>
                <div class='mb-3'>
                    <label for='tel' class='form-label'> &bull; Telefone:</label>
                    <input type='text' class='form-control' name='tel' id='tel' placeholder='(xx) xxxxx-xxxx' required autocomplete='off' value='".$fetch['telefone']."' disabled>
                </div>
            </div>
        </div>

        <div class='row mt-3'>
            <div class='col-4'>
                <div class='mb-3'>
                    <select class='form-select text-center' name='nvl' id='nvl' aria-label='Default select example' required disabled>";
                    switch ($fetch['nvl_acesso']) {
                        case 1:
                            echo "<option value='1' selected>Administrador</option>
                            <option value='2'>Funcionário</option>";
                            break;
                        
                            case 2:
                            echo "
                            <option value='2' selected>Administrador</option>
                            <option value='1'>Funcionário</option>";
                            break;
                    }
                    
                    echo "
                    </select>
                </div>
            </div>
            <div class='col-4'>
                <div class='input-group mb-3'>
                    <input type='text' autocomplete='off' name='cpf' id='cpf' class='form-control' placeholder='xxx.xxx.xxx-xx' aria-label='Recipient's username' aria-describedby='basic-on2' value='".$fetch['cpf']."' required disabled>
                    <span class='input-group-text' id='basic-on2'>CPF</span>
                </div>
            </div>
            <div class='col-4'>
                <div class='input-group mb-3'>
                    <input type='text' autocomplete='off' name='cep' class='form-control' placeholder='xxxxx-xxx' aria-label='Recipient's username' aria-describedby='basic-on2' id='cep' value='".$fetch['cep']."' required disabled>
                    <span class='input-group-text' id='basic-on2'>CEP</span>
                </div>
            </div>
        </div>
        <h6>Localidade: <h6/>
        <hr>
        <div class='row mt-'>
            <div class='col-4'>
                <input type='text' class='form-control form-control-sm localidades-cep' id='uf' placeholder='UF' disabled>
            </div>
            <div class='col-4'>
                <input type='text' class='form-control form-control-sm localidades-cep' id='cidade' placeholder='Cidade' disabled >
            </div>
            <div class='col-4'>
                <input type='text' class='form-control form-control-sm localidades-cep' id='bairro' placeholder='Bairro' disabled>
            </div>
        </div>
        <div class='row mt-3'>
            <div class='col-4'>
                    <input type='text' class='form-control form-control-sm localidades-cep' id='logradouro' placeholder='Logradouro' disabled>
            </div>
            <div class='col-4'>
                    <input type='text' class='form-control form-control-sm localidades-cep' id='endereco' placeholder='Endereço' disabled>
            </div>
            <div class='col-4'>
                    <div class='input-group input-group-sm mb-3'>
                        <input type='text' name='num' value='".$fetch['num_localidade']."' id='locNumber' class='form-control' aria-label='Recipient's username' aria-describedby='basic-on2' autocomplete='off'  required disabled>
                        <span class='input-group-text' >Número</span>
                    </div>
            </div>
        </div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Cancelar</button>
      </div>
    </div>
  </div>
</div>
";
    }
}
?>
<script>
    var modalRead = new bootstrap.Modal(document.getElementById('modalRead'));
    setTimeout(() => {
      modalRead.show();
    }, 200);

    
    
        
    var localidade = {
        "uf": "",
        "cidade": "",
        "bairro": "",
        "logradouro": "",
        "   rua": ""
    }
        const cep = $('#cep').val();
        cepFormatApi = cep.replace(/[^0-9]/g, '');
        url = "https://cep.awesomeapi.com.br/json/"+cepFormatApi;
        fetch(url)
                    .then(function(response) {
                        response.json()
                                        .then(function(data){
                                            localidade.uf = data.state;
                                            localidade.cidade = data.city;
                                            localidade.bairro = data.district;
                                            localidade.logradouro = data.address_type;
                                            localidade.endereco = data.address_name;
                                            console.log(data.state);
                                            $('#uf').attr("placeholder", localidade.uf);
                                            $('#cidade').attr("placeholder", localidade.cidade);
                                            $('#bairro').attr("placeholder", localidade.bairro);
                                            $('#logradouro').attr("placeholder", localidade.logradouro);
                                            $('#endereco').attr("placeholder", localidade.endereco);
                                        });
            });
           
 
             
    
</script>

