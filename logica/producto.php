<?php

//Si no estoy registrado voy al index
//Lo controlaremos por variable de sesión
session_start();

if (!isset($_SESSION['user'])) {
    header('Location:../index.php?error=Debes registrate');
    exit();
}





//Creo un objeto de la clase plantilla
require ("../clases/Plantilla.php");
require ("../clases/BD.php");




$plantilla = new Plantilla();

$bd = new BD();
if (isset($_POST['submit'])) { //He comprado un producto
    $cod_producto = $_POST['cod'];
    $producto = $bd->obtener_producto($cod_producto);
    $plantilla->compartir("producto", $producto);
}

//Obtener todos los productos

$productos = $bd->obtener_productos();

//compartir ese array con la plantilla
$plantilla->compartir("productos", $productos);


//mostrar la plantill
$plantilla->mostrar("producto.tpl")
?>

