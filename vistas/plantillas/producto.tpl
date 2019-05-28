<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de productos </title>
        <link rel="stylesheet" href="../css/tienda.css"/>
    </head>
    <body class="pagproductos">

        <div id="contenedor">
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
            <div id="cesta">
             {include "cesta.tpl"}
            </div>
            <div id="productos">
                {include "lista_productos.tpl"}

            </div><!-- Close div productos -->
        </div><!-- Close div contenedor -->
    </body>
</html>