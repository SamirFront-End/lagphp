<?php
    @$serie= $_POST["serie"];
    @$teq= $_POST["teq"];
    $eqArreglo= isset($_POST["eq"]) ? $_POST["eq"] : [];
    $sucess= false;

    foreach($eqArreglo as $eq) {
        $crear= "INSERT INTO equipamiento_x_modelo (Id_vehiculo, id_tipo_eq, id_equipamiento) VALUE ('$serie', '$teq', '$eq')";
        if(mysqli_query($cnx, $crear)) {
            $sucess= true;
        }  
    }
    if($sucess) {
        echo "<section class='sct-sucess'>
            <article class='cont-sucess'>
                <div class='card-sucess'>
                    <div class='head-sucess'>
                        <img class='img-head-sucess' src='../../../../assents/img/lagicons/tools-svgrepo-com.svg' alt=''>
                    </div>
                    <div class='body-sucess'>
                        <p class='p-body-sucess'>Se ha configurado de forma exitosa el equipamiento en el vehiculo</p>
                    </div>
                    <div class='btns-sucess'>
                        <a href='form.php' class='a-btn-sucess'>
                            <div class='btn-create-more'>
                                <p class='p-btn-sucess'>Registrar otro</p>
                            </div>
                        </a>
                        <a href='../index.php' class='a-btn-sucess'>
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
                        <img class='img-head-sucess' src='../../../../assents/img/lagicons/xmark-circle-svgrepo-com.svg' alt=''>
                    </div>
                    <div class='body-sucess'>
                        <p class='p-body-sucess'>La configuracion ha fallado</p>
                    </div>
                    <div class='btns-sucess'>
                        <a href='form.php' class='a-btn-sucess'>
                            <div class='btn-create-more'>
                                <p class='p-btn-sucess'>Reintentar registro</p>
                            </div>
                        </a>
                        <a href='../index.php' class='a-btn-sucess'>
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

