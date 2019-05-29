<?php

//Si no estoy registrado voy al index
//Lo controlaremos por variable de sesión
session_start();
//Creo un objeto de la clase plantilla
require ("../clases/Plantilla.php");
require ("../clases/BD.php");
require ("../clases/Cesta.php");




$plantilla = new Plantilla();

$bd = new BD();
if (!isset($_SESSION['user'])) {
    header('Location:../index.php?error=Debes registrate');
    exit();
}

//Leo la cesta anterior (si tenía)

$cesta = Cesta::obtener_cesta();


if (isset($_POST['vaciar'])) {
    $cesta->vaciar();
}

//Agrego en la cesta el nuevo producto
if (isset($_POST['comprar'])) {
    $cod = $_POST['cod'];
    $cesta->add_producto($cod, $bd);
}

//guardo la cesta para la próxima iteracion
$cesta->guardar_cesta();



if (isset($_POST['submit'])) { //He comprado un producto
    $cod_producto = $_POST['cod'];
    $producto = $bd->obtener_producto($cod_producto);
    $plantilla->compartir("producto", $producto);
}

//Obtener todos los productos

$productos = $bd->obtener_productos();

//compartir ese array con la plantilla
$plantilla->compartir("productos", $productos);

//compartir la cesta (el objeto)
$plantilla->compartir("cesta", $cesta);



//mostrar la plantill
$plantilla->mostrar("producto.tpl");
?>

