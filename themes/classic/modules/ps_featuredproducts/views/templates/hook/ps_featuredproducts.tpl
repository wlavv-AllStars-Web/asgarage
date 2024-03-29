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
 {assign var="currentUrl" value="http://"|cat:$smarty.server.HTTP_HOST|cat:$smarty.server.REQUEST_URI}
<section class="featured-products clearfix">
<div class="container">
{if $currentUrl == $link->getCMSLink(7)|escape:'html':'UTF-8'}
  <h1 class="h2 products-section-title" style="margin: 2rem 0 1rem 0;font-weight: 700;text-align:start;font-size:3rem;color:#fff;">
  {l s='Featured Merch' d='Shop.Theme.Featured'}
</h1>

{include file="catalog/_partials/productlist.tpl" products=$products cssClass="row" productClass="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}

{else}

  <h1 class="h2 products-section-title text-uppercase" style="margin: 2rem 0 1rem 0;font-weight: 700;text-align:start;font-size:3rem;color:#fff;">
  {l s='Check Out Our Merch!' d='Shop.Theme.Featured'}
</h1>
<p class="h2 products-section-subtitle text-uppercase" style="margin-bottom: 2rem;color: #7a7a7a">
  {l s='All Merch Proceeds are Donated to Charity!' d='Shop.Theme.Featured'}
</p>
{include file="catalog/_partials/productlist.tpl" products=$products cssClass="row" productClass="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
<div class="container-all-product-link">
  <a class="all-product-link float-xs-left float-md-right h4" href="{$link->getCategoryLink(2)|escape:'html':'UTF-8'}">
    {l s='VIEW ALL' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
  </a>
</div>
{/if}
  
</div>
</section>
