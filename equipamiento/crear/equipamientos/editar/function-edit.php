<?php
    if(@$ide= $_GET["ide"]) {
        $consult= "SELECT * FROM equipamiento WHERE id_equipamiento = '$ide'";
        if($result= mysqli_query($cnx, $consult)) {
            $row= mysqli_fetch_array($result);
            echo "<form method='POST' action='sucess-edit.php' class='frm-tipo-create'>
                <div class='cont-img'>
                    <img class='img-tipo-create' src='../../../../assents/img/lagicons/document-add-svgrepo-com.svg' alt=''>
                </div>
                <p class='p-create'>
                    Editar equipamiento
                </p>
                <div class='cont-inp-creatipo'>
                    <input type='text' class='inp-create' name='id' value='$ide' style='display: none;'>
                </div>
                <div class='cont-inp-creatipo'>
                    <label class='lbl-eq' for=''>Nombre equipamiento</label>
                    <input type='text' class='inp-create' name='equip' value=' ".$row['nombre_eq']." '>
                </div>
                <div class='cont-inp-creatipo'>
                    <label class='lbl-eq' for=''>Precio equipamiento</label>
                    <input class='inp-create' type='text' name='costo' value=' ".$row['precio_eq']." ' required>
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