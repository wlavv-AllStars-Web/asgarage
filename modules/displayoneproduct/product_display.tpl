{* <pre>{$product|print_r}</pre> *}

<div class="product-display" style="display: flex;">
    <div class="product-display-img" onclick="location.href='{$product.product_link}';">
        {hook h='displayHome' mod='ps_banner' id_module=14}
    </div>
    <div class="banner_content">
        <h1 style="font-size: 3rem;color:#fff;margin-bottom:1rem;">{$product.name}</h1>
        <h5>€{$product.price} EUR</h5>
        <p><a href="{$link->getCMSLink(5)}" style="text-decoration: underline;">Shipping</a> calculated at checkout.</p>
        <form action="http://192.168.1.64:82/cart" method="post" id="add-to-cart-or-refresh">
            <input type="hidden" name="token" value="289e416786a67d6e12fd762ba201be83">
            <input type="hidden" name="id_product" value="{$product.product_id}" id="product_page_product_id">
            <input type="hidden" name="id_customization" value="0" id="product_customization_id" class="js-product-customization-id">
            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
            {l s='Adicionar ao carrinho' d='Shop.Theme.Oneproduct'}
            </button>
        </form>
        <div>
            <a href="{$product.product_link}" class="animate-arrow">View full details<svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
          </path></svg></a>
        </div>
    </div>
    
</div>

