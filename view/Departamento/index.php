
    <div class="row">
        <div class="col-md-3">
            <input type="text" name="buscar" id="valorcito" class="form-control" placeholder="Buscar">
        </div>

        <div class="col-md-3">
            <button id="buscar" class="btn btn-succes">Buscar</button>
        </div>
    </div>
    <br>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th colspan="4">Departamento</th>
            </tr>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        
        <?php
            while($depto=pg_fetch_assoc($departamentos)){
                echo "<tr>";
                echo "<td>".$depto['dep_codigo']."</td>";
                echo "<td>".$depto['dep_nombre']."</td>";
                echo "<td><a href='".getUrl("Departamento","Departamento","getUpdate",array("dep_codigo"=>$depto['dep_codigo']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='".getUrl("Departamento","Departamento","getDelete",array("dep_codigo"=>$depto['dep_codigo']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
        ?>
        
            </table>
    </div>
