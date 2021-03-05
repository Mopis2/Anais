<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 15:12:12
  from 'C:\wamp64\www\anais\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6040eabc1660c5_67925742',
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
function content_6040eabc1660c5_67925742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2037127806040eabc151007_85433394', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16936411246040eabc154fc3_90340121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_499389246040eabc15cb74_74810030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2268169456040eabc159de3_40168648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_499389246040eabc15cb74_74810030', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2037127806040eabc151007_85433394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2037127806040eabc151007_85433394',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16936411246040eabc154fc3_90340121',
  ),
  'page_content' => 
  array (
    0 => 'Block_2268169456040eabc159de3_40168648',
  ),
  'hook_home' => 
  array (
    0 => 'Block_499389246040eabc15cb74_74810030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16936411246040eabc154fc3_90340121', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2268169456040eabc159de3_40168648', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
