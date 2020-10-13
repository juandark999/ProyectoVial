<div class="container">
<div class="row">
            <br>
            <div class="col-md=1">
                <label>Buscar:</label>
            </div>

            <div class="col-md-3">
                <input type="text" name="filtro" id="filtro" class="form-control validar" placeholder="Buscar...">
            </div>

            <div class="col-md-3">
                <button id="buscar" class="btn btn-success">Buscar</button>
            </div>
        </div>
        <br>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th colspan="5" class="text-center">Usuarios</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>ROL</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usu) {
                    echo "<tr>";
                    echo "<td>" . $usu['usu_id'] . "</td>";
                    echo "<td>" . $usu['usu_nombre'] . "</td>";
                    echo "<td>" . $usu['usu_rol'] . "</td>";
                    // echo "<td><img src='" . $ciu['ciu_imagen'] . "' width='100' heigth='100' j></td>";
                    echo "<td> <a href='". getUrl("Usuario","Usuario","getUpdate", array("usu_id"=>$usu['usu_id']))."'><button class='btn btn-primary'>Editar</button></a> </td>";
                    echo "<td> <a href='". getUrl("Usuario","Usuario","getDelete", array("usu_id"=>$usu['usu_id']))."'><button class='btn btn-danger'>Eliminar</button></a> </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>