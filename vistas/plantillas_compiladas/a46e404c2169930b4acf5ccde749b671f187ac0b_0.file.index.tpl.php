<?php
/* Smarty version 3.1.33, created on 2019-05-21 20:46:15
  from '/var/www/TiendaShop/vistas/plantillas/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce447772fb252_87507842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46e404c2169930b4acf5ccde749b671f187ac0b' => 
    array (
      0 => '/var/www/TiendaShop/vistas/plantillas/index.tpl',
      1 => 1558461041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce447772fb252_87507842 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login Tienda Web con Plantillas</title>
  <link href="./css/tienda.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id='login'>
    <form action='index.php' method='post'>
    <fieldset >
        <legend>Login</legend>
                <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
        <div class='campo'>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='user' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='pass' id='password' maxlength="50" /><br/>
        </div>
 
        <div class='campo'>
            <input type='submit' name='submit' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
</body>
</html><?php }
}
