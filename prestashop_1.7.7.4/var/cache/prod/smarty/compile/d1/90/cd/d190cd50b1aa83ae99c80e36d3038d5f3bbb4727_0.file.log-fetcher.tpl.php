<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:05:58
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/admin/log-fetcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ed465c4af8_70681568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd190cd50b1aa83ae99c80e36d3038d5f3bbb4727' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/modules/adyenofficial/views/templates/admin/log-fetcher.tpl',
      1 => 1622469802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ed465c4af8_70681568 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="log-container adyen">
                <img class="img-responsive logo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo']->value,'html','UTF-8' ));?>
" alt="logo">
                <p>
                    Download all Adyen-related log files and optionally include other Prestashop logs. For more information, check out <a target="_blank" href="https://docs.adyen.com/plugins/prestashop#downloading-the-logs">our docs</a>.
                </p>
                <form id="downloadForm" action="<?php echo $_smarty_tpl->tpl_vars['downloadUrl']->value;?>
" method="POST">
                    <div class="checkbox">
                        <label>
                            <input name="include-all" type="checkbox">Include all log files
                        </label>
                    </div>
                    <input type="hidden" name="download" value="1">
                    <button type="submit" class="btn btn-primary-reverse btn-outline-primary">Download</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
