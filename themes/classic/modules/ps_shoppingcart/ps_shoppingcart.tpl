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
<div id="_desktop_cart">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <div class="header" style="position: relative;">
      {if $cart.products_count > 0}
        <a rel="nofollow" aria-label="{l s='Shopping cart link containing %nbProducts% product(s)' sprintf=['%nbProducts%' => $cart.products_count] d='Shop.Theme.Checkout'}" href="{$cart_url}">
      {/if}
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <span class="material-symbols-outlined" style="color: #fff;font-size:30px;">
        shopping_bag
        </span>
        {* <span class="hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span> *}
        {if $cart.products_count > 0}
        <span class="cart-products-count" style="
          position: absolute;
          bottom: 0px;
          right: 0;
          background: lightblue;
          color: #121212;
          border-radius: 20px;
          font-size: 1rem;
          line-height: 1rem;
          width: 1rem;
          display: flex;
          justify-content: center;
          ">{$cart.products_count}</span>
        {/if}
      {if $cart.products_count > 0}
        </a>
      {/if}
    </div>
  </div>
</div>
