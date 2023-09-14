<?php

    $ide=   $_POST["ide"];
    $mark=  $_POST["marca"];
    $line=  $_POST["serie"];
    $model= $_POST["modelo"];
    $bstdr= $_POST["bastidor"];
    $power= $_POST["potencia"];
    $mot=   $_POST["motor"];
    $cil=   $_POST["cilindros"];
    $cilda= $_POST["cilindrada"];
    $price= $_POST["precio"];
    $dcto=  $_POST["descuento"];

    $consult = "UPDATE vehiculos SET marca_veh= '$mark', serie_veh= '$line', modelo_veh= '$model', bastidor_veh= '$bstdr', potencia_veh= '$power', motor_veh= '$mot', nro_cilindros_veh= '$cil', cilindrada_veh= '$cilda', precio_veh= '$price', descuento_veh= '$dcto' WHERE Id_vehiculo= '$ide'";

    if(mysqli_query($cnx, $consult)) {

        echo "<article class='cont-sucess'>
        <div class='card-sucess'>
            <div class='head-sucess'>
                <img class='img-head-sucess' src='../../assents/img/lagicons/car-repair-car-svgrepo-com.svg' alt=''>
            </div>
            <div class='body-sucess'>
                <p class='p-body-sucess'>Actualizacion exitosa</p>
            </div>
            <div class='btns-sucess'>
                <a href='../../vehiculos/consulta.php' class='a-btn-sucess'>
                    <div class='btn-create-more'>
                        <p class='p-btn-sucess'>Buscar</p>
                    </div>
                </a>
                <a href='../../vehiculos/index.php' class='a-btn-sucess'>
                    <div class='return'>
                        <p class='p-btn-sucess'>Ir a inicio</p>
                    </div>
                </a>
            </div>
        </div>
    </article>";
    } else {

        echo "<article class='cont-sucess'>
        <div class='card-sucess'>
            <div class='head-sucess'>
                <img class='img-head-sucess' src='../../assents/img/lagicons/car-repairx-car-svgrepo-com.svg' alt=''>
            </div>
            <div class='body-sucess'>
                <p class='p-body-sucess'>Actualizacion fallida</p>
            </div>
            <div class='btns-sucess'>
                <a href='../../vehiculos/consulta.php' class='a-btn-sucess'>
                    <div class='btn-create-more'>
                        <p class='p-btn-sucess'>Buscar</p>
                    </div>
                </a>
                <a href='../../vehiculos/index.php' class='a-btn-sucess'>
                    <div class='return'>
                        <p class='p-btn-sucess'>Ir a inicio</p>
                    </div>
                </a>
            </div>
        </div>
    </article>";
    }
?>