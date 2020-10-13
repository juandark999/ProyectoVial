<div class="jumbotron">
    <label class="display-4">REGISTRAR DEPARTAMENTO</label>
</div>
<form action="<?php echo getUrl("Departamento","Departamento","postCreate") ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre:</label>
            <input type="text" name="depto" class="form-control" placeholder="Nombre del departamento">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
        </div>
    </div>
</form>