<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post">
        <h2> Bienvenidos</h2>
        <p>Realiza tu reserva</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="nombre" >
            <img class="input-icon" src="images/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="number" name="personas" placeholder="Numero de personas" >
            <img class="input-icon" src="images/N personas.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="input-icon" src="images/Contacto.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="date" name="fecha" placeholder="Fecha" >
        </div>

        <div class="input-wrapper">
            <input type="time" name="hora" placeholder="Hora" >
        </div>

        <input class="btn" type="submit" name="reserva" value="Reservar">

    </form>

    <?php
        include("registar.php");
    ?>

</body>
</html>