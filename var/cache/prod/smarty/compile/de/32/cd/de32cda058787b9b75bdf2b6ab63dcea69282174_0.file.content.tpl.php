<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-06 11:04:10
  from 'C:\wamp64\www\anais\admin133cp62bx\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6043539a1af585_41470539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de32cda058787b9b75bdf2b6ab63dcea69282174' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\admin133cp62bx\\themes\\default\\template\\content.tpl',
      1 => 1614334357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6043539a1af585_41470539 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
