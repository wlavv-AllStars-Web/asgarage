<?php
/* Smarty version 4.3.4, created on 2024-03-06 17:45:59
  from 'C:\xampp\htdocs\asgarage\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8abd715e769_09031526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d15ed881fe88f0e027d3cb8b459eb64682894e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\themes\\classic\\templates\\page.tpl',
      1 => 1709746022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8abd715e769_09031526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177501208065e8abd7157ba3_94057340', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18136119765e8abd7158616_51467154 extends Smarty_Internal_Block
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
class Block_62853230565e8abd7158086_02531801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18136119765e8abd7158616_51467154', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_111936474265e8abd715c634_42099371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_91116952165e8abd715cda8_81248337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
          
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_173091841465e8abd715c092_76602206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111936474265e8abd715c634_42099371', 'page_content_top', $this->tplIndex);
?>

          
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91116952165e8abd715cda8_81248337', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3506091765e8abd715daf6_85564862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_191781704165e8abd715d7c6_40307555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3506091765e8abd715daf6_85564862', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_177501208065e8abd7157ba3_94057340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_177501208065e8abd7157ba3_94057340',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_62853230565e8abd7158086_02531801',
  ),
  'page_title' => 
  array (
    0 => 'Block_18136119765e8abd7158616_51467154',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_173091841465e8abd715c092_76602206',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_111936474265e8abd715c634_42099371',
  ),
  'page_content' => 
  array (
    0 => 'Block_91116952165e8abd715cda8_81248337',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_191781704165e8abd715d7c6_40307555',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3506091765e8abd715daf6_85564862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62853230565e8abd7158086_02531801', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173091841465e8abd715c092_76602206', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191781704165e8abd715d7c6_40307555', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
