<?php
    $id= $_POST["id"];
    $processDelete = "DELETE FROM tipo_equipamiento WHERE id_tipo_eq = '$id'";
    if($result = mysqli_query($cnx, $processDelete)){
        echo "<div class='cont-frm-confirm'>
        <div class='cont-sucess-delete'>
            <div class='cont-sucess-delete-img'>
                <img src='../../../../assents/img/lagicons/car-repair-car-svgrepo-com.svg' alt='' class='img-delete-sucess'>
                <div class='msg-sucess-delete'>
                    <h1 class='h1-sucess-delete'>El registro ha sido eliminado exitosamente</h1>
                </div>
            </div>
            <div class='btns-sucess-delete'>
                <a href='../view.php' class='a-sucess-delete'>
                    <div class='btn-sucess-delete'>
                        <p class='p-sucess-delete'>Ver registros</p>
                    </div>
                </a>
                <a href='../../../../equipamiento/index.php' class='a-sucess-delete'>
                    <div class='btn-sucess-delete'>
                        <p class='p-sucess-delete'>Inicio</p>
                    </div>
                </a>
            </div>
        </div>
    </div>";
    } else {
        echo "<div class='cont-frm-confirm'>
        <div class='cont-sucess-delete'>
            <div class='cont-sucess-delete-img'>
                <img src='../../../../assents/img/lagicons/car-repairx-car-svgrepo-com.svg' alt='' class='img-delete-sucess'>
                <div class='msg-sucess-delete'>
                    <h1 class='h1-sucess-delete'>No se pudo eliminar el registro seleccionado</h1>
                </div>
            </div>
            <div class='btns-sucess-delete'>
                <a href='../view.php' class='a-sucess-delete'>
                    <div class='btn-sucess-delete'>
                        <p class='p-sucess-delete'>Ver registros</p>
                    </div>
                </a>
                <a href='../../../../equipamiento/index.php' class='a-sucess-delete'>
                    <div class='btn-sucess-delete'>
                        <p class='p-sucess-delete'>Inicio</p>
                    </div>
                </a>
            </div>
        </div>
    </div>";
    }
?>