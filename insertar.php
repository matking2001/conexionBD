<?php

    include("conexion.php");
    if ($conect) {
      echo "conexion exitosa";
    }else{
      echo "error al conectar la DB";
    }

    // if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])){
    //
    //     $conexion = mysqli_connect("localhost","root"," ","practica") or die("problemas con la conexión");
    //     mysqli_select_db($conexion) or die("problemas con la conexión");
    //
    //     mysqli_query($conexion,"INSERT INTO datos (Nombre,Pw) values ('$_REQUEST[nombre]','$_REQUEST[pw]')");
    //     echo "datos insertados corectamente";
    //
    // }else{
    //     echo "Problemas al insertar datos";
    // }

?>
