<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-03 13:24:56
  from 'C:\wamp64\www\anais\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603f80187e4174_78713842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad8c6717ebd652548bb66f4df3f6805d4b0175a' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1614334390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603f80187e4174_78713842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1608038009603f80187d00d3_80546237', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_1608038009603f80187d00d3_80546237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_1608038009603f80187d00d3_80546237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
