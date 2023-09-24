<?php
    if($id= $_GET["ide"]) {
    $consult = "SELECT * FROM tipo_equipamiento WHERE id_tipo_eq = '$id'";
    
    if($result= mysqli_query($cnx, $consult)) {
        $row= mysqli_fetch_array($result);
        echo "<form method= 'POST' action='./delete-sucess.php' class='frm-confirm'>
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
                    <td class='head-td'>Tipo:</td>
                    <td class='result-td'>". $row['nombre_tipo_eq'] ."</td>
                </tr>
            </table>
            </div>
            <div class='body-confirm'>
                <p class='p-body-confirm'>
                    ¿Esta seguro en eliminar el registro?
                </p>
            </div>
            <div class='btns-confirm'>
                <div class='inp-confirm'>
                    <input class='inp-confirm' type='submit' value='Eliminar'>
                </div>
                <a href='../view.php' class='a-confirm'>
                    <div class='btn-confirm'>
                        <p class='p-confirm'>
                            Cancelar
                        </p>
                    </div>
                </a>
            </div>
        </legend>
    </form> ";
    }
    }
?>