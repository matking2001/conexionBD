<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario</title>
</head>
<body>
  <div class="formulario">
    <form class=""  method="post">
        <br>
        <label class="label" for="">Nombre</label>
        <br>
        <input class="input" type="text" name="nombre" value="">
        <br>
        <br>
        <label class="label2" for="">Contraseña</label>
        <br>
        <input class="input" type="password" name="pw" value="">
        <br>
        <br>
        <input class="enviar" type="submit" name="" value="Enviar">
    </form>
  </div>
  <?php

    include("insertar.php");
   ?>
</body>
</html>
