<?php
/* Smarty version 3.1.33, created on 2019-01-20 18:22:52
  from '/home1/rafalxpl/public_html/v3d/templates/navpl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4510dccf5894_56576802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126e05d6c30c3889e400a35eab4159df4ec1bfe6' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/navpl.tpl',
      1 => 1548030160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4510dccf5894_56576802 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <ul id="menu-1" class="menu">
    <li class="menu-item"><a href="http://visual3design.com/v3d/index.php"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'work');?>
</a></li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['nav'], 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$__foreach_nav_0_saved = $_smarty_tpl->tpl_vars['nav'];
?>
    <li class="menu-item" <?php if ($_smarty_tpl->tpl_vars['nav']->key == $_smarty_tpl->tpl_vars['data']->value['subpage']) {?> class="selected" <?php }?>> <a href="?p=<?php echo $_smarty_tpl->tpl_vars['nav']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['nav'] = $__foreach_nav_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul> -->

 <ul id="menu-1" class="menu">
 <li class="menu-item"><a href="http://visual3design.com/v3d/index.php"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'work');?>
</a></li>
 <li class="menu-item"><a href="http://visual3design.com/v3d/index.php?p=design_lab"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'design_lab');?>
</a></li>
 <li class="menu-item"><a href="http://visual3design.com/v3d/index.php?p=about"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'about');?>
</a></li>
 <li class="menu-item"><a href="http://visual3design.com/v3d/index.php?p=testimonilas"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'testimonilas');?>
</a></li>
 <li class="menu-item"><a href="http://visual3design.com/v3d/index.php?p=contact"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'contact');?>
</a></li>
 </ul>
<?php }
}
