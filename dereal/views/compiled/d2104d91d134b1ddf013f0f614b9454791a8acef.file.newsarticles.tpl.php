<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 11:21:13
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2329757f22a2c080d71-12611632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1477300870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2329757f22a2c080d71-12611632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f22a2c0c2df0_47982621',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f22a2c0c2df0_47982621')) {function content_57f22a2c0c2df0_47982621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\Band\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Band\\libs\\plugins\\modifier.date_format.php';
?><section>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</p>
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" style="width: 300px"></img>
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e, %B, %Y");?>
</p>
    </article>
<?php } ?>
</section>
<ul>
    <li> <a href="home?pagenr=1">1</a></li>
    <li> <a href="home?pagenr=2">2</a></li>
    <li> <a href="home?pagenr=3">3</a></li>
    <li> <a href="home?pagenr=4">4</a></li>
    <li> <a href="home?pagenr=5">5</a></li>
</ul><?php }} ?>
