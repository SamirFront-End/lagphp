<?php
    if(isset(
        $_POST["tipo"],
        $_POST["precio"]
    )) {
        $type= $_POST["tipo"];
        $price= $_POST["precio"];
        $create= "INSERT INTO equipamiento (nombre_eq, precio_eq) VALUES ('$type', $price)";
    } if(@mysqli_query($cnx, $create)) {
        echo "<section class='sct-sucess'>
        <article class='cont-sucess'>
            <div class='card-sucess'>
                <div class='head-sucess'>
                    <img class='img-head-sucess' src='../../../../assents/img/lagicons/check-circle1-svgrepo-com.svg' alt=''>
                </div>
                <div class='body-sucess'>
                    <p class='p-body-sucess'>Equipamiento creado exitosamente</p>
                </div>
                <div class='btns-sucess'>
                    <a href='./form.php' class='a-btn-sucess'>
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
                    <p class='p-body-sucess'>El registro ha fallado</p>
                </div>
                <div class='btns-sucess'>
                    <a href='./form.php' class='a-btn-sucess'>
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
    }
?>