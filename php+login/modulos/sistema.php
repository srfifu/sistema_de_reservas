<?php
session_start();

#DEFINE LA ZONA HORARIA DEL SISTEMA
#**********************************************************************
date_default_timezone_set('America/Argentina/Mendoza');
$zonahoraria = date_default_timezone_get();

    #EJECUTA LA FUNCION VERIFICACION DE USUARIO Y CONTRASEÑA
    #******************************************************************
    function Login($usuario, $contraseña){

        include("conexion.php");
        

        $consulta = "SELECT * FROM usuario WHERE usuario='$usuario' and contraseña='$contraseña'";

        $resultado=mysqli_query($conexion, $consulta);

        $filas=mysqli_num_rows($resultado);
        if ($filas>0) {
          $_SESSION['usuario'] = $usuario;
          echo "loguado con exito";
          header("location:../index.php");
        }else{
          include('../plantillas/plantilla_funciones.php');
          noLogin();
        }
    }

    #EJECUTA LA FUNCION REGISTRO DE USUARIO
    #******************************************************************
    function Registrar($usuario, $contraseña){

        include("conexion.php");

        $consulta = "SELECT * FROM usuario WHERE usuario='$usuario'";

        $resultado=mysqli_query($conexion, $consulta);

        $filas=mysqli_num_rows($resultado);
        if ($filas>0) {
          include('../plantillas/plantilla_funciones.php');
              noRegisterDos();
        }else{
            $consultaDos = "INSERT INTO usuario(usuario,contraseña) VALUES ('$usuario', '$contraseña') ";

            $resultadoDos=mysqli_query($conexion, $consultaDos);

            $filasDos=mysqli_num_rows($resultadoDos);
            if ($filasDos>0) {
              $_SESSION['usuario'] = $usuario;

              header("location:index.php");
            }else{
              include('../plantillas/plantilla_funciones.php');
              noRegister();
            }
        }
    }

    #EJECUTA LA FUNCION VERIFICACION DE RESERVA MEDIANTE CHECK-IN Y CHECK-OUT
    #******************************************************************
    function VerificarReserva($fechaInicio, $fechaFin){
        include('conexion.php');
        include('../plantillas/plantilla_variables.php');

        $fechaInicio_date = strtotime($fechaInicio);
        $fechaFin_date = strtotime($fechaFin);

        if ($fechaFin < $fechaInicio) {
            echo '<div class="alerta_fecha_mal"><h4>Puso la fecha de salida dias antes que la fecha de ingreso.<hr style="border:1px solid white ;"><span>Agregue de forma correcta las fechas.</span></h4></div>
        <div class="card-container">';
        }else{
            $dia = 86400; 

            $fechaDisponible = [];
            $fechaExiste = [];
            $fechaDisponibleDos = [];
            $fechaExisteDos = [];
            
            for($i = $fechaInicio_date; $i<= $fechaFin_date; $i+=$dia){
                $fechaUno = date("d-m-Y", $i);
                $consulta = "SELECT * FROM habitaciones WHERE habitacion_simple ='$fechaUno'";
                $consultaDos = "SELECT * FROM habitaciones WHERE habitacion_doble ='$fechaUno'";
                $resultado=mysqli_query($conexion, $consulta);
                $resultadoDos = mysqli_query($conexion, $consultaDos);
                $filas=mysqli_num_rows($resultado);
                $filasDos=mysqli_num_rows($resultadoDos);
                if ($filas>0) {
                    array_push($fechaExiste, $fechaUno);            
                    if ($filasDos>0) {          
                          array_push($fechaExisteDos, $fechaUno);
                        }else{
                          array_push($fechaDisponibleDos, $fechaUno);
                        }
                }else{
                    array_push($fechaDisponible, $fechaUno);
                      if ($filasDos>0) {          
                       array_push($fechaExisteDos, $fechaUno);   
                      }else{
                        array_push($fechaDisponibleDos, $fechaUno);
                      }
                }
                               
            }

            if (empty($fechaExiste)) {
                echo $habitacionSimple;
                echo '<form method="GET" action="guardarReserva.php">
                    <input type="date" id="fechaInicio" name="fechaInicio" value="';
                echo $fechaInicio;        
                echo '" min="" max="" style="display: none;">';
                echo '<input type="date" id="fechaFin" name="fechaFin" value="';
                echo $fechaFin;        
                echo '" min="" max="" style="display: none;">';
                echo '<input type="text" name="habitacion" value="habitacion_simple" style="display: none;"><hr>
                       <button type="submit">Reservar</button>
                    </form> 
                    </div>
                </div>';   
                
            }else{
                echo $habitacionSimpleUno;
                foreach ($fechaExiste as &$f_e) {
                    echo '<li class="list-group-item"><h4>Esta reservada la fecha: ';
                    echo $f_e;
                    echo "</h3></li>";
                }
                echo $habitacionSimpleDos;
            }
            if (empty($fechaExisteDos)) {
                echo $habitacionDoble;
                echo '<form method="GET" action="guardarReserva.php">
                    <input type="date" id="fechaInicio" name="fechaInicio" value="';
                echo $fechaInicio;        
                echo '" min="" max="" style="display: none;">';
                echo '<input type="date" id="fechaFin" name="fechaFin" value="';
                echo $fechaFin;        
                echo '" min="" max="" style="display: none;">';
                echo '<input type="text" name="habitacion" value="habitacion_doble" style="display: none;"><hr>
                       <button type="submit">Reservar</button>
                    </form> 
                    </div>
                </div>'; 
            }else{
                echo $habitacionDobleUno;

                foreach ($fechaExisteDos as &$f_e_d) {
                    echo '<li class="list-group-item"><h4>Esta reservada la fecha: ';
                    echo $f_e_d;
                    echo "</h4></li>";
                }
                echo $habitacionDobleDos;
            }
        }
        

    }

   #EJECUTA LA FUNCION GUARDAR RESERVA EN TABLA "RESERVAS"
    #******************************************************************
    function GuardarReserva($cliente,$fechaInicio, $fechaFin,$tipo_habitacion){

        #INCLUYE ARCHIVO QUE REALIZA LA CONEXION A LA BASE DE DATOS
        #**********************************************************************
        include('conexion.php');

        $ReservaInsert = ("INSERT INTO reservas(
            cliente,
            check_in,
            check_out,
            tipo_habitacion
        )
        VALUES (
            '".$cliente. "',
            '".$fechaInicio."',
            '".$fechaFin."',
            '".$tipo_habitacion."'
        )");
        $Inserts = mysqli_query($conexion, $ReservaInsert);
        if ($Inserts>0) {
          GuardarHabitacion($cliente,$fechaInicio, $fechaFin,$tipo_habitacion);
        }else{
          echo "ERROR";
        }

    }

   #EJECUTA LA FUNCION GUARDAR RESERVA EN TABLA "HABITACIONES"
    #******************************************************************
    function GuardarHabitacion($cliente,$fechaInicio, $fechaFin,$tipo_habitacion){

        #INCLUYE ARCHIVO QUE REALIZA LA CONEXION A LA BASE DE DATOS
        #**********************************************************************
        include('conexion.php');

        $dia = 86400; # 24 horas * 60 minutos por hora * 60 segundos por minuto  (24*60*60)

        $fechaInicio_date = strtotime($fechaInicio);
        $fechaFin_date = strtotime($fechaFin);

        for($i = $fechaInicio_date; $i<= $fechaFin_date; $i+=$dia){
            $fechaUno = date("d-m-Y", $i);
            $Habitacion_Insert = ("INSERT INTO habitaciones(
                cliente, 
                $tipo_habitacion
            )
            VALUES (
                '".$cliente. "',
                '".$fechaUno."'
            )");
            $Insert = mysqli_query($conexion, $Habitacion_Insert);
            
        }
    }

   #EJECUTA LA FUNCION MOSTRAR RESERVAS ACTUALES ORDENADAS POR CHECK_IN
    #******************************************************************
    function MostrarReserva($cliente){

        #INCLUYE ARCHIVO QUE REALIZA LA CONEXION A LA BASE DE DATOS
        #**********************************************************************
        include('conexion.php');
        include('plantillas/plantilla_funciones.php');
        $reservas = "SELECT * FROM reservas WHERE cliente='$cliente' ORDER BY check_in DESC";
        $resultado = mysqli_query($conexion, $reservas);
        while($row = mysqli_fetch_assoc($resultado) )
        {  
            if ($row['tipo_habitacion'] == "habitacion_doble") {
                habitacion_doble_mostrar($row['tipo_habitacion'], $row['check_in'], $row['check_out']);
            }else{
                habitacion_simple_mostrar($row['tipo_habitacion'], $row['check_in'], $row['check_out']);  
            }
            

        } mysqli_free_result($resultado); 
   }


?>