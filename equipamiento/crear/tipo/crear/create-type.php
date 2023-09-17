<?php
    
    if(isset($_POST["tipo"])) {
        $tipo= $_POST["tipo"];
        $create= "INSERT INTO tipo_equipamiento (nombre_tipo_eq) VALUES ('$tipo')";
    } if(mysqli_query($cnx, $create)) {
        echo " <form action='' class='frm-tipo-create'>
        <div class='cont-img'>
            <img class='img-tipo-create' src='../../../../assents/img/lagicons/tasks-list-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-create'>
            Registro creado exitosamente
        </p>
        <div class='cont-btn-creatype'>
            <a href='../view.php' class='a-create-type'>
                <div class='btn-creatype'>
                    <p class='p-create-type'>
                        Ver registros
                    </p>
                </div>
            </a>
        </div>
    </form>";
    } else {
        echo " <form action='' class='frm-tipo-create'>
        <div class='cont-img'>
            <img class='img-tipo-create' src='../../../../assents/img/lagicons/test-failed-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-create'>
            No se pudo crear el registro
        </p>
        <div class='cont-btn-creatype'>
            <a href='' class='a-create-type'>
                <div class='btn-creatype'>
                    <p class='p-create-type'>
                        Ver registros
                    </p>
                </div>
            </a>
        </div>
    </form>";
    }
?>