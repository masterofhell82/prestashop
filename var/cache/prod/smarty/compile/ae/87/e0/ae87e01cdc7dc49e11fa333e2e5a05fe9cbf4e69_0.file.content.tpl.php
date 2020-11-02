<?php
/* Smarty version 3.1.33, created on 2020-11-01 20:15:01
  from '/var/www/prestashop/admin786axrsou/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f4f856ddd34_47950168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae87e01cdc7dc49e11fa333e2e5a05fe9cbf4e69' => 
    array (
      0 => '/var/www/prestashop/admin786axrsou/themes/default/template/content.tpl',
      1 => 1604013293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f4f856ddd34_47950168 (Smarty_Internal_Template $_smarty_tpl) {
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
