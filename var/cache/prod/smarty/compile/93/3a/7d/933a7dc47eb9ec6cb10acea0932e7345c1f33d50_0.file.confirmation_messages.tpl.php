<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 10:51:37
  from 'C:\wamp64\www\anais\admin133cp62bx\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603e0aa91eed02_31530127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '933a7dc47eb9ec6cb10acea0932e7345c1f33d50' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\admin133cp62bx\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1614334350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e0aa91eed02_31530127 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
