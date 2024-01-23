<?php
function habitacion_doble_mostrar($tipo_habitacion, $check_in, $check_out)
{
            echo '<div class="card">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Habitacion Doble</h5>';
                    echo '<img src="img/';
                    echo $tipo_habitacion;
                    echo '.jpg"width="200">';
                    echo '<p class="card-text">Fecha de ingreso:';
                    echo $check_in;
                    echo '</p>';
                    echo '<p class="card-text">Fecha de salida:';
                    echo $check_out;
                    echo '</p>';
                    echo '<p class="card-text">Precio: $17.000</p>';
                echo '</div>';
            echo '</div>';
}
function habitacion_simple_mostrar($tipo_habitacion, $check_in, $check_out)
{
            echo '<div class="card">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Habitacion Simple</h5>';
                    echo '<img src="img/';
                    echo $tipo_habitacion;
                    echo '.jpg"width="200">';
                    echo '<p class="card-text">Fecha de ingreso:';
                    echo $check_in;
                    echo '</p>';
                    echo '<p class="card-text">Fecha de salida:';
                    echo $check_out;
                    echo '</p>';
                    echo '<p class="card-text">Precio:$15.000</p>';
                echo '</div>';
            echo '</div>';
}
function noLogin(){
    echo '<!DOCTYPE html>
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
                    <h5 class="card-title">Agrego el usuario o la contraseña de forma equivocado, intentelo de nuevo</h5>
                        <br><hr><br>
                        <a href="login.php" style="color:#007bff ;">Iniciar Sesion</a>
                </div>
                </div> 
            </div>
        </div>

    </body>
    </html>
    ';
}
function noRegister(){
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <title>Registrarse</title>
        
        </style>
    </head>
    <body style="background: #007bff;">
        <div class="container" style="margin-top: 300px;">
            <div class="card-container">
                <div class="card"><div class="card-body">
                    <h5 class="card-title">No se ha podido registrar, vuelve a intentarlo</h5>
                        <br><hr><br>
                        <a href="registrarse.php" style="color:#007bff ;">Volver a intentarlo</a>
                </div>
                </div> 
            </div>
        </div>

    </body>
    </html>
    ';
}
function noRegisterDos(){
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <title>Registrarse</title>
        
        </style>
    </head>
    <body style="background: #007bff;">
        <div class="container" style="margin-top: 300px;">
            <div class="card-container">
                <div class="card"><div class="card-body">
                    <h5 class="card-title">Existe ese usuario, vuelve a intentarlo</h5>
                        <br><hr><br>
                        <a href="registrarse.php" style="color:#007bff ;">Volver a intentarlo</a>
                </div>
                </div> 
            </div>
        </div>

    </body>
    </html>
    ';
}



     
                
                
          