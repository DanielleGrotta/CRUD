<div class="modal fade" id="endListmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"id="meumodal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adresses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div id="cadCliente">       
      <form id="listagemEnd" method="Post">
        <table id="tabela">
          <thead >
            <tr>
              <th >Estado</th>
              <th >CEP</th>
              <th >Cidade</th>
              <th >Bairro</th>
              <th >Rua</th>
              <th >Numero</th>
              <th >AÃ§Ã£o</th>
            </tr>
          </thead>
          <tbody id="listagemEnduser"> 
          </tbody>  
        </table>
      </form>
    </div>
    <form id="updateEndform" method="POST">
      <div class="modal-body" id="modalEnd">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Estado:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="stateList" name="estado" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">CEP:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="CEPlist" name="CEP" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Cidade:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="cityList" name="cidade" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Bairro:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="districtList" name="bairro" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Rua:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="streetList" name="rua" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Numero:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="numberList" name="numero" required="required">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="confirmarEndBtn" id="endconfirmButton"><img class="confirmCheck"src="https://cdn3.iconfinder.com/data/icons/web-ui-3/128/Checkmark-2-128.png"></button>
        </div>
        <input type="hidden" name="id_client" id="id_client" readonly>
        <input type="hidden" name="id_address" id="id_address" value="">
        <input type="hidden" name="main_address" id="main_address" value="">
      </div>
    </form>
    </div> 
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#CEPlist').mask('00000-000');
    $('#stateList').mask('AA');

    $('#CEPlist').blur(function(){
      var cep = $(this).val().replace(/\D/g, '');
      if(cep != ""){
          var validacep = /^[0-9]{8}$/;
          if(validacep.test(cep)){
              $('#CEPlist').val(cep);
              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados){
                  if (!("erro" in dados)) {
                      $("#stateList").val(dados.uf);
                      $("#cityList").val(dados.localidade);
                      $("#districtList").val(dados.bairro);
                      $("#streetList").val(dados.logradouro);
                  }
                  else{
                      alert("CEP não encontrado.");
                  }
              });
          }
          else{
              alert("Formato de CEP inválido.");
          }
      }
  });
  });
</script>
