<?php
/* Smarty version 4.3.4, created on 2024-03-06 14:40:57
  from 'C:\xampp\htdocs\asgarage\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e88079bd12a2_25609819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b576f89515b75c83ff8b40ce4be830dd29c9bcba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e88079bd12a2_25609819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\asgarage\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\b5\\76\\f8\\b576f89515b75c83ff8b40ce4be830dd29c9bcba_2.file.helpers.tpl.php',
    'uid' => 'b576f89515b75c83ff8b40ce4be830dd29c9bcba',
    'call_name' => 'smarty_template_function_renderLogo_135794821165e88079a96cd1_78579012',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_135794821165e88079a96cd1_78579012 */
if (!function_exists('smarty_template_function_renderLogo_135794821165e88079a96cd1_78579012')) {
function smarty_template_function_renderLogo_135794821165e88079a96cd1_78579012(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_135794821165e88079a96cd1_78579012 */
}
