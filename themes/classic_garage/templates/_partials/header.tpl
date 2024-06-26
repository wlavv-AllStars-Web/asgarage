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
        <div class="">
          {* <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div> *}
          <div class="col-md-12 col-xs-12" style="display: flex;justify-content:center;height:50px">
            <a class="animate-arrow">{l s='Schedule Collection Tour Here!' d='Shop.Theme.Asgarage'}
            {* <i class="fa-solid fa-arrow-right-long" style="color: #121212;font-size: 1.5rem;margin-block:auto;margin-left:1rem;"></i> *}
            <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
            </path></svg>
            </a>
          </div>
        </div>
        {* <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div> *}
      </div>
    </div>
  </nav>
{/block}
{assign var="currentUrl" value="http://"|cat:$smarty.server.HTTP_HOST|cat:$smarty.server.REQUEST_URI}
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
        <div class="hidden-md-up text-sm-center mobile col-xs-12">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <a href="/">
            <div class="top-logo" id="_mobile_logo">
              <img src="/img/ASGarage.png" width="100" width="auto">
            </div>
          </a>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-5">
          <div class="search_container">
            <i class="fa-solid fa-magnifying-glass"  style="color: #fff;font-size: 1.5rem;"></i>
            {hook h='displaySearch' mod='ps_searchbar' id_module=11}
          </div>
          <div style="display: none;">
            {hook h='displayTop'}
          </div>
        </div>
        <div class="col-md-2  hidden-md-down" id="_desktop_logo" style="display: flex;justify-content:center;">
          <img src="/img/ASGarage.png" width="100" width="auto">
        </div>
        <div class="col-md-5  hidden-md-down" style="display: flex;justify-content:end;gap:1rem;">
          {hook h='displayNav2' mod='ps_languageselector'}
          {hook h='displayNav2' mod='ps_shoppingcart' id_module=9}
        </div>
        {* <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
        </div> *}
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" >
          <ul id="top-menu">
            <li class=" {if $currentUrl == "http://"|cat:$smarty.server.HTTP_HOST|cat:"/"}activeMenuMobile{/if}"><a href="/">{l s='Welcome' d='Shop.Theme.Menu'}</a></li>
            <li  class=" {if $currentUrl == $link->getCategoryLink(2)|escape:'html':'UTF-8'}activeMenuMobile{/if}"><a href="{$link->getCategoryLink(2)|escape:'html':'UTF-8'}">{l s='Shop' d='Shop.Theme.Menu'}</a></li>
            <li class=" {if $currentUrl == $link->getCMSLink(6)|escape:'html':'UTF-8'}activeMenuMobile{/if}"><a href="{$link->getCMSLink(6)|escape:'html':'UTF-8'}">{l s='Collection' d='Shop.Theme.Menu'}</a></li>
            <li class=" {if $currentUrl == $link->getCMSLink(7)|escape:'html':'UTF-8'}activeMenuMobile{/if}"><a href="{$link->getCMSLink(7)|escape:'html':'UTF-8'}">{l s='Mission & Journey' d='Shop.Theme.Menu'}</a></li>
            <li class=" {if $currentUrl == $link->getPageLink('contact',true)|escape:'html':'UTF-8'}activeMenuMobile{/if}"><a href="{$link->getPageLink('contact',true)|escape:'html':'UTF-8'}">{l s='Contact' d='Shop.Theme.Menu'}</a></li>
          </ul>
          <ul id="top-menu-footer">
          {hook h='displayFooterAfter' mod='ps_socialfollow' id_module=20}
          </ul>
        </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
    

    <div class="container hidden-md-down">
        <ul class="menu-top">
          <li><a class=" {if $currentUrl == "http://"|cat:$smarty.server.HTTP_HOST|cat:"/"}activeMenu{/if}" href="/">{l s='Welcome' d='Shop.Theme.Menu'}</a></li>
          <li><a class=" {if $currentUrl == $link->getCategoryLink(2)|escape:'html':'UTF-8'}activeMenu{/if}" href="{$link->getCategoryLink(2)|escape:'html':'UTF-8'}">{l s='Shop' d='Shop.Theme.Menu'}</a></li>
          <li><a class=" {if $currentUrl == $link->getCMSLink(6)|escape:'html':'UTF-8'}activeMenu{/if}" href="{$link->getCMSLink(6)|escape:'html':'UTF-8'}">{l s='Collection' d='Shop.Theme.Menu'}</a></li>
          <li><a class=" {if $currentUrl == $link->getCMSLink(7)|escape:'html':'UTF-8'}activeMenu{/if}"  href="{$link->getCMSLink(7)|escape:'html':'UTF-8'}">{l s='Mission & Journey' d='Shop.Theme.Menu'}</a></li>
          <li><a class=" {if $currentUrl == $link->getPageLink('contact',true)|escape:'html':'UTF-8'}activeMenu{/if}"  href="{$link->getPageLink('contact',true)|escape:'html':'UTF-8'}">{l s='Contact' d='Shop.Theme.Menu'}</a></li>
        </ul>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}

{block name='header_bottom'}
  {* <div class="header-bottom">
    <div class="container">
       <div class="row">
       <div class="header-bottom-content">
        <h1>Want to Drive a Hyper/Supercar from the Collection?</h1>
        <h6>Sign up for a rental slot below!</h6>
        <div class="btn">Schedule Rental Here!</div>
       </div>
       </div>
    </div>
  </div> *}
  {hook h='displayNavFullWidth'}
{/block}

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const iconSearch = document.querySelector(".search_container .fa-magnifying-glass")
    const searchInput = document.querySelector(".search_container #search_widget")
    if(iconSearch){
      iconSearch.addEventListener("click", () => {
        searchInput.classList.toggle("search_active")
      })
    }

  });
</script>