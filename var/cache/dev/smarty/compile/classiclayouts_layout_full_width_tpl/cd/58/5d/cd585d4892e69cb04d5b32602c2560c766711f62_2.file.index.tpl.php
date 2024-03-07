<?php
/* Smarty version 4.3.4, created on 2024-03-06 14:40:56
  from 'C:\xampp\htdocs\asgarage\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e88078cc2d89_83546335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd585d4892e69cb04d5b32602c2560c766711f62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\themes\\classic\\templates\\index.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e88078cc2d89_83546335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133425954965e88078cbdcc5_31950791', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_118610508565e88078cbe912_91979205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_21300118065e88078cc03e0_00919510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_181888908065e88078cbf9e2_38338332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21300118065e88078cc03e0_00919510', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_133425954965e88078cbdcc5_31950791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_133425954965e88078cbdcc5_31950791',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_118610508565e88078cbe912_91979205',
  ),
  'page_content' => 
  array (
    0 => 'Block_181888908065e88078cbf9e2_38338332',
  ),
  'hook_home' => 
  array (
    0 => 'Block_21300118065e88078cc03e0_00919510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118610508565e88078cbe912_91979205', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181888908065e88078cbf9e2_38338332', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
