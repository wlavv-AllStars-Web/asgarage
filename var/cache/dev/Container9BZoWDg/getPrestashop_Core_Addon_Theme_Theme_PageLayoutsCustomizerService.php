<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.addon.theme.theme.page_layouts_customizer' shared service.

return $this->services['prestashop.core.addon.theme.theme.page_layouts_customizer'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemePageLayoutsCustomizer(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->theme, ($this->services['prestashop.core.addon.theme.theme_manager'] ?? $this->load('getPrestashop_Core_Addon_Theme_ThemeManagerService.php')), ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ?? ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())));