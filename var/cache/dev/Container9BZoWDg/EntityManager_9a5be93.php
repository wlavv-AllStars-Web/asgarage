<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdfc91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb40ad = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesedde1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getConnection', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getMetadataFactory', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getExpressionBuilder', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'beginTransaction', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getCache', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'transactional', array('func' => $func), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'commit', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->commit();
    }

    public function rollback()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'rollback', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getClassMetadata', array('className' => $className), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'createQuery', array('dql' => $dql), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'createNamedQuery', array('name' => $name), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'createQueryBuilder', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'flush', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'clear', array('entityName' => $entityName), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->clear($entityName);
    }

    public function close()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'close', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->close();
    }

    public function persist($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'persist', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'remove', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'refresh', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'detach', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'merge', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'contains', array('entity' => $entity), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getEventManager', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getConfiguration', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'isOpen', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getUnitOfWork', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getProxyFactory', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'initializeObject', array('obj' => $obj), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'getFilters', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'isFiltersStateClean', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, 'hasFilters', array(), $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        return $this->valueHolderdfc91->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb40ad = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdfc91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdfc91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdfc91->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb40ad && ($this->initializerb40ad->__invoke($valueHolderdfc91, $this, '__get', ['name' => $name], $this->initializerb40ad) || 1) && $this->valueHolderdfc91 = $valueHolderdfc91;

        if (isset(self::$publicPropertiesedde1[$name])) {
            return $this->valueHolderdfc91->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
