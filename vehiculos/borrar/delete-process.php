<?php
    $id= $_POST["id"];

    $consult= "DELETE FROM vehiculos WHERE Id_vehiculo= '$id'";
    if (mysqli_query($cnx, $consult)) {
        echo "<div class='cont-sucess-delete'>
        <div class='cont-sucess-delete-img'>
            <img src='../../assents/img/lagicons/car-repair-car-svgrepo-com.svg' alt='' class='img-delete-sucess'>
            <div class='msg-sucess-delete'>
                <h1 class='h1-sucess-delete'>El registro ha sido eliminado exitosamente</h1>
            </div>
        </div>
        <div class='btns-sucess-delete'>
            <a href='../../vehiculos/consulta.php' class='a-sucess-delete'>
                <div class='btn-sucess-delete'>
                    <p class='p-sucess-delete'>Consulta</p>
                </div>
            </a>
            <a href='../../vehiculos/index.php' class='a-sucess-delete'>
                <div class='btn-sucess-delete'>
                    <p class='p-sucess-delete'>Inicio</p>
                </div>
            </a>
        </div>
    </div>";
    return;
    } else {
        echo "<div class='cont-sucess-delete'>
        <div class='cont-sucess-delete-img'>
            <img src='../../assents/img/lagicons/car-repairx-car-svgrepo-com.svg' alt='' class='img-delete-sucess'>
            <div class='msg-sucess-delete'>
                <h1 class='h1-sucess-delete'>El registro no se pudo eliminar</h1>
            </div>
        </div>
        <div class='btns-sucess-delete'>
            <a href='../../vehiculos/consulta.php' class='a-sucess-delete'>
                <div class='btn-sucess-delete'>
                    <p class='p-sucess-delete'>Consulta</p>
                </div>
            </a>
            <a href='../../vehiculos/index.php' class='a-sucess-delete'>
                <div class='btn-sucess-delete'>
                    <p class='p-sucess-delete'>Inicio</p>
                </div>
            </a>
        </div>
    </div>";
    }
?>