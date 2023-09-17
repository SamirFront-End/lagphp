<?php
    $consult= "SELECT * FROM tipo_equipamiento";

    if($result= mysqli_query($cnx, $consult)) {
        echo "<table class='list-tipo'>
        <tr class='row-table'>
            <th class='th-table'>Identificador</th>
            <th class='th-table'>Tipo de equipamiento</th>
            <th class='th-table'>Modificar</th>
            <th class='th-table'>Eliminar</th>
        </tr>";
        while($rows= mysqli_fetch_array($result)) {
            echo "<tr class='row-td-table'>
            <td class='td-table'>". $rows['id_tipo_eq'] ."</td>
            <td class='td-table'>". $rows['nombre_tipo_eq'] ."</td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href=''>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
            </td>
            <td class='td-table-btn'>
                <a class='td-btn-table' href=''>
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
               Agregar nuevo o buscar registro <a href='crear/index.php' class='a-add'>
                   <i class='fa-solid fa-circle-plus'></i>
               </a>
               <a href='consultar/index.php' class= 'a-add'>
                    <i class='fa-solid fa-magnifying-glass'></i>
                </a>
           </h2>
       </div>
   </div>";
    }
?>