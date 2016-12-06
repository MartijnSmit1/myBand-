<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 13:48:41
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237115819e039c64799-40844447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478090912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237115819e039c64799-40844447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819e039c89780_29896512',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819e039c89780_29896512')) {function content_5819e039c89780_29896512($_smarty_tpl) {?><html>
<head>

    <style>
        span {
            color: green;
        }
    </style>

    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }else {
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "php_ajax.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

</head>
<body>

<p><b>Search your favourite tutorials:</b></p>

<form>
    <input type = "text" onkeyup = "showHint(this.value)">
</form>

<p>Entered Course name: <span id="txtHint"></span></p>

</body>
</html><?php }} ?>
