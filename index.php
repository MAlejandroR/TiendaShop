<?php

session_start();
//Creo un objeto de la clase plantilla
require ("./clases/Plantilla.php");
require ("./clases/BD.php");
$plantilla = new Plantilla();

//Vengo de productos por no haberme registrado e intentar
//ir directamente a esa pantalla.
if (isset($_GET['error'])) {
    $plantilla->compartir("error", $_GET['error']);
}

if (isset($_POST['submit'])) {//He presionado enviar
//llemos valores
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    $bd = new BD();

    if ($bd->verifica_usuario($usuario, $password)) {
        $_SESSION['user'] = $usuario;
        header("Location:logica/producto.php");
        exit();
    } else {
        $error = "Debe de aportar datos correctos";
        $plantilla->compartir("error", $error);
    }
}
$plantilla->mostrar("index.tpl");
?>
