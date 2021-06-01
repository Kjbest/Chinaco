<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:04:04
  from '/Applications/MAMP/htdocs/prestashop_1.7.7.4/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4ecd471e473_93824097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '773bb536972130e6909115024a2a73a02d880c6b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.7.4/themes/classic/templates/page.tpl',
      1 => 1622129143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ecd471e473_93824097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122071235560b4ecd470d287_59895516', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_101704893360b4ecd4710691_61139650 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_69034615060b4ecd470e973_93138793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101704893360b4ecd4710691_61139650', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_99023849860b4ecd47173c9_09410476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_93592959460b4ecd4718bb7_73403115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_122766776460b4ecd4715df3_33040177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99023849860b4ecd47173c9_09410476', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93592959460b4ecd4718bb7_73403115', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20189673360b4ecd471c1d2_82648511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_73755385160b4ecd471b3f3_03560384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20189673360b4ecd471c1d2_82648511', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_122071235560b4ecd470d287_59895516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122071235560b4ecd470d287_59895516',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_69034615060b4ecd470e973_93138793',
  ),
  'page_title' => 
  array (
    0 => 'Block_101704893360b4ecd4710691_61139650',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_122766776460b4ecd4715df3_33040177',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_99023849860b4ecd47173c9_09410476',
  ),
  'page_content' => 
  array (
    0 => 'Block_93592959460b4ecd4718bb7_73403115',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_73755385160b4ecd471b3f3_03560384',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20189673360b4ecd471c1d2_82648511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69034615060b4ecd470e973_93138793', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122766776460b4ecd4715df3_33040177', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73755385160b4ecd471b3f3_03560384', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
