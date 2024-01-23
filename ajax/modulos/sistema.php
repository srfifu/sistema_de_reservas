<?php
#DEFINE LA ZONA HORARIA DEL SISTEMA
#**********************************************************************
date_default_timezone_set('America/Argentina/Mendoza');
$zonahoraria = date_default_timezone_get();

    #EJECUTA LA FUNCION VERIFICACION DE RESERVA MEDIANTE CHECK-IN Y CHECK-OUT
    #******************************************************************
    function VerificarReserva($fechaInicio, $fechaFin){
        include('conexion.php');
        include('../plantillas/plantilla_variables.php');
        $fechaInicio = $_GET['fechaInicio'];
        $fechaFin = $_GET['fechaFin'];
        $fechaInicio_date = strtotime($fechaInicio);
        $fechaFin_date = strtotime($fechaFin);
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
        }else{
            echo $habitacionSimpleUno;
            foreach ($fechaExiste as &$f_e) {
                echo '<li class="list-group-item"><h3>Esta reservada el dia: ';
                echo $f_e[0];
                echo $f_e[1];
                echo "</h3></li>";
            }
            echo $habitacionSimpleDos;
        }
        if (empty($fechaExisteDos)) {
            echo $habitacionDoble;
        }else{
            echo $habitacionDobleUno;
            foreach ($fechaExisteDos as &$f_e_d) {
                echo '<li class="list-group-item"><h3>Esta reservada el dia: ';
                echo $f_e_d[0];
                echo $f_e_d[1];
                echo "</h3></li>";
            }
            echo $habitacionDobleDos;
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
        include('../plantillas/plantilla_funciones.php');
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