<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 16:01:06
  from 'C:\wamp64\www\anais\modules\ps_themecusto\views\templates\admin\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6040f63216bc12_37673128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a7b14d4fae94b8b1fa7f7f513002f41dca5062d' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\modules\\ps_themecusto\\views\\templates\\admin\\page.tpl',
      1 => 1614334378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./controllers/".((string)$_smarty_tpl->tpl_vars[\'configure_type\']->value)."/index.tpl' => 1,
  ),
),false)) {
function content_6040f63216bc12_37673128 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-div">
    <div class="grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php if ($_smarty_tpl->tpl_vars['enable']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:./controllers/".((string)$_smarty_tpl->tpl_vars['configure_type']->value)."/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } else { ?>
                <div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The module %s has been disabled','sprintf'=>$_smarty_tpl->tpl_vars['moduleName']->value,'mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</h4>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
