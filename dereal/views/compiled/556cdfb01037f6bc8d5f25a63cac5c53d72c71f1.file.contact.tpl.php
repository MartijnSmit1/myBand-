<?php /* Smarty version Smarty-3.1.18, created on 2016-11-10 23:25:18
         compiled from "views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2732157fe270388ab23-66458680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cdfb01037f6bc8d5f25a63cac5c53d72c71f1' => 
    array (
      0 => 'views\\contact.tpl',
      1 => 1478810384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2732157fe270388ab23-66458680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe27038a8ce9_86698720',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe27038a8ce9_86698720')) {function content_57fe27038a8ce9_86698720($_smarty_tpl) {?>
<form id="contact">
    <div class="container">
        <div class="head">
            <h2 id="h2">Contact</h2>
        </div>
        <input id="naamC" type="text" name="name" placeholder="Naam" /><br />
        <input id="emailC"  type="email" name="email" placeholder="Email" /><br />
        <textarea id="textareaC" type="text" name="message" placeholder="Bericht"></textarea><br />
        <div class="message"></div>
        <button id="submit" type="submit">
            Verstuur
        </button>
    </div>
</form>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.8627764646826!2d4.854798516150891!3d52.39103787978995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e28849730d2f%3A0x5dffd675d740eddb!2sMediacollege+Amsterdam+hoofdgebouw!5e0!3m2!1snl!2snl!4v1476276054781" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe><?php }} ?>
