<?php
    $consult= "SELECT * FROM equipamiento";

    if($result= mysqli_query($cnx, $consult)) {
        echo "<table class='list-tipo'>
        <tr class='row-table'>
            <th class='th-table'>Identificador</th>
            <th class='th-table'>Nombre equipamiento</th>
            <th class='th-table'>Costo equipamiento</th>
            <th class='th-table'>Modificar</th>
            <th class='th-table'>Eliminar</th>
        </tr>";
        while($rows= mysqli_fetch_array($result)) {
            echo "<tr class='row-td-table'>
            <td class='td-table'>". $rows['id_equipamiento'] ."</td>
            <td class='td-table'>". $rows['nombre_eq'] ."</td>
            <td class='td-table'>". $rows['precio_eq'] ."</td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href='editar/frm-edit.php?ide=" .$rows['id_equipamiento']. "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
            </td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href='eliminar/index.php?ide="  .$rows['id_equipamiento']. '&name=' .$rows['nombre_eq']. "'>
                    <i class='fa-solid fa-trash-can'></i>
                </a>
            </td>
        </tr>";
        }
       echo "</table>";
       $controws= mysqli_num_rows($result);
       echo "<div class='cont-count-add'>
       <div class='count'>
           <h2 class='h2-count'>
               El numero de registros es: $controws
           </h2>
       </div>
       <div class='add'>
           <h2 class='h2-add'>
               Agregar nuevo o buscar registro 
               <a href='crear/form.php' class='a-add'>
                   <i class='fa-solid fa-circle-plus'></i>
               </a>
               <a href='consulta/consult.php' class= 'a-add'>
                    <i class='fa-solid fa-magnifying-glass'></i>
                </a>
           </h2>
       </div>
   </div>";
    }
?>