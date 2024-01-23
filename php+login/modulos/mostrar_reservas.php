<?php
session_start();

 $varsesion = $_SESSION['usuario'];             
 
 if ($varsesion == null || $varsesion = '') {
  header("location:modulos/login.php");
  die();
}else{

//INCLUYE EL ARCHIVO QUE CONTIENE LAS FUNCIONES DEL SISTEMA
//**********************************************************************
include ('sistema.php');

//CREA UNA VARIABLE MEDIANTE EL NOMBRE DEL HOST LOCAL
//**********************************************************************
$cliente = $varsesion;

//LLAMA A FUNCION QUE SE ENCUENTRA DENTRO DEL ARCHIVO SISTEMA.PHP
//SE ENVIA UN PARAMETROS --> (cliente) 
//**********************************************************************
MostrarReserva($cliente);	
}


