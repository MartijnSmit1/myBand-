<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 00:29:46
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1199157f2229da53a22-71491989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1478820540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199157f2229da53a22-71491989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f2229da7b611_38950837',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2229da7b611_38950837')) {function content_57f2229da7b611_38950837($_smarty_tpl) {?><header>
    <ul class="topnav" id="myTopnav">
        <li><a href="home"><img src="images/logo.jpg" style="width:45px;"></a></li>
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="schema">Programma</a></li>
            <li><a href="contact">Contact</a></li>
            <li class="icon">
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
            </li>
        </ul>
</header>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<?php }} ?>
