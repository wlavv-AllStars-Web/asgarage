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

{capture assign="productClasses"}{if !empty($productClass)}{$productClass}{else}col-xs-12 col-sm-6 col-xl-4{/if}{/capture}
{assign var="currentUrl" value="http://"|cat:$smarty.server.HTTP_HOST|cat:$smarty.server.REQUEST_URI}
{assign var="currentUrlcart" value="http://"|cat:$smarty.server.HTTP_HOST|cat:"/cart"}
<div class="products{if !empty($cssClass)} {$cssClass}{/if}">
    {if $currentUrl == $link->getCategoryLink(2)}
        <div class="clothes" style="width: 1440px;margin:auto;">
        
        {foreach from=$products item="product" key="position"}
            {* <pre>{$product|print_r}</pre> *}
            {if $product.category == "featured"}
                
                    {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
                    
                
            {/if}
        {/foreach}
        </div>
        <div class="section-banner-allproducts">
            <div class="banner_all_products">
            <ul style="display: flex;flex-wrap:wrap;">
                <li><img src="//thehamiltoncollection.com/cdn/shop/files/DSC05109.jpg?v=1692901739&amp;width=1420" alt=""></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC04772.jpg?v=1692901755&width=550" ></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC04718_598c5a63-a3a4-4df4-9bf2-87fb6d8ffebe.jpg?v=1706842419&width=550" alt=""></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC05145_fc3bcee3-9e18-46b3-8dfb-2c32a0139ca7.jpg?v=1692902604&width=550" alt="" ></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC04803.jpg?v=1692901755&width=550" alt="" ></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC04744_ed623c39-c559-47fa-85fa-50c37fd96f6a.jpg?v=1692902224&width=550" alt="" ></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC04695_04722ae7-099a-4b3f-9a4a-136cf25f8422.jpg?v=1706842420&width=550" alt="" ></li>
                <li><img src="https://thehamiltoncollection.com/cdn/shop/files/DSC05199.jpg?v=1692901759&width=550" alt="" ></li>
            </ul>
            </div>
        </div>
        <div class="sticker-banner" style="width: 1440px;display:flex;margin:auto;">
            {hook h='displayHome' mod='displayoneproduct' id_module=28}
        </div>

        <div class="stickers" style="width: 1440px;margin:auto;">
        <h1 style="color: #fff;font-size: 3rem;text-align: start;padding: 2rem 0 1rem 4rem;">Stickers</h1>
        
        {foreach from=$products item="product" key="position"}
            {* <pre>{$product|print_r}</pre> *}
            {if $product.category == "stickers"}
                
                    {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
                    
                
            {/if}
        {/foreach}
        </div>

        <div class="more-imgs" style="display: flex;height:700px;width:100%;">
            <div class="img" style="flex: 1;">
                <img src="//thehamiltoncollection.com/cdn/shop/files/imgonline-com-ua-compressed-Fg9EfWXPx5rBP6Q.jpg?v=1666732714&width=1500"  style="width: 100%;object-fit:cover;height:100%;object-position:center;"/>
            </div>
            <div class="img" style="flex: 1;">
            <img src="//thehamiltoncollection.com/cdn/shop/files/imgonline-com-ua-compressed-ODwMi70Q6E2geFxO.jpg?v=1666732714&width=1500" style="width: 100%;object-fit:cover;height:100%;object-position:center;"/></div>
        </div>
        <div class="banner-product-add" style="">
            <div class="banner-product-add-content" style="">
            {foreach from=$products item="product" key="position"}
            
                {if $product.id_product == 3}

                        {if $product.cover}
                        <img class="js-qv-product-cover" src="{$product.cover.bySize.large_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="" itemprop="image">
                        {/if}
                        {* {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses} *}
                        <div class="banner_content" style="">
                            <h2 style="">Free Simple Pocket T-Shirt</h2>
                            <h5 style="">Spend $100 or more, and get a Simple Pocket T-Shirt for free! Simply add one to your cart and the discount will automatically apply!</h5>

                            <form action="{"http://"|cat:$smarty.server.HTTP_HOST|cat:"/cart"}" method="post" id="add-to-cart-or-refresh">
                                {* <input type="hidden" name="token" value="289e416786a67d6e12fd762ba201be83"> *}
                                <input type="hidden" name="id_product" value="{$product.id_product}" id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="0" id="product_customization_id" class="js-product-customization-id">
                                <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                {l s='Adicionar ao carrinho' d='Shop.Theme.Oneproduct'}
                                </button>
                            </form>
                        </div>
                    
                {/if}
            {/foreach}
            </div>
        </div>
        <div class="more-imgs" style="display: flex;height:700px;width:100%;">
            <div class="img" style="flex: 1;">
                <img src="//thehamiltoncollection.com/cdn/shop/files/imgonline-com-ua-compressed-wED36Jkym1j.jpg?v=1666732715&width=1500"  style="width: 100%;object-fit:cover;height:100%;object-position:center;"/>
            </div>
            <div class="img" style="flex: 1;">
            <img src="//thehamiltoncollection.com/cdn/shop/files/imgonline-com-ua-compressed-YAu05Op0JFzZ.jpg?v=1666732715&width=1500" style="width: 100%;object-fit:cover;height:100%;object-position:center;"/></div>
        </div>
    {elseif $currentUrl == "http://"|cat:$smarty.server.HTTP_HOST|cat:"/"}
        {assign var="productCountIndex" value=0}
        {foreach from=$products item="product" key="position"}
            {if $productCountIndex < 4}
                {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
                {assign var="productCountIndex" value=$productCountIndex+1}
            {/if}
        {/foreach}
    {else} 
        {foreach from=$products item="product" key="position"}
            {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
        {/foreach}
    {/if}
</div>
