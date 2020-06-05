<?php
/* Smarty version 3.1.33, created on 2019-02-27 13:10:14
  from '/home1/rafalxpl/public_html/v3d/templates/srodek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76e09652e164_07908604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba7e8986c49baaa8a8c6d5ad7f5db2cca1eb8a1' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/srodek.tpl',
      1 => 1551294610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_5c76e09652e164_07908604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="#" id="scroll" style="display: none;"><span></span></a>

<?php echo '<script'; ?>
>
  $(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  AOS.init();
<?php echo '</script'; ?>
><?php }
}
