<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <form id="editform" method="POST" >
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="name" name="name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">RG:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="rg" name="rg" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">CPF:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="cpf" name="cpf" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="email" name="email" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telefone 1:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="tel1" name="tel1" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telefone 2:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="tel2" name="tel2" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Birth:</label>
            <div class="input-group mb-3">
              <input type="date" class="form-control" id="birth" name="birth" required="required">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="confirmar" id="editButton"><img class="confirmCheck"src="https://cdn3.iconfinder.com/data/icons/web-ui-3/128/Checkmark-2-128.png"></button>
        </div>
        <input type="hidden" name="id" id="id" readonly>
      </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
    $('#rg').mask('00.000.000-0');
    $('#tel1').mask('(00) 0000-0000');
    $('#tel2').mask('(00) 0000-0000');
  });
</script>