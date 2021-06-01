<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:06:09
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/admin/validator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ed51451c57_57855658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de5b7d346ae0d1b59f935c59a84acab9cc0cb37' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/admin/validator.tpl',
      1 => 1622469802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ed51451c57_57855658 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="validator-container adyen">
                <img class="img-responsive logo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo']->value,'html','UTF-8' ));?>
" alt="logo">
                <p>
                    Validate module installation. If an error occurs please consult the logs page by going to
                    <b>Advanced Parameters</b> > <b>Logs</b>.
                </p>
                <form id="validateForm" action="<?php echo $_smarty_tpl->tpl_vars['validateUrl']->value;?>
" method="GET">
                    <?php ob_start();
echo count($_smarty_tpl->tpl_vars['shops']->value) > 1;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                        <div class="form-group">
                            <label for="shop" class="control-label">Select shop</label>
                            <select id="shop" name="shop" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'name', false, 'id');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    <?php }?>
                                        <input type="hidden" name="ajax" value="1">
                                        <input type="hidden" name="action" value="get">
                    <button id="validateButton" type="submit" class="btn btn-primary-reverse btn-outline-primary">Validate</button>
                    <button id="loadingSpinner" class="btn-primary-reverse spinner"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    jQuery(document).ready(function () {
        $('#validateForm').submit(function (e) {
            e.preventDefault();
            const spinner = $('#loadingSpinner');
            const button = $('#validateButton');
            button.hide();
            spinner.show();
            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                headers: {
                    Accept: "application/json",
                }
            }).done(function() {
                $.growl.notice({ title: "Success", message: "Adyen module installation successfully validated", duration: 5000});
                })
                .error(function () {
                    $.growl.error({ title: "Error", message: "Please check the logs for more information.", duration: 5000});
                })
                .always(function () {
                    spinner.hide();
                    button.show();
                });
        })
    });
<?php echo '</script'; ?>
>
<?php }
}
