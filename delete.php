<?php
    include("conexion.php");
    $con=conexion();
    $sql="";
    if(isset($_GET['id'])){
        $sql="DELETE FROM usuarios WHERE id='$_GET[id]'";
        $resultado = mysqli_query($con,$sql);
        header("location:second.php");
    }else{

    }
?>