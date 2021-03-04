<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 10:56:17
  from 'C:\wamp64\www\anais\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603e0bc15cd144_35736194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf2c9aacc0e3ec522bc8c21f41d33cea6b277ab' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\page.tpl',
      1 => 1614334390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e0bc15cd144_35736194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1371357940603e0bc15a0b14_20417281', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1714935169603e0bc15a6627_35749683 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1197071910603e0bc15a2d58_12089305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1714935169603e0bc15a6627_35749683', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1914892685603e0bc15b1a95_91547368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1332111763603e0bc15b9980_25871055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1293247827603e0bc15af169_81068772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1914892685603e0bc15b1a95_91547368', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1332111763603e0bc15b9980_25871055', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1464964643603e0bc15c5141_31698859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2113959225603e0bc15c1b95_71751190 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1464964643603e0bc15c5141_31698859', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1371357940603e0bc15a0b14_20417281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1371357940603e0bc15a0b14_20417281',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1197071910603e0bc15a2d58_12089305',
  ),
  'page_title' => 
  array (
    0 => 'Block_1714935169603e0bc15a6627_35749683',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1293247827603e0bc15af169_81068772',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1914892685603e0bc15b1a95_91547368',
  ),
  'page_content' => 
  array (
    0 => 'Block_1332111763603e0bc15b9980_25871055',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2113959225603e0bc15c1b95_71751190',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1464964643603e0bc15c5141_31698859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197071910603e0bc15a2d58_12089305', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1293247827603e0bc15af169_81068772', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113959225603e0bc15c1b95_71751190', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
