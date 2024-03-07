{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-sm-down">
          {* <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div> *}
          <div class="col-md-12 col-xs-12" style="display: flex;justify-content:center;height:50px">
            <a class="animate-arrow">Schedule Collection Tour Here!
            {* <i class="fa-solid fa-arrow-right-long" style="color: #121212;font-size: 1.5rem;margin-block:auto;margin-left:1rem;"></i> *}
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
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        {* <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div> *}
        <div class="col-md-5">
          <i class="fa-solid fa-magnifying-glass"  style="color: #fff;font-size: 1.5rem;"></i>
          <div style="display: none;">
          {hook h='displayTop'}
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
        {* <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
        </div> *}
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
  {hook h='displayNavFullWidth'}
{/block}

{block name='header_bottom'}
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
  {hook h='displayNavFullWidth'}
{/block}

