<?php
/* Smarty version 3.1.33, created on 2020-10-31 14:32:17
  from '/var/www/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9dadb19257a8_34364172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4070ab7e52a5c8627f7241295dd585627c9cf7e4' => 
    array (
      0 => '/var/www/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl',
      1 => 1604013287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9dadb19257a8_34364172 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row no-gutter js-wireframe">
    <div class="col-xs-12 js-img-menu" data-module_name="menu">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header-selected.jpg"/>
    </div>
    <div class="col-xs-12">
        <div class="row no-gutter">
            <div class="col-xs-3 js-img-navigation_column" data-module_name="navigation_column">
                <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column.jpg"/>
                <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column-hover.jpg"/>
                <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column-selected.jpg"/>
            </div>
            <div class="col-xs-9">
                <div class="row no-gutter">
                    <div class="col-xs-12 js-img-categories" data-module_name="categories">
                        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category.jpg"/>
                        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category-hover.jpg"/>
                        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category-selected.jpg"/>
                    </div>
                    <div class="col-xs-12 js-img-content" data-module_name="content">
                        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content.jpg"/>
                        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content-hover.jpg"/>
                        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content-selected.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 js-img-social_newsletter" data-module_name="social_newsletter">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter-selected.jpg"/>
    </div>
    <div class="col-xs-12 js-img-footer" data-module_name="footer">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer-selected.jpg"/>
    </div>
</div>
<?php }
}
