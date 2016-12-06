<?php /* Smarty version Smarty-3.1.18, created on 2016-11-10 23:25:08
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027357fe22d78d0002-96105437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1478810384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027357fe22d78d0002-96105437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe22d78eba76_90410289',
  'variables' => 
  array (
    'total_nr_articles' => 0,
    'i' => 0,
    'result3' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe22d78eba76_90410289')) {function content_57fe22d78eba76_90410289($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Bewijzenmap\\wamp\\www\\NouffSerieusBand\\Band-master\\Band-master\\libs\\plugins\\modifier.date_format.php';
?><h1>Home</h1>
<div id="list">
    <ul>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_nr_articles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_nr_articles']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li id="li"><a href="?pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a> </li>
        <?php }} ?>
    </ul>
</div>

<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <div id="berichten">
    <article>
            <h1 id="titelH"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h1>
            <img id="imageH" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"></img>
            <p id="infoH"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie'];?>
</p>
            <p id="datumH"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['datum'],"%e, %B, %Y");?>
</p>
        </article>
    </div>

    <?php } ?>
</section>
<?php }} ?>
