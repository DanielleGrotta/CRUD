<div class="modal fade" id="endModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Endere√ßo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="cadEndform" class="EndCad" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estado:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="state" name="estado" required="required" placeholder="Please enter client's State">
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CEP:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="CEP" name="CEP" required="required" placeholder="99999-999">
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cidade:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="city" name="cidade" required="required" placeholder="Please enter client's City">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Bairro:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="district" name="bairro" required="required" placeholder="Please enter client's neighborhood">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Rua:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="street" name="rua" required="required" placeholder="Please enter client's Street">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Numero:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="number" name="number" required="required" placeholder="Please enter client's home number">
            </div>
          </div>
          <input type="hidden" name="id_client" id="id_client" readonly>
          <input type="hidden" name="id_address" id="id_address" value="">
          <input type="hidden" name="main_address" id="main_address" value="">
          <div class="modal-footer">
            <button type="submit" class="confirmarEnd" id="endconfirmButton"><img class="confirmCheck"src="https://cdn3.iconfinder.com/data/icons/web-ui-3/128/Checkmark-2-128.png"></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#CEP').mask('00000-000');
    $('#state').mask('AA');

    $('#CEP').blur(function(){
      var cep = $(this).val().replace(/\D/g, '');
      if(cep != ""){
          var validacep = /^[0-9]{8}$/;
          if(validacep.test(cep)){
              $('#CEP').val(cep);
              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados){
                  if (!("erro" in dados)) {
                      $("#state").val(dados.uf);
                      $("#city").val(dados.localidade);
                      $("#district").val(dados.bairro);
                      $("#street").val(dados.logradouro);
                  }
                  else{
                      alert("CEP n„o encontrado.");
                  }
              });
          }
          else{
              alert("Formato de CEP inv·lido.");
          }
      }
  });
  });
</script>