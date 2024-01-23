<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/llave.ico">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Reservas Actuales</title>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo"><img src="img/llave.png" width="70"></div>
            <ul class="nav-list">
                <li><a onclick="location.href='index.php'" id="activado">Reservas actuales </a></li>
                <li><a onclick="location.href='modulos/agregar_reserva.php'"> Agregar reserva</a></li>
            </ul>
        </nav>
    </header>

    
    <div class="container">
        <h2 class="text-center mt-5">Reservas Actuales</h2>
        <div class="card-container">
        <?php
        include ('modulos/mostrar_reservas.php');
        ?>
        </div>
    </div>

</body>
</html>