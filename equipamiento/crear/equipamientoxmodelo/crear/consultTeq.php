<?php
    $consultteq= "SELECT id_tipo_eq, nombre_tipo_eq FROM tipo_equipamiento";
    if($resultteq= mysqli_query($cnx, $consultteq)) {
        while($rowteq= mysqli_fetch_array($resultteq)) {
            echo "
        <label for='tipo' class='lbl-xmodel'>
            <input name='teq' id='tipo' type='radio' value='".$rowteq['id_tipo_eq']."' class='inp-model'>".$rowteq['nombre_tipo_eq']."
        </label>";
        }   
    }
?>