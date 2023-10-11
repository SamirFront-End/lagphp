<?php
    if(@$id= $_GET["ide"]) {
        $consult= "SELECT * FROM equipamiento WHERE id_equipamiento= '$id'";

        if($result= mysqli_query($cnx, $consult)) {
            $rows=mysqli_fetch_array($result);
            echo "<div class='icon-confirm'>
            <img class='img-confirm' src='../../../../assents/img/lagicons/delete-fill-svgrepo-com.svg' alt=''>
            <div class='advert-confirm'>
                <p class='p-advert-confirm'>
                    <strong>ADVERTENCIA:</strong> El registro que sea eliminado no se podra recuperar, ni la informacion asociada a sus registros
                </p>
            </div>
        </div>
        <div class='cont-frm-confirm'>
            <form method= 'POST' action='sucess-delete.php' class='frm-confirm'>
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
                            <td class='head-td'>Equipamiento:</td>
                            <td class='result-td'>". $rows['nombre_eq'] ."</td>
                        </tr>
                        <tr>
                            <td class='head-td'>Precio:</td>
                            <td class='result-td'>". $rows['precio_eq']."</td>
                        </tr>
                    </table>
                    </div>
                    <div class='body-confirm'>
                        <p class='p-body-confirm'>
                            ¿Esta seguro en eliminarlo?
                        </p>
                    </div>
                    <div class='btns-confirm'>
                        <div class='inp-confirm'>
                            <input class='inp-confirm' type='submit' value='Eliminar'>
                        </div>
                        <a href='../index.php' class='a-confirm'>
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
    }
?>