<!-- Modal -->
<div class="modal" id="modal_edita_ingreso<?php echo $fila['ingreso_id']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary table-dark">
                <h5 class="modal-title">Editar el ingreso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row text-center" align="center">

                        <?php
                        $ingreso_id = $fila['ingreso_id'];

                        $sql_modal = "SELECT * FROM ingresos WHERE ingreso_id=" . $ingreso_id . " LIMIT 1";
                        $res_modal = mysqli_query($link, $sql_modal);
                        $ingreso = mysqli_fetch_array($res_modal);
                        ?>



                        <div class="col-2">&nbsp;</div>
                        <div class="col-8">
                            <br>


                            <form method="POST" action="../acc/acc.edita_ingreso.php">
                                <div class="form-group text-primary">
                                    <label for="ingreso">Ingreso</label>
                                    <input type="text" class="form-control" name="ingreso" value="<?php echo $ingreso["ingreso"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group text-primary">
                                    <label for="tipo_ingreso">Tipo de ingreso</label>
                                    <select class="form-control" name="tipo_ingreso">
                                        <option value="<?php echo $ingreso["tipo_ingreso"]; ?>"><?php echo $ingreso["tipo_ingreso"]; ?></option>
                                        <option value="ahorrospersonales">Ahorros personales</option>
                                        <option value="salario">Salario</option>
                                        <option value="trab-parcial">Trabajo a tiempo parcial</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group text-primary">
                                    <label for="importe">Importe</label>
                                    <input type="text" class="form-control" name="importe" placeholder="125.95" value="<?php echo $ingreso["importe"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ingreso_id" value="<?php echo $ingreso["ingreso_id"]; ?>" hidden>
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
</div>