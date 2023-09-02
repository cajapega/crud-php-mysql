<?php

function conexion(){
    
    $host = "localhost";
    $user = "root";
    $pass = ""; 

    $bd = "usuarios-crud-php";

    #Genera la conexion, la variable pasa el metodo con los argumentos
    $connect = mysqli_connect($host, $user, $pass);
    #Se selecciona la conexion y la bd
    mysqli_select_db($connect, $bd);
}

?>