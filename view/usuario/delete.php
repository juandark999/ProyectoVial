<div class="jumbotron">
    <label class="display-4">ELIMINAR USUARIO</label>
</div>

<form action="<?php echo getUrl("Usuario", "Usuario", "postDelete"); ?>" method="POST">
    <?php
    foreach ($usuario as $usu) {
    ?>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Nombre:</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $usu['usu_id']; ?>">
                <input type="text" name="nombre" class="form-control" value="<?php echo $usu['usu_nombre']; ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="submit" value="eliminar" name="Eliminar" class="btn btn-danger">
            </div>
        </div>
    <?php
    }
    ?>
</form>