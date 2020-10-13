<br><br><br>
<center>
    <h2>Registrar Tramo</h2>
</center>
<div class="container">
    <div id="registro_usu">
        <form id="myformT" action="<?php echo getUrl("Gestorvial", "Gestorvial", "postRegistrar"); ?>" onsubmit="return validarT(this)" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="fecha">Jerarquia</label>
                    <select name="jerarquia" id="jerarquia" class="form-control">
                        <option value="" selected>Seleccione una Jerarquia Vial</option>
                        <option value="1">Arteria Principal</option>
                        <option value="2">Arteria Secundaria</option>
                        <option value="3">Via Colectora</option>
                        <option value="4">Via Local</option>
                    </select>
                    <small class="text-danger" id="v_jerarquia"></small>
                </div>
                <div class="form-group col-md-4">
                    <label for="nombre">Eje Vial</label>
                    <input type="text" class="form-control" id="ejevial" name="ejevial" maxlength="4" minlength="4">
                    <small class="text-danger" id="v_eje"></small>
                </div>
                <div class="form-group col-md-4">
                    <label for="fecha">Calzada</label>
                    <select name="calzada" id="calzada" class="form-control" data-url="<?php echo getUrl("Gestorvial", "Gestorvial", "validarCalzada", false, "ajax"); ?>">
                        <option value="" selected>Seleccione un Tipo de Via</option>
                        <option value="1">Calzada Unica</option>
                        <option value="2">Dos Calzadas</option>
                        <option value="3">Cuatro Calzadas</option>
                    </select>
                    <small class="text-danger" id="v_calzada"></small>
                </div>
                <div class="form-group col-md-4" id="sentidoCirculacion">
                    <label for="fecha">Sentido de Circulacion</label>
                    <select name="calzada" id="calzada" class="form-control">
                        <option value="" selected>Seleccione Calzada primero</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="fecha">Elemento Complementario</label>
                    <select name="elementoCom" id="elementoCom" class="form-control">
                        <option value="" selected>Por favor seleccione Elemento...</option>
                        <option value="o">Segmento Basico</option>
                        <option value="1">Enlace a la Izquierda</option>
                        <option value="2">Enlace a la derecha</option>
                        <option value="3">Carril de giro a la izquierda</option>
                        <option value="4">Retorno en el separador central</option>
                        <option value="5">Área complementaria en intersección de vías de dos ó más calzadas</option>
                    </select>
                    <small class="text-danger" id="v_elemento"></small>
                </div>
                <div class="form-group col-md-4">
                    <label for="clave">Segmento</label>
                    <input type="text" class="form-control" id="segmento" name="segmento" maxlength="5" minlength="5">
                    <small class="text-danger" id="v_segmento"></small>
                </div>

            </div> <!-- cierre de form-row -->
            <!-- dejo fuera a submit -->
            <div class="form-group">
                <center><input type="submit" class="btn btn-info btn-md"></center>
            </div>
        </form>
    </div>
</div>