<?php
/* Smarty version 3.1.33, created on 2019-01-13 17:37:44
  from '/home1/rafalxpl/public_html/v3d/templates/nav-pl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3bcbc885e795_03184537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f21656b91a3c3e2ab460ab70d5555c21c8b39a19' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/nav-pl.tpl',
      1 => 1547422659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3bcbc885e795_03184537 (Smarty_Internal_Template $_smarty_tpl) {
?>        
        <ul id="menu-1" class="menu">
            <li class="menu-item"><a href="http://visual3design.com/v3d/index-pl.php">PRACE</a></li>
            <li class="menu-item"><a href="http://visual3design.com/v3d/index-pl.php">O Mnie</a></li>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datapl']->value['navpl'], 'navpl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['navpl']->key => $_smarty_tpl->tpl_vars['navpl']->value) {
$__foreach_navpl_0_saved = $_smarty_tpl->tpl_vars['navpl'];
?>
            <li class="menu-item" <?php if ($_smarty_tpl->tpl_vars['navpl']->key == $_smarty_tpl->tpl_vars['datapl']->value['subpagepl']) {?> class="selected" <?php }?>> <a href="?p=<?php echo $_smarty_tpl->tpl_vars['navpl']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['navpl']->value;?>
</a></li>
            <?php
$_smarty_tpl->tpl_vars['navpl'] = $__foreach_navpl_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- <li><a href="srodek.php">TEST</a></li> -->
        </ul>

<?php }
}
