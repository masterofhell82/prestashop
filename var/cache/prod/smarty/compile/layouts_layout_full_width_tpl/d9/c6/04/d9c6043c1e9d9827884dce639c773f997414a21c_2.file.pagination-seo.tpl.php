<?php
/* Smarty version 3.1.33, created on 2020-11-01 20:40:35
  from '/var/www/prestashop/themes/classic-rocket/templates/_partials/pagination-seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f558329af61_92892811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c6043c1e9d9827884dce639c773f997414a21c' => 
    array (
      0 => '/var/www/prestashop/themes/classic-rocket/templates/_partials/pagination-seo.tpl',
      1 => 1604095306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f558329af61_92892811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (isset($_smarty_tpl->tpl_vars['listing']->value['pagination']) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
    <?php $_smarty_tpl->_assignInScope('page_nb', 1);?>
    <?php if (isset($_GET['page'])) {?>
        <?php $_smarty_tpl->_assignInScope('page_nb', intval($_GET['page']));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('queryPage', ('?page=').($_smarty_tpl->tpl_vars['page_nb']->value));?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['canonical'] = smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value['canonical'],$_smarty_tpl->tpl_vars['queryPage']->value,'');
$_smarty_tpl->_assignInScope('page', $_tmp_array);?>


    <?php $_smarty_tpl->_assignInScope('prev', false);?>
        <?php $_smarty_tpl->_assignInScope('next', false);?>
    <?php if (($_smarty_tpl->tpl_vars['page_nb']->value-1) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('prev', $_smarty_tpl->tpl_vars['page']->value['canonical']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page_nb']->value > 2) {?>
        <?php $_smarty_tpl->_assignInScope('prev', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value-1))));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to']) {?>
        <?php $_smarty_tpl->_assignInScope('next', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value+1))));?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
            <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
            <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php }
}
}
}
