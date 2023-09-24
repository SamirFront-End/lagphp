<?php
    if(isset($_GET["ide"])) {
        $id= $_GET["ide"];
        $consult= "SELECT * FROM tipo_equipamiento WHERE id_tipo_eq = '$id'";
        if($result= mysqli_query($cnx, $consult)) {
            $rows= mysqli_fetch_array($result);
            echo "<form method='POST' action='sucess.php' class='frm-tipo-edit'>
            <div class='cont-img'>
                <img class='img-tipo-edit' src='../../../../assents/img/lagicons/document-add-svgrepo-com.svg' alt=''>
            </div>
            <p class='p-edit'>
                Ingresar el nuevo valor
            </p>
            <div class='cont-inp-editype'>
                <input type='text' name='id' value= '$id' style='display: none;'>
                <input type='text' class='inp-edit' name='tipo' value= ' ".$rows['nombre_tipo_eq']." '>
            </div>
            <div class='cont-btns'>
                <input class='btn-editype' type='submit' value='Guardar'>
            </div>
        </form>";
        } else {
            echo "<form method='POST' action='sucess.php' class='frm-tipo-edit'>
            <div class='cont-img'>
                <img class='img-tipo-edit' src='../../../../assents/img/lagicons/test-failed-svgrepo-com.svg' alt=''>
            </div>
            <p class='p-edit'>
                Conexion fallida con la base de datos
            </p>
            <div class='cont-btns'>
                <a href='../view.php' class='a-btn'>
                    <div class='btn-fail'>
                        <p class='p-btn'>Regresar</p>
                    </div>
                </a>
            </div>
        </form>";
        }
    } else {
        echo "<form method='POST' action='sucess.php' class='frm-tipo-edit'>
        <div class='cont-img'>
            <img class='img-tipo-edit' src='../../../../assents/img/lagicons/error-page-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-edit'>
            El recurso al que intentas ingresar no esta disponible
        </p>
        <div class='cont-btns'>
            <a href='../view.php' class='a-btn'>
                <div class='btn-fail'>
                    <p class='p-btn'>Regresar</p>
                </div>
            </a>
        </div>
    </form>";
    }
?>