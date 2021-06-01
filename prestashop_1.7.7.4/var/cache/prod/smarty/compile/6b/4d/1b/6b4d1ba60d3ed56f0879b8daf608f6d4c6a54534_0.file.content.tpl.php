<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:03:43
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/admin3104favuz/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ecbf045ce6_37359728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4d1ba60d3ed56f0879b8daf608f6d4c6a54534' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/admin3104favuz/themes/default/template/content.tpl',
      1 => 1622129130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ecbf045ce6_37359728 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
