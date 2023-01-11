<!-- Modal -->
<div class="modal fade" id="modal_borra_ingreso<?php echo $fila['ingreso_id']; ?>" tabindex="-1" aria-labelledby="modal_borra_ingresoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="modal_borra_ingresoLabel">¡¡Advertencia!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-danger">
                <p>¡¡Esta acción no se puede revertir!!</p>
                ¿Está seguro que desea eliminar el ingreso? -_-
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger" href="../acc/acc.eliminaingreso.php?ingreso_id=<?php echo $fila['ingreso_id']; ?>">
                    Borrar ingreso
                </a>
            </div>
        </div>
    </div>
</div>