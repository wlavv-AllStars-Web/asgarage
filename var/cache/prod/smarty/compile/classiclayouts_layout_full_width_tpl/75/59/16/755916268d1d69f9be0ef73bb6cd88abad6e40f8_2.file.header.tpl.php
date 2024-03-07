<?php
/* Smarty version 4.3.4, created on 2024-03-06 17:46:00
  from 'C:\xampp\htdocs\asgarage\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8abd8586a10_07880639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '755916268d1d69f9be0ef73bb6cd88abad6e40f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asgarage\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1709744721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8abd8586a10_07880639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142100779865e8abd857f149_93863906', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10529997765e8abd85826b8_02470397', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50795690965e8abd8583f50_16662187', 'header_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150939477365e8abd8585849_05217237', 'header_bottom');
?>


<?php }
/* {block 'header_banner'} */
class Block_142100779865e8abd857f149_93863906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_142100779865e8abd857f149_93863906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_10529997765e8abd85826b8_02470397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_10529997765e8abd85826b8_02470397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-sm-down">
                    <div class="col-md-12 col-xs-12" style="display: flex;justify-content:center;height:50px">
            <a class="animate-arrow">Schedule Collection Tour Here!
                        <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
            </path></svg>
            </a>
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_50795690965e8abd8583f50_16662187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_50795690965e8abd8583f50_16662187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
                <div class="col-md-5">
          <i class="fa-solid fa-magnifying-glass"  style="color: #fff;font-size: 1.5rem;"></i>
          <div style="display: none;">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="col-md-2" id="_desktop_logo" style="display: flex;justify-content:center;">
        <img src="//thehamiltoncollection.com/cdn/shop/files/New_logo.png?v=1670879737" width="100" height="68">
        </div>
        <div class="col-md-5" style="display: flex;justify-content:end;">
          <svg class="icon icon-cart-empty" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
            <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"></path>
          </svg>
        </div>
              </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
    <div class="container">
        <ul class="menu-top">
          <li><a class="active">Welcome</a></li>
          <li><a>Shop</a></li>
          <li><a>Collection</a></li>
          <li><a>Mission & Journey</a></li>
          <li><a>Contact</a></li>
          <li><a>Giveaway</a></li>
        </ul>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
/* {block 'header_bottom'} */
class Block_150939477365e8abd8585849_05217237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_150939477365e8abd8585849_05217237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-bottom">
    <div class="container">
       <div class="row">
       <div class="header-bottom-content">
        <h1>Want to Drive a Hyper/Supercar from the Collection?</h1>
        <h6>Sign up for a rental slot below!</h6>
        <div class="btn">Schedule Rental Here!</div>
       </div>
       </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_bottom'} */
}
