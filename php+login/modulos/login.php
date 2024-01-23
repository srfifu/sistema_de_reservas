<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Iniciar Sesión</title>
    
    </style>
</head>
<body style="background: #007bff;">
    <div class="container" style="margin-top: 300px;">
        <div class="card-container">
            <div class="card"><div class="card-body">
                <h5 class="card-title">Iniciar Sesión</h5>
                <form method="GET" action="verificarLogin.php">
                    <input type="text" placeholder="Usuario" name="username" required style="
            padding: 10px 20px;
            margin: 10px 0;
            border: 1px solid #007bff;
            border-radius: 4px;
            ">
                    <input type="password" placeholder="Contraseña" name="password" required style="
            padding: 10px 20px;
            margin: 10px 0;
            border: 1px solid #007bff;
            border-radius: 4px;">
                    <button type="submit">Iniciar Sesión</button><br><br>
                    <a href="registrarse.php" style="color:#007bff ;">Registrarse</a>
                </form>
            </div>
            </div> 
        </div>
    </div>

</body>
</html>
