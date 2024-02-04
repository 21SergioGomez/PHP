<?php
/* Smarty version 4.2.1, created on 2024-02-04 19:13:06
  from 'C:\Users\Sergio Gómez\PHP\Estacion\template-vagon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65bfd3b22b20f9_37083471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7006c6986bea3163164dc9ccd8d6d974dbf15d3' => 
    array (
      0 => 'C:\\Users\\Sergio Gómez\\PHP\\Estacion\\template-vagon.html',
      1 => 1707070310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bfd3b22b20f9_37083471 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php?vagon=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&tren=<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"
  ><img src="imagenes/vagon.png" style="width: 100px"
/></a>
[ <?php echo $_smarty_tpl->tpl_vars['persona']->value;?>
 ]
<?php }
}
