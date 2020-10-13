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
                    <th colspan="9" class="text-center"><h2>Tramos</h2></th>
                </tr>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Jerarquia</th>
                    <th class="text-center">Eje Vial</th>
                    <th class="text-center">Calzada</th>
                    <th class="text-center">Elemento Complementario</th>
                    <th class="text-center">Segmento</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($tramos as $tra) {
                    echo "<tr>";
                    echo "<td>" . $tra['tra_id'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_codigo'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_jerarquia'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_ejevial'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_calzada'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_elementocom'] . "</td>";
                    echo "<td class='text-center'>" . $tra['tra_segmento'] . "</td>";
                    // echo "<td><img src='" . $ciu['ciu_imagen'] . "' width='100' heigth='100' j></td>";
                    echo "<td> <a href='". getUrl("Gestorvial","Gestorvial","getUpdate", array("tra_id"=>$tra['tra_id']))."'><button class='btn btn-primary'>Editar</button></a> </td>";
                    echo "<td> <a href='". getUrl("Gestorvial","Gestorvial","getDelete", array("tra_id"=>$tra['tra_id']))."'><button class='btn btn-danger'>Eliminar</button></a> </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>