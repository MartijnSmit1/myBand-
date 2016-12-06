<?php /* Smarty version Smarty-3.1.18, created on 2016-11-10 23:25:17
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:931757fe307085c512-67389340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1478810384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '931757fe307085c512-67389340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe307087aae3_65996162',
  'variables' => 
  array (
    'result2' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe307087aae3_65996162')) {function content_57fe307087aae3_65996162($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Bewijzenmap\\wamp\\www\\NouffSerieusBand\\Band-master\\Band-master\\libs\\plugins\\modifier.date_format.php';
?><h1>Schema</h1>

<table>
<td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td><td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Prijs</td><td width='200px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td><td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Locatie</td><td style="border: 1px solid black; background-color: #d7d7d7">Kopen</td>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <tr><td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</td>
        <td style="border: 1px solid black">€ <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['prijs'];?>
</td>
        <td style="border: 1px solid black"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['datum'],"%e, %B, %Y");?>
</td>
        <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['locatie'];?>
</td>
        <td ><button>Koop nu</button></td>
    </tr>
<?php } ?>
</table><?php }} ?>
