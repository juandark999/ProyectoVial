  <br><br><br>
  <center>
    <h2>Registro de Usuario</h2>
</center>
<div class="container">
    <div  id="registro_usu">
<form id="myform" action="<?php echo getUrl("Usuario", "Usuario", "postCreate"); ?>" onsubmit="return validar(this)" method="POST">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nickname">Usuario</label>
            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="JohnDeer23145">
            <p class="text-danger"><small id="v_nickname"></small></p>
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="John Deer">
            <p class="text-danger"><small id="v_nombre"></small></p>
        </div>
        <div class="form-group col-md-4">
            <label for="correo">Correo Electronico</label>
            <input type="email" class="form-control" id="correo" name="correo" data-url="<?php echo getUrl("Usuario", "Usuario", "validaCorreo",false,"ajax"); ?>" placeholder="Smallville@ejemplo.com">
            <small id="v_correo" class="text-danger"></small>
        </div>
        <div class="form-group col-md-4">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="317-509***">
            <p class="text-danger"><small id="v_celular"></small></p>
        </div>
        <div class="form-group col-md-4">
            <label for="clave">Clave</label>
            <input type="password" class="form-control" id="clave" name="clave" placeholder="JohnDeer99xr">
            <p class="text-danger"><small id="v_clave"></small></p>
        </div>
        <div class="form-group col-md-4">
            <label for="fecha">Rol de Usuario</label>
            <select name="usu_rol" id="rol" class="form-control">
                <option value="" selected>Seleccione un Rol</option>
                <?php
                foreach ($rol as $rolr) {
                    echo "<option value='" . $rolr['rol_usu'] . "'>" . $rolr['rol_nombre'] . "</option>";
                }
                ?>
            </select>
            <p class="text-danger"><small id="v_rol"></small></p>
        </div>
        <!-- <div class="form-group col-md-4">
            <label for="Municipio_idMunicipio">Municipio_idMunicipio</label>
            <select name="Municipio_idMunicipio" id="Municipio_idMunicipio" class="form-control">
                <option value="" selected>Municipio_idMunicipio</option>
                <option value="value">value</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="Area_idArea">Area_idArea</label>
            <select name="Area_idArea" id="Area_idArea" class="form-control">
                <option value="" selected>Area_idArea</option>
                <option value="value">value</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="Cargo_idCargo">Cargo_idCargo</label>
            <select name="Cargo_idCargo" id="Cargo_idCargo" class="form-control">
                <option value="" selected>Cargo_idCargo</option>
                <option value="value">value</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="Salario">Salario</label>
            <input type="text" name="cedula" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="fecha2">Fecha2</label>
            <select name="fecha" id="tasking" class="form-control" class="form-control">
                <option value="" selected>Seleccione fecha</option>
                <option value="value1">value1</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="Genero">Genero</label>
            <select name="Genero" id="Genero" class="form-control">
                <option value="" selected>Genero</option>
                <option value="value">value</option>
            </select>
        </div> -->
    </div> <!-- cierre de form-row -->
    <!-- dejo fuera a submit -->
    <div class="form-group">
    <center><input type="submit" class="btn btn-info btn-md" ></center>
    </div>
</form>
</div>
</div>

    <!-- <div class="form-group"> 
        <label for="zip_id" class="control-label">Zip Code</label>
        <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
    </div>        
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Buy!</button>
    </div>     
     -->
