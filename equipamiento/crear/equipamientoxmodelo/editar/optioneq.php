<?php
    $consulteq= "SELECT id_equipamiento, nombre_eq FROM equipamiento";
    if($resulteq= mysqli_query($cnx, $consulteq)) {
        while($roweq= mysqli_fetch_array($resulteq)) {
            echo "
            <option value=''>".$roweq['nombre_eq']."</option>";
        }   
    }
?>