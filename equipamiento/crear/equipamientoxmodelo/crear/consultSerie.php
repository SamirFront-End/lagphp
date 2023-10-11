<?php
    $id=
    $consultSerie= "SELECT Id_vehiculo, serie_veh FROM vehiculos";
    if($resultSerie= mysqli_query($cnx, $consultSerie)) {
        while($rowSerie= mysqli_fetch_array($resultSerie)) {
            echo "
        <label for='sr' class='lbl-xmodel'>
            <input name='serie' id='sr' type='radio' value='".$rowSerie['Id_vehiculo']."' class='inp-model'>".$rowSerie['serie_veh']."
        </label>";
        }   
    }
?>