<?php
//INCLUYE EL ARCHIVO QUE CONTIENE LAS FUNCIONES DEL SISTEMA
//**********************************************************************
include ('sistema.php');

//RECIBE POR EL METODO _GET DOS PARAMETROS --> (fechaInicio, fechaFin)
//********************************************************************** 
$fechaInicio = $_GET['fechaInicio'];
$fechaFin = $_GET['fechaFin'];

//LLAMA A FUNCION QUE SE ENCUENTRA DENTRO DEL ARCHIVO SISTEMA.PHP
//SE ENVIA DOS PARAMETROS --> (fechaInicio, fechaFin) 
//**********************************************************************
VerificarReserva($fechaInicio, $fechaFin);
