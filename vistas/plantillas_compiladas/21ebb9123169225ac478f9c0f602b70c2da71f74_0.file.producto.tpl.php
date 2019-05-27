<?php
/* Smarty version 3.1.33, created on 2019-05-27 16:00:43
  from '/var/www/TiendaShop/vistas/plantillas/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cebed8b49c6a8_08868120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ebb9123169225ac478f9c0f602b70c2da71f74' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/producto.tpl',
      1 => 1558628406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cebed8b49c6a8_08868120 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if (isset($_smarty_tpl->tpl_vars['cesta']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value, 'producto', false, 'cod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cod']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['producto']->value['unidades'];?>
 
                    <?php echo $_smarty_tpl->tpl_vars['producto']->value['producto']['nombre_corto'];?>
 
                    <?php echo $_smarty_tpl->tpl_vars['producto']->value['producto']['PVP'];?>
 euros <br />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               
            <?php }?>
            </div>
            <div id="productos">

                <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value))) {?>
                    <h3>Has comprado <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_corto'];?>
</h3>
                <?php }?>
                <h2><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</h2>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                    <form action="http://localhost/TiendaShop/logica/producto.php" method="POST">
                        <input type="submit" value="Añadir" name='comprar'>
                        <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_corto'];?>

                        <?php echo $_smarty_tpl->tpl_vars['producto']->value['PVP'];?>
 Euros <br />
                        <input type="hidden" name="cod" value='<?php echo $_smarty_tpl->tpl_vars['producto']->value['cod'];?>
'>
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
            </div><!-- Close div productos -->
        </div><!-- Close div contenedor -->
    </body>
</html><?php }
}
