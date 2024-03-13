<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
require_once(dirname(__FILE__) . '/../../config/config.inc.php');
require_once(dirname(__FILE__) . '/../../init.php');

class DisplayOneProduct extends Module
{
    public function __construct()
    {
        $this->name = 'displayoneproduct';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Paulo Gonçalves';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Display One Product');
        $this->description = $this->l('Display one specific product on the home page.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('moduleRoutes');
    }

    public function uninstall()
    {
        return parent::uninstall() &&
        $this->registerHook('displayHome') &&
        $this->registerHook('moduleRoutes');
    }

    public function hookDisplayHome($params)
    {
        $productId = 7; // Change this to the ID of the product you want to display

        $langId = (int) Context::getContext()->language->id;
        $product = new Product($productId, false, $langId);
        $priceDisplay = $product->getPrice(true, null, 6);
        $cover = $product->getCover($productId);
        $imageUrl = $this->context->link->getImageLink($product->link_rewrite, $cover['id_image'], 'home_default');
        $productLink = $this->context->link->getProductLink($productId);

        if (Validate::isLoadedObject($product)) {

            $productData = array(
                'product_id' => $productId,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $priceDisplay,
                'link_rewrite' => $product->link_rewrite,
                'product_link' => $productLink,
                'image_url' => $imageUrl,
            );

            $this->context->smarty->assign('product', $productData);
            return $this->display(__FILE__, 'product_display.tpl');
        }
    }

}
