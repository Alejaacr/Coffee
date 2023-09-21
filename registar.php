<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['personas']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['hora']) >= 1 
      ) { 
            $name = trim($_POST['name']);
            $personas = trim($_POST['personas']);
            $phone = trim($_POST['phone']);
            $fecha = trim($_POST['fecha']);
            $hora = trim($_POST['hora']);
            $consulta = "INSERT INTO datos(nombre, numero de personas, telefono, fecha, hora)
               VALUES('$name', '$personas', '$phone', '$fecha', '$hora')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
             ?>
                <h3 class="success" >Tu reserva se a realizado</h3>
            <?php
            } else {
             ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
          }
        } else { 
            ?>
                 <h3 class="error">Llena todos los campos</h3>
            <?php
    
       }

}

?>