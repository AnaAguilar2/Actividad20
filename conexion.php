<?php
function conexion(){
    $con = mysqli_connect('localhost', 'root', '', 'prograweb') or die("No se puede conectar con la base de datos");
    return $con;
}
?>