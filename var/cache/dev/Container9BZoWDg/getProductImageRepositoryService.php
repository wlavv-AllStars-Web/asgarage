<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Validate\\ProductImageValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Validate\\ProductImageValidator'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Validate\ProductImageValidator())));
