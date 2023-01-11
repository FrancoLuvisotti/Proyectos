<!-- Modal -->
<div class="modal" id="modal_edita_gasto<?php echo $fila['gasto_id']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary table-dark">
                <h5 class="modal-title">Editar el gasto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row text-center" align="center">
                        <?php
                        $gasto_id = $fila['gasto_id'];
                        $sql_modal = "SELECT * FROM gastos WHERE gasto_id=" . $gasto_id . " LIMIT 1";
                        $res_modal = mysqli_query($link, $sql_modal);
                        $gasto = mysqli_fetch_array($res_modal);
                        ?>
                        <div class="col-2">&nbsp;</div>
                        <div class="col-8">
                            <br>
                            <form method="POST" action="../acc/acc.edita_gasto.php">
                                <div class="form-group text-primary">
                                    <label for="gasto">Gasto</label>
                                    <input type="text" class="form-control" name="gasto" placeholder="Combustible" value="<?php echo $gasto["gasto"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group text-primary">
                                    <label for="tipo_gasto ">Tipo de gasto</label>
                                    <select class="form-control" name="tipo_gasto">
                                        <option value="<?php echo $gasto["tipo_gasto"]; ?>"><?php echo $gasto["tipo_gasto"]; ?></option>
                                        <option value="comida">Comida</option>
                                        <option value="transporte">Transporte</option>
                                        <option value="servicios">Servicios</option>
                                        <option value="impuestos">Impuestos</option>
                                        <option value="salud">Salud</option>
                                        <option value="limpieza">Limpieza</option>
                                        <option value="higiene">Higiene</option>
                                    </select>
                                </div>
                                <div class="form-group text-primary">
                                    <label for="importe">Importe</label>
                                    <input type="text" class="form-control" name="importe" placeholder="125.95" value="<?php echo $gasto["importe"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="gasto_id" value="<?php echo $gasto["gasto_id"]; ?>" hidden>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>