<?php

session_start ();
if (!isset($_SESSION["id_usuario"])){
    $tipoUsuario = "Invitado";
} else {
    $tipoUsuario = $_SESSION["nombre_usuario"];
} 
?>