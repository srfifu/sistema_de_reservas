<?php
//INCLUYE EL ARCHIVO QUE CONTIENE LAS FUNCIONES DEL SISTEMA
//**********************************************************************
include ('sistema.php'); 

//RECIBE POR EL METODO _GET TRES PARAMETROS --> (fechaInicio, fechaFin, habitacion)
//********************************************************************** 
$fechaInicio = $_GET['fechaInicio'];
$fechaFin = $_GET['fechaFin'];
$tipo_habitacion = $_GET['habitacion'];

//CREA UNA VARIABLE MEDIANTE EL NOMBRE DEL HOST LOCAL
//**********************************************************************
$cliente = gethostname();

//LLAMA A FUNCION QUE SE ENCUENTRA DENTRO DEL ARCHIVO SISTEMA.PHP
//SE ENVIA CUATRO PARAMETROS --> (cliente,fechaInicio, fechaFin, habitacion)
//********************************************************************** 
GuardarReserva($cliente,$fechaInicio, $fechaFin,$tipo_habitacion);
