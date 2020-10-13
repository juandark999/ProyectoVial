<div class="jumbotron">
    <label>Registrar ciudad</label>
    </div>
    <form action="<?php echo getUrl("Ciudad","Ciudad","postCreate"); ?>" method="post" enctype="multimedia"></form>
        <div class="row">
            <div class="col-md-3">
            <label>Nombre</label>
                <input type="text" class="form-control" name="ciu_nombre" maxlength="30" placeholder="Ingrese la ciudad">
            </div>
            <div class="col-md-4">
                <label>Departamento</label>
                <select class="form-control" name="dep_codigo">
                    <option>Seleccione...</option>
                    <?php
                        foreach ($departamentos as $depto){
                            echo "<option value='".$depto['dep_codigo']."'>".$depto['dep_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>
            <br>
            <input type="submit" name="registrar" value="Registrar" class="btn btn-succes">
            <a href="consultar.php"><button type="button" name="volver" class="btn btn-primary">volver</button></a>
                    </form>