<?php
    if(isset($_POST["tipo"])) {
        $type= $_POST["tipo"];
        $id= $_POST["id"];
        $actualizar= "UPDATE tipo_equipamiento SET nombre_tipo_eq= '$type' WHERE id_tipo_eq = '$id'";
        if(mysqli_query($cnx, $actualizar)) {
            echo "<form action='' class='frm-tipo-create'>
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
            echo "<form action='' class='frm-tipo-create'>
            <div class='cont-img'>
                <img class='img-tipo-create' src='../../../../assents/img/lagicons/test-failed-svgrepo-com.svg' alt=''>
            </div>
            <p class='p-create'>
                No se puede crear el registro
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
        }
    } else {
        echo "<form action='' class='frm-tipo-create'>
        <div class='cont-img'>
            <img class='img-tipo-create' src='../../../../assents/img/lagicons/error-page-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-create'>
            El recurso solicitado no esta disponible
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
    }
?>