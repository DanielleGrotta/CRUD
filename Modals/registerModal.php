<div class="modal fade" id="cadModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <form id="addform" > 
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="name_register" name="name" required="required" placeholder="Please enter client's name">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">RG:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="rg_register" name="rg" required="required" placeholder="aa-99.999.999">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">CPF:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="cpf_register" name="cpf" required="required" placeholder="999.999.999-99" >
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="email_register" name="email" required="required" placeholder="example@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telefone 1:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="tel1_register" name="tel1" required="required" placeholder="(99) 9999-9999">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telefone 2:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="tel2_register" name="tel2" required="required" placeholder="(99) 9999-9999">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Birth:</label>
            <div class="input-group mb-3">
              <input type="date" class="form-control" id="birth_register" name="birth" required="required">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="confirmar" id="cadBtn"><img class="confirmCheck"src="https://cdn3.iconfinder.com/data/icons/web-ui-3/128/Checkmark-2-128.png"></button>
        </div>
        <input type="hidden" name="id" id="id" readonly>
      </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cpf_register').mask('000.000.000-00');
    $('#rg_register').mask('00.000.000-0');
    $('#tel1_register').mask('(00) 0000-0000');
    $('#tel2_register').mask('(00) 0000-0000');
  });
</script>