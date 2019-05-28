<?php
/* Smarty version 3.1.33, created on 2019-05-28 15:45:40
  from '/var/www/TiendaShop/vistas/plantillas/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced3b8441e9c3_08727909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7d16b40271f52ee16ad5e45fc9a09d837ce564' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/cesta.tpl',
      1 => 1559051139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced3b8441e9c3_08727909 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="cesta">
    <?php $_smarty_tpl->_assignInScope('enabled', "disabled");?>
        <?php if (isset($_smarty_tpl->tpl_vars['cesta']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('enabled', "enabled");?>
            
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
        <input type="submit" value="Pagar" name="submit" <?php echo $_smarty_tpl->tpl_vars['enabled']->value;?>
>
        <input type="submit" value="Vaciar" name="submit" <?php echo $_smarty_tpl->tpl_vars['enabled']->value;?>
>
</div><?php }
}
