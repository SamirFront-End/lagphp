<?php
    $id= $_POST["id"];
    $eq= $_POST["equip"];
    $price= $_POST["costo"];

    $consult= "UPDATE equipamiento SET nombre_eq= '$eq', precio_eq= '$price' WHERE id_equipamiento= '$id'";
    if(mysqli_query($cnx, $consult)) {
        echo "<form method='POST' action='sucess-edit.php' class='frm-tipo-create'>
        <div class='cont-img'>
            <img class='img-tipo-create' src='../../../../assents/img/lagicons/tasks-list-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-create'>
            Registro actualizado con exito
        </p>
        <div class='btns-sucess'>
            <a href='../../equipamientos/consulta/consult.php' class='a-btn-sucess'>
                <div class='btn-create-more'>
                    <p class='p-btn-sucess'>Buscar</p>
                </div>
            </a>
            <a href='../../equipamientos/index.php' class='a-btn-sucess'>
                <div class='return'>
                    <p class='p-btn-sucess'>Ir a inicio</p>
                </div>
            </a>
        </div>
    </form>";
    } else {
        echo "<form method='POST' action='sucess-edit.php' class='frm-tipo-create'>
        <div class='cont-img'>
            <img class='img-tipo-create' src='../../../../assents/img/lagicons/test-failed-svgrepo-com.svg' alt=''>
        </div>
        <p class='p-create'>
            La actualizacion ha fallado
        </p>
        <div class='btns-sucess'>
            <a href='../../equipamientos/consulta/consult.php' class='a-btn-sucess'>
                <div class='btn-create-more'>
                    <p class='p-btn-sucess'>Buscar</p>
                </div>
            </a>
            <a href='../../equipamientos/index.php' class='a-btn-sucess'>
                <div class='return'>
                    <p class='p-btn-sucess'>Ir a inicio</p>
                </div>
            </a>
        </div>
    </form>";
    }
?>