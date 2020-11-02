<?php
/* Smarty version 3.1.33, created on 2020-11-01 20:41:46
  from '/var/www/prestashop/themes/classic-rocket/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f55ca6737b5_69153447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a1698b6684a74be9bae8a7209f1adc5e81d4cb' => 
    array (
      0 => '/var/www/prestashop/themes/classic-rocket/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1604095306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f55ca6737b5_69153447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14171319145f9f55ca66b1a1_94507314', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19705811135f9f55ca66f1c9_15280948', 'product_availability');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10020912775f9f55ca671b68_86865397', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_14171319145f9f55ca66b1a1_94507314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_14171319145f9f55ca66b1a1_94507314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity row align-items-center no-gutters">
        <label for="quantity_wanted" class="quantity__label col-auto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
        <div class="qty col-auto">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_url'])) {?>data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          >
        </div>

        <div class="add col-auto">
          <button
            class="btn btn-primary add-to-cart btn-lg btn-block btn-add-to-cart js-add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="material-icons shopping-cart btn-add-to-cart__icon">&#xE547;</i><span class="btn-add-to-cart__spinner" role="status" aria-hidden="true"></span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_19705811135f9f55ca66f1c9_15280948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_19705811135f9f55ca66f1c9_15280948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <span id="product-availability">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
            <i class="material-icons rtl-no-flip product-available text-success">&#xE5CA;</i>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
            <i class="material-icons product-last-itemstext-warning">&#xE002;</i>
          <?php } else { ?>
            <i class="material-icons product-unavailable text-danger">&#xE14B;</i>
          <?php }?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_10020912775f9f55ca671b68_86865397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_10020912775f9f55ca671b68_86865397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
