<?php
/* Smarty version 3.1.33, created on 2019-05-28 15:42:17
  from '/var/www/TiendaShop/vistas/plantillas/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced3ab9a288f9_99477314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ebb9123169225ac478f9c0f602b70c2da71f74' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/producto.tpl',
      1 => 1559050893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
    'file:lista_productos.tpl' => 1,
  ),
),false)) {
function content_5ced3ab9a288f9_99477314 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
             <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="productos">
                <?php $_smarty_tpl->_subTemplateRender("file:lista_productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div><!-- Close div productos -->
        </div><!-- Close div contenedor -->
    </body>
</html><?php }
}
