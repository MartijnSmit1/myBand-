<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 10:10:49
         compiled from "views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:446358008320b428d6-47626139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9e15c8bea74af24c568bdf519895827a0da35e' => 
    array (
      0 => 'views\\admin.tpl',
      1 => 1478164244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446358008320b428d6-47626139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58008320b5dd14_14035939',
  'variables' => 
  array (
    'resultHA' => 0,
    'oneItem' => 0,
    'result2' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58008320b5dd14_14035939')) {function content_58008320b5dd14_14035939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Band\\libs\\plugins\\modifier.date_format.php';
?><h1>Admin</h1>
<div id="sideBar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#schema">Schema</a></li>
        <li><a href="#about">About</a></li>
    </ul>
</div>

<div id="admin">
<fieldset style="background-color: lightgrey" id="home">
    <legend style="background-color: #EFDC05; border: 1px solid black; width: 100%">Home bericht toevoegen</legend>

    <form action="./model/admin.php" method="post" id="formupload">
        <fieldset>
            <legend style="background-color: #3d3d3d; color: white">Home bericht toevoegen</legend>
            <input type="text" name="titel" placeholder="Titel">
            <input type="text" name="image" placeholder="Image">
            <input type="date" name="datum" placeholder="Datum"><br>
            <textarea name="informatie" cols="100" rows="5" placeholder="Informatie"></textarea><br>
            <input type="submit" value="Upload schema" name="uploadH">
        </fieldset>
    </form>

    <fieldset>
        <legend style="background-color: #3d3d3d; color: white">Home berichten Aanpassen</legend>
        <table style=" display: block; height: 200px; overflow-y: scroll;">
            <tr>
                <td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td>
                <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Image</td>
                <td width='200px' style="border: 1px solid black; background-color: #d7d7d7">Informatie</td>
                <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td>
                <td style="border: 1px solid black; background-color: #d7d7d7">Aanpassen</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultHA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                <form action="./model/admin.php" method="post" id="formupload">
                    <tr>
                        <td style="display: none"><input style="display: none" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" name="id"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="titel" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="informatie" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="date" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
"></td>
                        <td><button name="updateH" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">Aanpassen</button></td>
                    </tr>
                </form>
            <?php } ?>
            
        </table>
    </fieldset>

    
    <form action="./model/admin.php" method="post" id="formupload">
        <fieldset>
            <legend style="background-color: #3d3d3d; color: white">Home delete</legend>
            <table style=" display: block; height: 200px; overflow-y: scroll;">
                <td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td>
                <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Image</td>
                <td width='400px' style="border: 1px solid black; background-color: #d7d7d7">Informatie</td>
                <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td>
                <td style="border: 1px solid black; background-color: #d7d7d7">Delete</td>
                <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultHA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                    <tr>
                        <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</td>
                        <td style="border: 1px solid black"><img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" style="width: 30px; max-height: 30px;"></td>
                        <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie'];?>
</td>
                        <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
</td>
                        <td><button name="deleteH" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">Delete</button></td>
                    </tr>
                <?php } ?>
            </table>
        </fieldset>
    </form>
</fieldset>
</fieldset>






<fieldset style="background-color: lightgrey" id="schema">
    <legend style="background-color: #EFDC05; border: 1px solid black; width: 100%">Schema</legend>

<form action="./model/admin.php" method="post" id="formupload">
    <fieldset>
        <legend style="background-color: #3d3d3d; color: white">Schema toevoegen</legend>
        <input type="text" name="titel" placeholder="Titel">
        <input type="text" name="prijs" placeholder="Prijs">
        <input type="date" name="datum" placeholder="Datum">
        <input type="text" name="locatie" placeholder="Locatie">
        <input type="submit" value="Upload schema" name="upload">
    </fieldset>
</form>


    <fieldset>
        <legend style="background-color: #3d3d3d; color: white">Schema Aanpassen</legend>
            <table style=" display: block; height: 200px; overflow-y: scroll;">
                <tr>
                <td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td>
                    <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Prijs</td>
                    <td width='200px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td>
                    <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Locatie</td>
                    <td style="border: 1px solid black; background-color: #d7d7d7">Delete</td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                <form action="./model/admin.php" method="post" id="formupload">
                    <tr>
                        <td style="display: none"><input style="display: none" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" name="id"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="titel" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="prijs" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['prijs'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="date" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
"></td>
                        <td style="border: 1px solid black;" ><input style="margin: 0; padding: 0;" type="text" name="locatie" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['locatie'];?>
"></td>
                        <td><button name="updateS" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">Aanpassen</button></td>
                    </tr>
                </form>
                <?php } ?>
                <td><button name="updateSAll" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">Alles Aanpassen</button></td>
            </table>
    </fieldset>



<form action="./model/admin.php" method="post" id="formupload">
    <fieldset>
    <legend style="background-color: #3d3d3d; color: white">Schema Delete</legend>
    <table style=" display: block; height: 200px; overflow-y: scroll;">
        <td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td>
        <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Prijs</td>
        <td width='200px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td>
        <td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Locatie</td>
        <td style="border: 1px solid black; background-color: #d7d7d7">Delete</td>
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <tr><td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</td>
                <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['prijs'];?>
</td>
                <td style="border: 1px solid black"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['datum'],"%e, %B, %Y");?>
</td>
                <td style="border: 1px solid black"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['locatie'];?>
</td>
                <td><button name="deleteS" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">Delete</button></td>
            </tr>
        <?php } ?>
    </table>
    </fieldset>
</form>
</fieldset>


    <fieldset style="background-color: lightgrey" id="about">
    <legend  style="background-color: #EFDC05; border: 1px solid black; width: 100%">About aanpassen</legend>

    <table>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <form action="./model/admin.php" method="post">
        <tr> <td style="display: none">ID</td><td> <input style="margin: 0; padding: 0; display: none" name="id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"></td></tr>
        <tr> <td>titel</td><td> <input style="margin: 0; padding: 0;" name="titel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
"></td></tr>
        <tr> <td>Afbeelding url </td><td><input style="margin: 0; padding: 0;" style="width: 735px;" name="image" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"></td></tr>
        <tr> <td>Informatie </td><td><textarea style="margin: 0; padding: 0;" name="informatie" rows="5" cols="100"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie'];?>
</textarea></td></tr>
        <tr><td>Datum</td><td><input style="margin: 0; padding: 0;" name="datum" type="date" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
"></td</tr>
        <tr> <td></td><td><input style="margin: 0; padding: 0; width: 125px" type="submit" value="Update About" name="updateA"></td></tr>
        <tr><td></td><td><div style="background-color: black; padding-bottom: 5px; width: 100%"  ></div></td></tr>
        </form>
    <?php } ?>
    </table>
    </fieldset>
</div><?php }} ?>
