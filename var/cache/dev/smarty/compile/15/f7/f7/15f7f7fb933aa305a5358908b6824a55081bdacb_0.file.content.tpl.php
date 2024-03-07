<?php
/* Smarty version 4.3.4, created on 2024-03-06 14:41:02
  from 'C:\xampp\htdocs\asgarage\adminasgarage\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8807e689920_02716285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f7f7fb933aa305a5358908b6824a55081bdacb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\adminasgarage\\themes\\new-theme\\template\\content.tpl',
      1 => 1707475021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8807e689920_02716285 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
