<div class="container">

<h2>Ingrese Barrio</h2>
<br>

<form action="<?php   echo getUrl("Barrio","Barrio","postRegistrar") ?>" method="POST">

<label>Codigo del Barrio</label>
<br>
<input type="text" name="BarrioId" class="form-control" placeholder="Codigo Barrio">
<br>
<label>Nombre del Barrio</label>
<br>
<input type="text" name="BarrioName" class="form-control" placeholder="Nombre">
<br>
<button class="btn btn-success">Enviar</button>

</form>
<?php

if(isset($_SESSION['Mensaje'])){


?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['Mensaje']; ?>
        <button type="button" class="close" data-dismiss="alert" aria_label="Close">
            <span aria_hidden="true">&times;</span>
        </button>
    </div>

<?php

}
?>