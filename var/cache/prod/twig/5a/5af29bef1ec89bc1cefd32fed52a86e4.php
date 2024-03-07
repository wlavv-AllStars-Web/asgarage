<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4055bb462a3f197e1179ca4fef433de5 */
class __TwigTemplate_2ed5e8b82506f1cfba626ab9d235698c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Tema Gráfico e Logótipo > Tema gráfico • As Garage</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Ler esta mensagem';
    var token = '2129daeaec96329725befe99c91d38d8';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '3c07c32b82266ba3aec7be4226df7d67';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminasgarage/index.php/improve/modules/manage?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4';
    var admin_notification_get_link = '/adminasgarage/index.php/common/notifications?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4';
    var admin_notification_push_link = adminNotificationPushLink = '/adminasgarage/index.php/common/notifications/ack?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
  ";
        // line 43
        echo "  var search_product_msg = 'Pesquisar um produto';
  </script>



<link
      rel=\"preload\"
      href=\"/adminasgarage/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminasgarage/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminasgarage/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminasgarage\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminasgarage\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
";
        // line 71
        echo "</script>
<script type=\"text/javascript\" src=\"/adminasgarage/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/adminasgarage/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/adminasgarage/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminthemes\"
  data-base-url=\"/adminasgarage/index.php\"  data-token=\"o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminDashboard&amp;token=1ac54d8918e84d322ae044b8635eb5b3\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e127be5f6974abe6472f48df9c8ae2b3\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminasgarage/index.php/improve/modules/manage?token=6ec124057b732afcaad730e5928d96c5\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminasgarage/index.php/sell/catalog/categories/new?token=6ec124057b732afcaad730e5928d96c5\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://192.168.1.64:82/adminasgarage/index.php/sell/catalog/products-v2/create?token=6ec124057b732afcaad730e5928d96c5\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropd";
        // line 120
        echo "own-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5428dc88572696172941338e6eee160d\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminasgarage/index.php/sell/orders?token=6ec124057b732afcaad730e5928d96c5\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"8\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminQuickAccesses&token=21501a58dccf3201d86aed2c0c136db2\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Theme &amp; Logo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminQuickAccesses&token=21501a58dccf3201d86aed2c0c136db2\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminasgarage/index.php?controller=AdminSearch&amp;token=1a3cbe3e1c85b57916b779f3a1100728\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-sear";
        // line 160
        echo "ch\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeh";
        // line 174
        echo "older=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e127be5f6974abe6472f48df9c8ae2b3\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/index.php/improve/modules/manage?token=6ec124057b732afcaad730e5928d96c5\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/index.php/sell/catalog/categories/new?token=6ec124057b732afcaad730e5928d96c5\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/index.php/sell/catalog/products-v2/create?token=6ec124057b732afcaad730e5928d96c5\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5428dc88572696172941338e6eee160d\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminasgarage/";
        // line 214
        echo "index.php/sell/orders?token=6ec124057b732afcaad730e5928d96c5\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"199\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminQuickAccesses&token=21501a58dccf3201d86aed2c0c136db2\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Theme &amp; Logo - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminQuickAccesses&token=21501a58dccf3201d86aed2c0c136db2\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://192.168.1.64:82/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=";
        // line 261
        echo "\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=aab97206d643e468d7043352fcfcd158\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por";
        // line 311
        echo " enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://192.168.1.64:82/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span";
        // line 361
        echo " class=\"employee_profile\">Seja bem-vindo ao Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminasgarage/index.php/configure/advanced/employees/1/edit?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminLogin&amp;logout=1&amp;token=6145499c250c98fc9dfab54fe9e57194\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminasgarage/index.php/configure/advanced/employees/toggle-navigation?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminDashboard&amp;token=1ac54d8918e84d322ae044b8635eb5b3\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminDashboard&amp;token=1ac54d8918e84d322ae044b8635eb5b3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    ";
        // line 410
        echo "
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminasgarage/index.php/sell/orders/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminasgarage/index.php/sell/orders/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminasgarage/index.php/sell/orders/invoices/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Invoices
           ";
        // line 444
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminasgarage/index.php/sell/orders/credit-slips/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminasgarage/index.php/sell/orders/delivery-slips/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCarts&amp;token=aab97206d643e468d7043352fcfcd158\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatal";
        // line 477
        echo "og\">
                    <a href=\"/adminasgarage/index.php/sell/catalog/products?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminasgarage/index.php/sell/catalog/products?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminasgarage/index.php/sell/catalog/categories?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                       ";
        // line 508
        echo "         <a href=\"/adminasgarage/index.php/sell/catalog/monitoring/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminAttributesGroups&amp;token=3f7c7c6cce412e193665732cb4b87b5c\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminasgarage/index.php/sell/catalog/brands/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminasgarage/index.php/sell/attachments/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                    ";
        // line 538
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCartRules&amp;token=5428dc88572696172941338e6eee160d\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminasgarage/index.php/sell/stocks/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminasgarage/index.php/sell/customers/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                  ";
        // line 569
        echo "                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminasgarage/index.php/sell/customers/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminasgarage/index.php/sell/addresses/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCustomerThreads&amp;token=ff31aabf14326be28d2aff65f975a858\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                              ";
        // line 600
        echo "              </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCustomerThreads&amp;token=ff31aabf14326be28d2aff65f975a858\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminasgarage/index.php/sell/customer-service/order-messages/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminReturn&amp;token=2a05b2f19b32ee7895038c283497ff93\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
            ";
        // line 632
        echo "      <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminStats&amp;token=e127be5f6974abe6472f48df9c8ae2b3\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminasgarage/index.php/improve/modules/manage?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                 ";
        // line 668
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminasgarage/index.php/improve/modules/manage?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminasgarage/index.php/improve/design/themes/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/adminasgarage/index.php/improve/design/them";
        // line 697
        echo "es/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminasgarage/index.php/improve/design/mail_theme/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminasgarage/index.php/improve/design/cms-pages/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminasgarage/index.php/improve/design/modules/positions/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-A";
        // line 728
        echo "dminImages\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminImages&amp;token=45f321c033379f8f2d297b2e2fa2182c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminasgarage/index.php/modules/link-widget/list?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCarriers&amp;token=1f8cf5db5a9e8d6003796b7684563070\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
       ";
        // line 760
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminCarriers&amp;token=1f8cf5db5a9e8d6003796b7684563070\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminasgarage/index.php/improve/shipping/preferences/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminasgarage/index.php/improve/payment/payment_methods?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu p";
        // line 790
        echo "anel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminasgarage/index.php/improve/payment/payment_methods?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminasgarage/index.php/improve/payment/preferences?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminasgarage/index.php/improve/international/localization/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
    ";
        // line 822
        echo "                                        </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminasgarage/index.php/improve/international/localization/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminasgarage/index.php/improve/international/zones/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminasgarage/index.php/improve/international/taxes/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
               ";
        // line 852
        echo "                 <a href=\"/adminasgarage/index.php/improve/international/translations/settings?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminasgarage/index.php/configure/shop/preferences/preferences?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminasgarage/index.php/configure/shop/preferences/preferences?_token=o2NQelVwimOYE9";
        // line 887
        echo "Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminasgarage/index.php/configure/shop/order-preferences/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminasgarage/index.php/configure/shop/product-preferences/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminasgarage/index.php/configure/shop/customer-preferences/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data";
        // line 918
        echo "-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminasgarage/index.php/configure/shop/contacts/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminasgarage/index.php/configure/shop/seo-urls/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminSearchConf&amp;token=f1b7f0c322a87816c6e01586c17e6f1f\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminasgarage/index.php/configure/advanced/system-information/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
            ";
        // line 948
        echo "          <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/system-information/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/performance/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/administration/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Administration
             ";
        // line 977
        echo "                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/emails/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/import/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/employees/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/sql-requests/?_to";
        // line 1008
        echo "ken=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/logs/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/webservice-keys/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/feature-flags/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                ";
        // line 1037
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminasgarage/index.php/configure/advanced/security/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminasgarage/index.php/improve/design/themes/?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\" aria-current=\"page\">Theme &amp; Logo</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema Gráfico e Logótipo &gt; Tema gráfico          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/adminasgarage/index.php/improve/design/themes/import?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"                  title=\"Adicionar novo tema gráfico\"                                  >
                  <i class=\"material-icons\">add</i>                  Adicionar novo tema gráfico
                </a>
                                                                        <a
                  class=\"btn btn-";
        // line 1086
        echo "primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/adminasgarage/index.php/improve/design/themes/export?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"                  title=\"Exportar tema atual\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema atual
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminasgarage/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.1.4%2526country%253Dpt/Ajuda?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/adminasgarage/index.php/improve/design/themes/import?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"              title=\"Adicionar novo tema gráfico\"            >
              Adicionar novo tema gráfico
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"pa";
        // line 1123
        echo "ge-header-desc-floating-configuration-export\"
              href=\"/adminasgarage/index.php/improve/design/themes/export?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"              title=\"Exportar tema atual\"            >
              Exportar tema atual
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminasgarage/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.1.4%2526country%253Dpt/Ajuda?_token=o2NQelVwimOYE9Vc6Nwuho4wU2W4B_JaRXb39pWQMY4\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1153
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://192.168.1.64:82/adminasgarage/index.php?controller=AdminDashboard&amp;token=1ac54d8918e84d322ae044b8635eb5b3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1187
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1153
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1187
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__4055bb462a3f197e1179ca4fef433de5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1350 => 1187,  1329 => 1153,  1318 => 83,  1309 => 1187,  1269 => 1153,  1237 => 1123,  1198 => 1086,  1147 => 1037,  1116 => 1008,  1083 => 977,  1052 => 948,  1020 => 918,  987 => 887,  950 => 852,  918 => 822,  884 => 790,  852 => 760,  818 => 728,  785 => 697,  754 => 668,  716 => 632,  682 => 600,  649 => 569,  616 => 538,  584 => 508,  551 => 477,  516 => 444,  480 => 410,  429 => 361,  377 => 311,  325 => 261,  276 => 214,  234 => 174,  218 => 160,  176 => 120,  134 => 83,  120 => 71,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4055bb462a3f197e1179ca4fef433de5", "");
    }
}
