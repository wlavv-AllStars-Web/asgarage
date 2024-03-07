<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdfc91 = null;
    private $initializerb40ad = null;
    private static $publicPropertiesedde1 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getList', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getInstalledModules', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getMustBeConfiguredModules', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getUpgradableModules', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'setActionUrls', array('collection' => $collection), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return $this->valueHolderdfc91->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerb40ad = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderdfc91) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderdfc91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderdfc91->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__get', ['name' => $name], $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        if (isset(self::$publicPropertiesedde1[$name])) {
            return $this->valueHolderdfc91->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfc91;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdfc91;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfc91;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdfc91;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__isset', array('name' => $name), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfc91;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdfc91;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__unset', array('name' => $name), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfc91;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdfc91;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__clone', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        $this->valueHolderdfc91 = clone $this->valueHolderdfc91;
    }
    public function __sleep()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__sleep', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
        return array('valueHolderdfc91');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb40ad = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb40ad;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'initializeProxy', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdfc91;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdfc91;
    }
}
