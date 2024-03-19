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
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        if (!Configuration::get('DISPLAY_ONE_PRODUCT_ID')) {
            Configuration::updateValue('DISPLAY_ONE_PRODUCT_ID', 0); // Default to product ID 0
        }
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall() &&
        $this->registerHook('displayHome');
    }


    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->name)) {
            $productId = (int)Tools::getValue('DISPLAY_ONE_PRODUCT_ID');
            Configuration::updateValue('DISPLAY_ONE_PRODUCT_ID', $productId);
            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }

        return $output.$this->displayForm();
    }

    public function hookDisplayHome($params)
    {
        $productId = Configuration::get('DISPLAY_ONE_PRODUCT_ID');

        $langId = (int) Context::getContext()->language->id;
        $product = new Product($productId, false, $langId);
        $priceDisplay = $product->getPrice(true, null, 6);
        $cover = $product->getCover($productId);
        $imageUrl = $this->context->link->getImageLink($product->link_rewrite, $cover['id_image'], 'large_default');
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

    public function displayForm()
{
    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

    $fields_form[0]['form'] = array(
        'legend' => array(
            'title' => $this->l('Settings'),
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => $this->l('Product ID'),
                'name' => 'DISPLAY_ONE_PRODUCT_ID',
                'size' => 20,
                'required' => true,
            ),
        ),
        'submit' => array(
            'title' => $this->l('Save'),
            'class' => 'btn btn-default pull-right'
        )
    );

    $helper = new HelperForm();
    $helper->module = $this;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
    $helper->default_form_language = $default_lang;
    $helper->allow_employee_form_lang = $default_lang;
    $helper->title = $this->displayName;
    $helper->show_toolbar = true;
    $helper->toolbar_scroll = true;
    $helper->submit_action = 'submit'.$this->name;

    $helper->fields_value['DISPLAY_ONE_PRODUCT_ID'] = Configuration::get('DISPLAY_ONE_PRODUCT_ID');

    return $helper->generateForm($fields_form);
}



}
