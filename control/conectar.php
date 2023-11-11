<?php 
include 'datos.php';
session_start();
if (!empty($_POST[btn]))
$usuario = $_POST['email'];
$password = $_POST['password']; 
    
$sql = "select id, email, nombre, pwweb from miembros where email = '$usuario' and pwweb = '$password'";
$result = $conn ->query($sql);
if ($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $_SESSION["id_usuario"] = $row["id"];
    $_SESSION["nombre_usuario"] = $row["nombre"];
    header("Location: ../index.php");
} 
?>