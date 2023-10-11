<?php
    if(isset($_POST["bscr"])) {
        $search= $_POST["bscr"];
        $consult= "SELECT exm.*, m.serie_veh, ne.nombre_eq, te.nombre_tipo_eq FROM equipamiento_x_modelo AS exm JOIN vehiculos AS m ON exm.Id_vehiculo=m.Id_vehiculo JOIN equipamiento AS ne ON exm.id_equipamiento=ne.id_equipamiento JOIN tipo_equipamiento AS te ON exm.id_tipo_eq=te.id_tipo_eq WHERE id_eq_x_modelo LIKE '%$search' OR serie_veh LIKE '%$search' OR nombre_eq LIKE '%$search' OR nombre_tipo_eq LIKE '%$search' ";
        if($result= mysqli_query($cnx, $consult)){
            echo "<table class='list-tipo'>
            <tr class='row-table'>
                <th class='th-table'>Identificador</th>
                <th class='th-table'>Vehiculo</th>
                <th class='th-table'>Nombre equipamiento</th>
                <th class='th-table'>Tipo equipamiento</th>
                <th class='th-table'>Modificar</th>
                <th class='th-table'>Eliminar</th>
            </tr>";
            while($rows= mysqli_fetch_array($result)) {
                echo "<tr class='row-td-table'>
                <td class='td-table'>". $rows['id_eq_x_modelo'] ."</td>
                <td class='td-table'>". $rows['serie_veh'] ."</td>
                <td class='td-table'>". $rows['nombre_eq'] ."</td>
                <td class='td-table'>". $rows['nombre_tipo_eq'] ."</td>
                <td class='td-table-btn'>
                    <a class='td-btn-table' href='editar/index.php?ide=" .$rows['id_eq_x_modelo']. "'>
                        <i class='fa-solid fa-pen-to-square'></i>
                    </a>
                </td>
                <td class='td-table-btn'>
                    <a class='td-btn-table' href='eliminar/index.php?ide="  .$rows['id_eq_x_modelo']. "'>
                        <i class='fa-solid fa-trash-can'></i>
                    </a>
                </td>
            </tr>";
            }
        echo "</table>";
        $numrows= mysqli_num_rows($result);
        echo "<h3 class= 'counter'>Se han encontrado $numrows registros</h3>";
        }
    } else {
        $cnslt= "SELECT exm.*, m.serie_veh, ne.nombre_eq, te.nombre_tipo_eq FROM equipamiento_x_modelo AS exm JOIN vehiculos AS m ON exm.Id_vehiculo=m.Id_vehiculo JOIN equipamiento AS ne ON exm.id_equipamiento=ne.id_equipamiento JOIN tipo_equipamiento AS te ON exm.id_tipo_eq=te.id_tipo_eq";

    if($rslt= mysqli_query($cnx, $cnslt)) {
        echo "<table class='list-tipo'>
        <tr class='row-table'>
            <th class='th-table'>Identificador</th>
            <th class='th-table'>Vehiculo</th>
            <th class='th-table'>Nombre Equipamiento</th>
            <th class='th-table'>Tipo Equipamiento</th>
            <th class='th-table'>Modificar</th>
            <th class='th-table'>Eliminar</th>
        </tr>";
        while($rows= mysqli_fetch_array($rslt)) {
            echo "<tr class='row-td-table'>
            <td class='td-table'>". $rows['id_eq_x_modelo'] ."</td>
            <td class='td-table'>". $rows['serie_veh'] ."</td>
            <td class='td-table'>". $rows['nombre_eq'] ."</td>
            <td class='td-table'>". $rows['nombre_tipo_eq'] ."</td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href='editar/frm-edit.php?ide=" .$rows['id_eq_x_modelo']. "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
            </td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href='borrar/confirm-delete.php?ide=" .$rows['id_eq_x_modelo']. "'>
                    <i class='fa-solid fa-trash-can'></i>
                </a>
            </td>
        </tr>";
        }
        echo "</table>";
        $numrows= mysqli_num_rows($rslt);
        echo "<div class='cont-count-add'>
        <div class='count'>
            <h2 class='h2-count'>
                El numero de registros es: $numrows
            </h2>
        </div>
        <div class='add'>
            <h2 class='h2-add'>
                Agregar nuevo o buscar registro 
                <a href='../crear/form.php' class='a-add'>
                    <i class='fa-solid fa-circle-plus'></i>
                </a>
                <a href='#' class= 'a-add'>
                     <i class='fa-solid fa-magnifying-glass'></i>
                 </a>
            </h2>
        </div>
    </div>";
        }
    }
?>