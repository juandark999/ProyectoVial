<div class="row">

                <div class="col-md-1">

                    <label>Buscar: </label>

                    </div>

            <div class="col-md-3">
                <input class="form-control" type="text" id="filtro" name="filtro" placeholder="Buscar... ">
</div>

</div>
<?php
if(isset($_SESSION['result'])){
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['result']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
unset($_SESSION['result']);
?>
<br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th colspan="5">CIUDADES</th>
            </tr>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DEPARTAMENTO</th>
                    <th colspan="2">ACCIONES</th>  
                </tr>   
</thead>
<tbody>
    <?php
        foreach($ciudades as $ciu){
            echo "<tr>";
            echo "<td>".$ciu['ciu_codigo']."</td>";
            echo "<td>".$ciu['ciu_nombre']."</td>";
            echo "<td>".$ciu['dep_nombre']."</td>";
            echo "<td><a href='editar.php?ciu_codigo=".$ciu['ciu_codigo']."'><button class='btn btn-primary'>Editar</button></a></td>";
            echo "<td><a href='eliminar.php?ciu_codigo=".$ciu['ciu_codigo']."'><button class='btn btn-danger'>Eliminar</button></a></td>";
        }
    ?>
</tbody>     

    </table>