<?php
/* Smarty version 3.1.33, created on 2020-11-01 20:40:35
  from '/var/www/prestashop/themes/classic-rocket/templates/_partials/font.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f55831bc876_49413301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8117d4a0f8644cd5e373f6b1330ac0424ce0031' => 
    array (
      0 => '/var/www/prestashop/themes/classic-rocket/templates/_partials/font.tpl',
      1 => 1604095306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f55831bc876_49413301 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>
<link rel="preconnect" href="//ajax.googleapis.com" crossorigin>
<?php echo '<script'; ?>
 type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Noto+Sans:400,700' ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); <?php echo '</script'; ?>
>
<?php }
}
