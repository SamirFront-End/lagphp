<?php
    if (@$id= $_GET["ide"]) {
    $consult= "SELECT * FROM vehiculos WHERE Id_vehiculo = '$id'";

    if($result = mysqli_query($cnx, $consult)) {
        $row= mysqli_fetch_array($result);
        echo "<div class='icon-confirm'>
        <img class='img-confirm' src='../../assents/img/lagicons/car-repairadvertencia-car-svgrepo-com.svg' alt=''>
        <div class='advert-confirm'>
            <p class='p-advert-confirm'>
                <strong>ADVERTENCIA:</strong> El registro que sea eliminado no se podra recuperar, ni la informacion asociada a sus registros
            </p>
        </div>
    </div>
    <div class='cont-frm-confirm'>
        <form method= 'POST' action='../../vehiculos/borrar/sucess_delete.php' class='frm-confirm'>
            <legend>
                <div class='header-confirm'>
                    <p class='p-head-confirm'>
                        Se borrara el siguiente registro:
                    </p>
                </div>
                <div class='cont-tbl-confirm'>
                <table class='tbl-confirm'>
                    <input type= 'text' name= 'id' value= '$id' style= 'display: none'>
                    <tr>
                        <td class='head-td'>ID:</td>
                        <td class='result-td'>$id</td>
                    </tr>
                    <tr>
                        <td class='head-td'>Marca:</td>
                        <td class='result-td'>". $row['marca_veh'] ."</td>
                    </tr>
                    <tr>
                        <td class='head-td'>Serie:</td>
                        <td class='result-td'>". $row['serie_veh']."</td>
                    </tr>
                </table>
                </div>
                <div class='body-confirm'>
                    <p class='p-body-confirm'>
                        ¿Esta seguro en eliminar el registro?
                    </p>
                </div>
                <div class='btns-confirm'>
                    <div class='inp-confirm'>
                        <input class='inp-confirm' type='submit' value='Eliminar'>
                    </div>
                    <a href='../../vehiculos/consulta.php' class='a-confirm'>
                        <div class='btn-confirm'>
                            <p class='p-confirm'>
                                Cancelar
                            </p>
                        </div>
                    </a>
                </div>
            </legend>
        </form>
        
    </div>";
    }

    } else {
        echo "<section class='sct-card'>
        <article class='cards'>
            <div class='img-card'>
                <img src='../../assents/img/lagicons/error-page-svgrepo-com.svg' alt='Actualizar vehiculo' class='img-updt'>
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