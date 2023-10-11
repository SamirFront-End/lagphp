<?php
    $consulteq= "SELECT id_equipamiento, nombre_eq FROM equipamiento";
    if($resulteq= mysqli_query($cnx, $consulteq)) {
        while($roweq= mysqli_fetch_array($resulteq)) {
            echo "
        <label for='equ' class='lbl-xmodel'>
            <input name='eq[]' id='equ' type='checkbox' value='".$roweq['id_equipamiento']."' class='inp-model'>".$roweq['nombre_eq']."
        </label>";
        }   
    }
?>