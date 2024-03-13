<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class AddToCartController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Get product ID from the request
        $productId = (int) Tools::getValue('id_product');

        // Check if product ID is valid
        if ($productId > 0) {
            // Add product to cart
            $cart = $this->context->cart;
            $cart->updateQty(1, $productId);
            $cart->update();

            // Return JSON response
            $this->ajaxDie(json_encode(array(
                'success' => true,
                'message' => $this->module->l('Product added to cart successfully.'),
            )));
        } else {
            $this->ajaxDie(json_encode(array(
                'success' => false,
                'message' => $this->module->l('Invalid product ID.'),
            )));
        }
    }
}
