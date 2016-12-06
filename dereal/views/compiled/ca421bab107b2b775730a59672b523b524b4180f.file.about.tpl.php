<?php /* Smarty version Smarty-3.1.18, created on 2016-11-10 23:25:15
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268257fb5afc56f150-54004312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478810384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268257fb5afc56f150-54004312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb5afc596884_70143805',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb5afc596884_70143805')) {function content_57fb5afc596884_70143805($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Bewijzenmap\\wamp\\www\\NouffSerieusBand\\Band-master\\Band-master\\libs\\plugins\\modifier.date_format.php';
?>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

    <div class="containerAL">
        <div class="headA">
             <h2 id="h2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h2>
        </div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" style="height: 200px">
        <p id="info"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie'];?>
</p>
        <p><?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['datum'],"%e, %B, %Y");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</p>
    </div>

<?php } ?><?php }} ?>
