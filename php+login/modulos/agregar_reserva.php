<?php
session_start();

 $varsesion = $_SESSION['usuario'];             
 
 if ($varsesion == null || $varsesion = '') {
  header("location:modulos/login.php");
  die();
}
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

    
    <div class="container-center" >
      <div class="form-container">
        <h2>Agregar Reserva</h2>
        <form method="GET" action="verificarReserva.php">
            <label for="fechaInicio" style="">Fecha de Ingreso:</label>
            <input type="date" id="fechaInicio" name="fechaInicio" required>

            <label for="fechaFin">Fecha de Salida:</label>
            <input type="date" id="fechaFin" name="fechaFin" required>

            <button type="submit">Reservar</button>
        </form>
      </div>  
    </div>

</body>
</html>
