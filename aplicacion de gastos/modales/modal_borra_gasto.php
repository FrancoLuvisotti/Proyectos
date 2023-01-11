<!-- Modal -->
<div class="modal fade " id="modal_borra_gasto<?php echo $fila['gasto_id']; ?>" tabindex="-1" aria-labelledby="modal_borra_gastoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="modal_borra_gastoLabel ">¡¡Advertencia!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-danger">
        <p>¡¡Esta acción no se puede revertir!!</p>
        ¿Está seguro que desea eliminar el gasto? -_-
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-danger" href="../acc/acc.eliminagasto.php?gasto_id=<?php echo $fila['gasto_id']; ?>">
          Borrar gasto
        </a>
      </div>
    </div>
  </div>
</div>