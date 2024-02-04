<?php
/* Smarty version 4.2.1, created on 2024-02-04 12:47:12
  from 'C:\Users\Sergio Gómez\Desktop\posible\Estacion\template-vagon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65bf7940d1a774_35931115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8562591248a3280fa65a8c0206d8c4a651eb5de' => 
    array (
      0 => 'C:\\Users\\Sergio Gómez\\Desktop\\posible\\Estacion\\template-vagon.html',
      1 => 1707047223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bf7940d1a774_35931115 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php?vagon=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&tren=<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"
  ><img src="imagenes/vagon.png" style="width: 100px"
/></a>
[ <?php echo $_smarty_tpl->tpl_vars['persona']->value;?>
 ]
<?php }
}
