<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:05:12
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/front/get-started.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ed1877e187_64245869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5f64ab3c162e5989f4acc837571b77196d79ec' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/front/get-started.tpl',
      1 => 1622469802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ed1877e187_64245869 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="display: flex;">
    <div style="float:left;padding-right:10px;">
        <img width="120px" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo']->value,'html','UTF-8' ));?>
">
    </div>
    <div>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adyen all-in-one payments platform.','mod'=>'adyenofficial'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer key payment methods anywhere in the world at the flick of a switch.','mod'=>'adyenofficial'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easy integration with our in-house built PrestaShop Plugin, no set-up fee.','mod'=>'adyenofficial'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for an Adyen account at','mod'=>'adyenofficial'),$_smarty_tpl ) );?>
 <a href="https://www.adyen.com/signup">https://www.adyen.com/signup</a>
        </p>
    </div>
</div>
<div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'value', false, NULL, 'links', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['total'];
?>
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['url'],'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>
</a>
        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_links']->value['last'] : null)) {?> | <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
