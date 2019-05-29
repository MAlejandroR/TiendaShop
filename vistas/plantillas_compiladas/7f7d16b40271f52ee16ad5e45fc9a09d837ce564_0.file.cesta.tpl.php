<?php
/* Smarty version 3.1.33, created on 2019-05-28 18:11:55
  from '/var/www/TiendaShop/vistas/plantillas/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced5dcba50338_64287976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7d16b40271f52ee16ad5e45fc9a09d837ce564' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/cesta.tpl',
      1 => 1559059910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced5dcba50338_64287976 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="cesta">
    <h3><img src="../imagenes/cesta.png" alt="">
    Cesta de la tienda</h3>
    <hr />
        <?php if ($_smarty_tpl->tpl_vars['cesta']->value->cesta_vacia()) {?>
            Cesta vacía
            <?php $_smarty_tpl->_assignInScope('enabled', "disabled");?>
            <hr />
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('enabled', "enabled  ");?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cesta']->value->get_productos_cesta(), 'producto', false, 'cod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cod']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['producto']->value['unidades'];?>
 
                <?php echo $_smarty_tpl->tpl_vars['producto']->value['producto']['cod'];?>
 
                <?php echo $_smarty_tpl->tpl_vars['producto']->value['producto']['PVP'];?>
 euros <br />
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <hr />
            Total <?php echo $_smarty_tpl->tpl_vars['cesta']->value->importe_total();?>
 euros
            <hr />
        <?php }?>
        
             <form action="producto.php" method="POST">
               <input type="submit" value="Vaciar" name="vaciar" <?php echo $_smarty_tpl->tpl_vars['enabled']->value;?>
>
               <input type="submit" value="Pagar" name="pagar" <?php echo $_smarty_tpl->tpl_vars['enabled']->value;?>
>
            </form>

       
</div><?php }
}
