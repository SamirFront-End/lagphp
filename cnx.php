<?php
    $host= "localhost";
    $db= "lag";
    $usr= "root";
    $psw= "";

    $cnx= mysqli_connect($host, $usr, $psw, $db);

    if($cnx){
        echo "<i class='fa-solid fa-plug-circle-check'></i>";
    } else {
        echo "<i class='fa-solid fa-plug-circle-xmark'></i>";
    }
?>