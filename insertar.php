<?php

    include("conexion.php");
    if ($conect) {
      echo "conexion exitosa";
    }else{
      echo "error al conectar la DB";
    }

     if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])){
    
         mysqli_query($conect,"INSERT INTO datos (Nombre,Pw) values ('$_POST[nombre]','$_POST[pw]')");
         echo "datos insertados corectamente";
    
     }else{
         echo "Problemas al insertar datos";
     }

?>
