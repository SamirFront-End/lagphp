<?php

    if(isset(
        $_POST["marca"],
        $_POST["serie"],
        $_POST["modelo"],
        $_POST["bastidor"],
        $_POST["potencia"],
        $_POST["motor"],
        $_POST["cilindros"],
        $_POST["cilindrada"],
        $_POST["precio"],
        $_POST["descuento"]
    )) {
        $mark= $_POST["marca"];
        $line= $_POST["serie"];
        $model= $_POST["modelo"];
        $bstdr= $_POST["bastidor"];
        $power= $_POST["potencia"];
        $mot= $_POST["motor"];
        $cilis= $_POST["cilindros"];
        $cilia= $_POST["cilindrada"];
        $prec= $_POST["precio"];
        $dcto= $_POST["descuento"];

        $create= "INSERT INTO vehiculos (marca_veh, serie_veh, modelo_veh, bastidor_veh, potencia_veh, motor_veh, nro_cilindros_veh, cilindrada_veh, precio_veh, descuento_veh) VALUES ('$mark', '$line', '$model', '$bstdr', '$power', '$mot', '$cilis', '$cilia', '$prec', '$dcto')";

    } if (mysqli_query($cnx, $create)) {
        echo "<section class='sct-sucess'>
        <article class='cont-sucess'>
            <div class='card-sucess'>
                <div class='head-sucess'>
                    <img class='img-head-sucess' src='../../assents/img/lagicons/car-citroen-top-vehicle-svgrepo-com.svg' alt=''>
                </div>
                <div class='body-sucess'>
                    <p class='p-body-sucess'>Registro creado exitosamente</p>
                </div>
                <div class='btns-sucess'>
                    <a href='../../vehiculos/crear/index.php' class='a-btn-sucess'>
                        <div class='btn-create-more'>
                            <p class='p-btn-sucess'>Registrar otro</p>
                        </div>
                    </a>
                    <a href='../../vehiculos/index.php' class='a-btn-sucess'>
                        <div class='return'>
                            <p class='p-btn-sucess'>Ir a inicio</p>
                        </div>
                    </a>
                </div>
            </div>
        </article>
    </section>";
    } else {
        echo "<section class='sct-sucess'>
        <article class='cont-sucess'>
            <div class='card-sucess'>
                <div class='head-sucess'>
                    <img class='img-head-sucess' src='../../assents/img/lagicons/car-travel-cross-delete-svgrepo-com.svg' alt=''>
                </div>
                <div class='body-sucess'>
                    <p class='p-body-sucess'>No se pudo crear el registro</p>
                </div>
                <div class='btns-sucess'>
                    <a href='../../vehiculos/crear/index.php' class='a-btn-sucess'>
                        <div class='btn-create-more'>
                            <p class='p-btn-sucess'>Registrar otro</p>
                        </div>
                    </a>
                    <a href='../../vehiculos/index.php' class='a-btn-sucess'>
                        <div class='return'>
                            <p class='p-btn-sucess'>Ir a inicio</p>
                        </div>
                    </a>
                </div>
            </div>
        </article>
    </section>";
    }
?>