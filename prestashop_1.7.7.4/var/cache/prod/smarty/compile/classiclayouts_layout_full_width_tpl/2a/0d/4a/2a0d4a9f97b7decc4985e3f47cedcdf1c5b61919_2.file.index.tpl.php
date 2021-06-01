<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:04:04
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ecd4700ea4_13523209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0d4a9f97b7decc4985e3f47cedcdf1c5b61919' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/themes/classic/templates/index.tpl',
      1 => 1622129143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ecd4700ea4_13523209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206449868660b4ecd46f1b51_46583937', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_145556582260b4ecd46f7f33_38521562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_120938626860b4ecd46fb4e7_29730144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_210297620660b4ecd46f9bb5_41554749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120938626860b4ecd46fb4e7_29730144', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_206449868660b4ecd46f1b51_46583937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_206449868660b4ecd46f1b51_46583937',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_145556582260b4ecd46f7f33_38521562',
  ),
  'page_content' => 
  array (
    0 => 'Block_210297620660b4ecd46f9bb5_41554749',
  ),
  'hook_home' => 
  array (
    0 => 'Block_120938626860b4ecd46fb4e7_29730144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145556582260b4ecd46f7f33_38521562', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210297620660b4ecd46f9bb5_41554749', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
