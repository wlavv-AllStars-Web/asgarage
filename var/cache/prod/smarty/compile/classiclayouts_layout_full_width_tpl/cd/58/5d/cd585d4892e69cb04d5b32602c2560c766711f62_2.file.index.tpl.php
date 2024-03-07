<?php
/* Smarty version 4.3.4, created on 2024-03-06 17:45:59
  from 'C:\xampp\htdocs\asgarage\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8abd704ae76_69772396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd585d4892e69cb04d5b32602c2560c766711f62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\themes\\classic\\templates\\index.tpl',
      1 => 1709745866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8abd704ae76_69772396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211517048965e8abd70490d8_19631223', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_22736656565e8abd7049545_34031025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_81005151765e8abd7049ef4_96111187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_48804029065e8abd7049bb4_04203577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81005151765e8abd7049ef4_96111187', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_211517048965e8abd70490d8_19631223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_211517048965e8abd70490d8_19631223',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_22736656565e8abd7049545_34031025',
  ),
  'page_content' => 
  array (
    0 => 'Block_48804029065e8abd7049bb4_04203577',
  ),
  'hook_home' => 
  array (
    0 => 'Block_81005151765e8abd7049ef4_96111187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      
      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22736656565e8abd7049545_34031025', 'page_content_top', $this->tplIndex);
?>

          
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48804029065e8abd7049bb4_04203577', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
