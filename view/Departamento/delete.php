<div class="jumbotron">
    <label class="display-4">EDITAR DEPARTAMENTO</label>
</div>
<?php
    foreach($departamentos as $depto){
?>
<form action="<?php echo getUrl("Departamento","Departamento","postDelete") ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre:</label>
            <input type="hidden" name="dep_codigo" value="<?php echo $depto['dep_codigo']; ?>">
            <input type="text" name="depto" readonly class="form-control" value="<?php echo $depto['dep_nombre'];?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
        </div>
    </div>
</form>
<?php
    }
?>