<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/tienda.css"/>
    </head>
    <body class="pagproductos">

        <div id="contenedor">
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
            <div id="productos">

                {if (isset($producto))}
                    <h3>Has comprado {$producto['nombre_corto']}</h3>
                {/if}
                <h2>{$texto}</h2>
                {foreach $productos as $producto}
                    <form action="http://localhost/TiendaShop/logica/producto.php" method="POST">
                        <input type="submit" value="Añadir" name='submit'>
                        {$producto['nombre_corto']}
                        {$producto['PVP']} Euros <br />
                        <input type="hidden" name="cod" value='{$producto['cod']}'>
                    </form>
                {/foreach}    
            </div><!-- Close div productos -->
        </div><!-- Close div contenedor -->
    </body>
</html>