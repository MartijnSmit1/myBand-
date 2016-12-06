<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 00:07:00
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20732581323df7e80e4-81653840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1478810384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20732581323df7e80e4-81653840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581323df807e18_16177660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581323df807e18_16177660')) {function content_581323df807e18_16177660($_smarty_tpl) {?><h3>Login</h3>
<p>Log in om bij de admin page te komen.</p>
<p>Wachtwoord = test</p>
<form action="model/login.php" method="post">

<input type="password" name="wachtwoord" placeholder="Wachtwoord"><input type="submit" name="login" value="Login">

</form><?php }} ?>
