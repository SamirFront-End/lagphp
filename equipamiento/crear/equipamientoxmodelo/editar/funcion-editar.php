<?php
    if(@$ide= $_GET["ide"]) {
        $consult= "SELECT exm.*, m.serie_veh, ne.nombre_eq, te.nombre_tipo_eq FROM equipamiento_x_modelo AS exm JOIN vehiculos AS m ON exm.Id_vehiculo=m.Id_vehiculo JOIN equipamiento AS ne ON exm.id_equipamiento=ne.id_equipamiento JOIN tipo_equipamiento AS te ON exm.id_tipo_eq=te.id_tipo_eq WHERE id_eq_x_modelo= '$ide'";
        if($result= mysqli_query($cnx, $consult)) {
            $row= mysqli_fetch_array($result);
            echo "<form method='POST' action='sucess-edit.php' class='frm-tipo-create'>
            <div class='cont-img'>
                <img class='img-tipo-create' src='../../../../assents/img/lagicons/baby-car-child-svgrepo-com.svg' alt=''>
            </div>
            <p class='p-create'>
                Editar equipamiento de vehiculo
            </p>
            <div class='cont-inp-creatipo'>
                <input type='text' class='inp-create' name='id' value='$ide' style='display: none;'>
            </div>
            <div class='cont-inp-creatipo'>
                <label class='lbl-eq' for=''>Linea de vehiculo</label>
                <input type='text' class='inp-create' disabled='disabled' name='equip' value=' ".$row['serie_veh']." '>
            </div>
            <div class='cont-inp-creatipo'>
                <label class='lbl-eq' for=''>Tipo de equipamiento</label>
                <select class='inp-create' name='' id=''>
                    <option value=''>".$row['nombre_tipo_eq']."</option>
                </select>
            </div>
            <div class='cont-inp-creatipo'>
                <label class='lbl-eq' for=''>Nombre equipamiento</label>
                <select class='inp-create' name='' id=''>
                    <option value=''>".$row['nombre_eq']."</option>
                </select>
            </div>
            <div class='cont-btns'>
                <input class='btn-creatipo' type='submit' value='Guardar'>
            </div>
    </form>";
        }
    } else {
        echo "<section class='sct-card'>
        <article class='cards'>
            <div class='img-card'>
                <img src='../../../../assents/img/lagicons/error-page-svgrepo-com.svg' alt='Actualizar vehiculo' class='img-updt'>
            </div>
            <div class='body-card'>
                <h1 class='p-card'>No disponible</h1>
            </div>
            <div class='footer-card'>
                <h3 class='txt-card'>El recurso al que estas intentando ingresar no esta disponible</h3>
            </div>
        </article>
    </section>";
    }
?>