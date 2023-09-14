<?php
    $ide= $_GET["ide"];
    $consulta = "SELECT * FROM vehiculos WHERE Id_vehiculo = '$ide'";
    if($result= mysqli_query($cnx, $consulta)) {
        $row= mysqli_fetch_array($result);
        echo "<section>
        <form method='POST' action='../../vehiculos/editar/sucess.php' class='frm-create'>
            <fieldset class='fld-create'>
                <legend class='leg-create'>Actualizar vehiculo</legend>
                <div class='creation'>
                    <div class='field-create'>
                        <label class='lbl-create' for='' style= 'display: none'>Id Vehiculo</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='ide' value='$ide' readonly style= 'display: none'>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Marca</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='marca' value='".$row['marca_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Serie</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='serie' value='".$row['serie_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Modelo</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='modelo' value='".$row['modelo_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>#Bastidor</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='bastidor' value='".$row['bastidor_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Potencia</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='potencia' value='".$row['potencia_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Motor</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='motor' value='".$row['motor_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>#Cilindros</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='cilindros' value='".$row['nro_cilindros_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Cilindrada</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='text' class='inp-create' name='cilindrada' value='".$row['cilindrada_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Precio</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='number' class='inp-create' name='precio' value='".$row['precio_veh']."' required>
                    </div>
                    <div class='field-create'>
                        <label class='lbl-create' for=''>Descuento</label>
                    </div>
                    <div class='inp-field-create'>
                        <input class='inp-create' type='number' class='inp-create' name='descuento' value='".$row['descuento_veh']."' required>
                    </div>
                    <div class='cont-btn'>
                        <input class='btn-submit' type='submit' name='send' value= 'Actualizar'>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>";
    }
?>