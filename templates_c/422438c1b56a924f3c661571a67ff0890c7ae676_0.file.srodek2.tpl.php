<?php
/* Smarty version 3.1.33, created on 2019-01-06 08:50:37
  from '/home1/rafalxpl/public_html/v3d/templates/srodek2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3215bd635ee7_56282177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422438c1b56a924f3c661571a67ff0890c7ae676' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/srodek2.tpl',
      1 => 1546786237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3215bd635ee7_56282177 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
  ';?>require_once("head.php");
  require_once("footer.php");

  if (isset($_GET['id'])) // Check id has been passed in URL
  $id = mysql_real_escape_string($_GET['id']); // Prevent injection
  $order = mysql_query("SELECT * FROM strona_v3d WHERE id='$id'");
  $result = mysql_fetch_array($order);
  $tresc = $result['Tresc'];
  $project = $result['Inne'];
<?php echo '?>';?>

<!-- <div id="content-wrapper" class="full-width-grid-wrapper">
</div> -->

<div id="content-wrapper" class="full-width-grid-wrapper">
<div class="r-srodek-img">
<?php echo '<?php ';?>echo $project; <?php echo '?>';?><br><br>
<?php echo '<?php ';?>echo $tresc; <?php echo '?>';?><br>
</div>

</div>


<?php }
}
