<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Extension\IntegerTypeExtension' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Extension\\IntegerTypeExtension'] = new \PrestaShopBundle\Form\Extension\IntegerTypeExtension(($this->privates['PrestaShop\\PrestaShop\\Core\\Localization\\Number\\LocaleNumberTransformer'] ?? $this->load('getLocaleNumberTransformerService.php')));
