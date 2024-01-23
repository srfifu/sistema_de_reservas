<?php          
 include ('sistema.php');
 $fechaInicio = $_GET['fechaInicio'];
 $fechaFin = $_GET['fechaFin'];
 $habitacion = $_GET['habitacion'];
 $cliente = gethostname();
 GuardarReserva($cliente,$fechaInicio, $fechaFin,$habitacion);       
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/llave.ico">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agregar Reserva</title>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo"><img src="../img/llave.png" width="70"></div>
            <ul class="nav-list">
                <li><a onclick="location.href='../index.php'" >Reservas actuales </a></li>
                <li><a onclick="location.href='agregar_reserva.php'" id="activado"> Agregar reserva</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2 class="text-center mt-5">¡¡ Se guardo tu reserva con exito !!</h2>
        <div class="card-container">
           <a onclick="location.href='../index.php'" id="activadoDos">Ver reservas actuales</a>  
        </div>
    </div>
    
</body>
</html>


