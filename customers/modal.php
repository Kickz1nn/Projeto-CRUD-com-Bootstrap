<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Excluir Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza de que deseja excluir este registro?
      </div>
      <div class="modal-footer">
<<<<<<< HEAD
        <form id="delete-form" method="get" action="delete.php">
          <input type="hidden" name="id" id="delete-id" value="">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" id="confirm" class="btn btn-danger">Excluir</button>
        </form>
=======
        <a id="confirm" class="btn btn-primary" href="delete.php?id=<?php echo $customer['id']; ?>">Sim</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
>>>>>>> cfb03fa8797833846161b202c277be926177ea15
      </div>
    </div>
  </div>
</div>
