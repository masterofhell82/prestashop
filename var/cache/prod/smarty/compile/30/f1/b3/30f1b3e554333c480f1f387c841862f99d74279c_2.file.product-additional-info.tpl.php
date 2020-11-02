<?php
/* Smarty version 3.1.33, created on 2020-11-01 21:00:07
  from '/var/www/prestashop/themes/classic-rocket/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f5a17807390_66493371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f1b3e554333c480f1f387c841862f99d74279c' => 
    array (
      0 => '/var/www/prestashop/themes/classic-rocket/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1604095306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f5a17807390_66493371 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
