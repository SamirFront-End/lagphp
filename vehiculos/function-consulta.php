<?php
    
    if(isset($_POST["bscr"])){
        $buscar = $_POST["bscr"];
        $consult = "SELECT * FROM vehiculos WHERE Id_vehiculo LIKE '%$buscar' OR marca_veh LIKE '%$buscar' OR  serie_veh LIKE '%$buscar' OR modelo_veh LIKE '%$buscar'";
        if($resultado = mysqli_query($cnx, $consult)) {
            echo "<table class= 'tbl'>";
                echo "<tr class= 'row-tbl'>
                        <th class= 'header-tbl'>" . "ID</th>
                        <th class= 'header-tbl'>" . "Marca </th>
                        <th class= 'header-tbl'>" . "Serie </th>
                        <th class= 'header-tbl'>" . "Modelo </th>
                        <th class= 'header-tbl'>" . "#Bastidor </th>
                        <th class= 'header-tbl'>" . "Potencia </th>
                        <th class= 'header-tbl'>" . "Motor </th>
                        <th class= 'header-tbl'>" . "#Cilindros </th>
                        <th class= 'header-tbl'>" . "Cilindrada </th>
                        <th class= 'header-tbl'>" . "Precio </th>
                        <th class= 'header-tbl'>" . "Descuento </th>
                        <th class= 'header-tbl'>" . "Editar </th>
                        <th class= 'header-tbl'>" . "Eliminar </th>
                    </tr>";
                while($rows = mysqli_fetch_array($resultado)) {
                    echo "<tr class= 'row-celda-tbl'>
                        <td class= 'celda-tbl'>" . $rows['Id_vehiculo']."</td>
                        <td class= 'celda-tbl'>" . $rows['marca_veh']." </td>
                        <td class= 'celda-tbl'>" . $rows['serie_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['modelo_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['bastidor_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['potencia_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['motor_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['nro_cilindros_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['cilindrada_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['precio_veh']."</td>
                        <td class= 'celda-tbl'>" . $rows['descuento_veh']."</td>
                        <td class= 'celda-tbl'>" . '<a href="editar/index.php?ide=' . $rows['Id_vehiculo']. '&marc=' . $rows['marca_veh']. '&serie=' . $rows['serie_veh']. '&mod=' . $rows['modelo_veh'].'"><i class="fa-solid fa-pen-to-square"></i></a>' . "</td>
                        <td class= 'celda-tbl'>" . '<a href="borrar/confirm.php?ide=' . $rows['Id_vehiculo']. '&marc=' . $rows['marca_veh']. '&serie=' . $rows['serie_veh']. '&mod=' . $rows['modelo_veh'].'"><i class="fa-solid fa-trash"></i></a>' . "</td>
                    </tr>";
                }
            echo "</table>";  
              
        $numrows= mysqli_num_rows($resultado);
        echo "<h3 class= 'counter'>Se han encontrado $numrows registros</h3>";
        };
    }
?>