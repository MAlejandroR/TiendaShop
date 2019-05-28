<?php
/* Smarty version 3.1.33, created on 2019-05-28 15:42:33
  from '/var/www/TiendaShop/vistas/plantillas/lista_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced3ac97d8929_22316098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175f725f86ff062f0053457158703e799ba323f9' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/lista_productos.tpl',
      1 => 1559050887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced3ac97d8929_22316098 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
           <form action="http://localhost/TiendaShop/logica/productos.php" method="POST">
               <div class="elemento">

                   <input type="submit" class="add" name="comprar" value="Añadir">

                   <b><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_corto'];?>
 </b> <?php echo $_smarty_tpl->tpl_vars['producto']->value['PVP'];?>
 €<hr />
                   <input type="hidden" name="cod" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cod'];?>
">
               </div>

           </form>


       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
