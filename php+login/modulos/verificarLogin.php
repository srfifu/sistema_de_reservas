<?php
$usuario = $_GET['username'];
$contraseña = $_GET['password'];
include("sistema.php");
Login($usuario, $contraseña);

        



