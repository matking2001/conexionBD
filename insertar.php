<?php

    include("conexion.php");
    if ($conect) {
      echo "conexion exitosa";
    }else{
      echo "error al conectar la DB";
    }

    if (isset($_POST['validar'])) {
      if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])){

        $nombre = trim($_POST['nombre']);
        $contraseña = trim($_POST['pw']);
        $datos = "INSERT INTO `datos`(`Nombre`, `Pw`) VALUES ('$nombre','$contraseña')";
        $res = mysqli_query($conect,$datos);

        echo "Datos Guardados Exitosamente";
    }else{
      echo "se produjo un error";
    }

  }


?>
