<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 10:56:17
  from 'C:\wamp64\www\anais\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603e0bc1445ef6_44482152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e539fc6de90863a3b779ebf845542b3b00f4e9f' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\index.tpl',
      1 => 1614334389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e0bc1445ef6_44482152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326260015603e0bc142b563_93548750', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1978225834603e0bc1431295_53151726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1672665087603e0bc143a664_38096085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1327077859603e0bc14372c5_69355399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1672665087603e0bc143a664_38096085', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1326260015603e0bc142b563_93548750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1326260015603e0bc142b563_93548750',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1978225834603e0bc1431295_53151726',
  ),
  'page_content' => 
  array (
    0 => 'Block_1327077859603e0bc14372c5_69355399',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1672665087603e0bc143a664_38096085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1978225834603e0bc1431295_53151726', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1327077859603e0bc14372c5_69355399', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
