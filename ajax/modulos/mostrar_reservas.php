<?php
//INCLUYE EL ARCHIVO QUE CONTIENE LAS FUNCIONES DEL SISTEMA
//**********************************************************************
include ('sistema.php');

//CREA UNA VARIABLE MEDIANTE EL NOMBRE DEL HOST LOCAL
//**********************************************************************
$cliente = gethostname();

//LLAMA A FUNCION QUE SE ENCUENTRA DENTRO DEL ARCHIVO SISTEMA.PHP
//SE ENVIA UN PARAMETROS --> (cliente) 
//**********************************************************************
MostrarReserva($cliente);


