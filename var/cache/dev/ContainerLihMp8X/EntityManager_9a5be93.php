<?php

namespace ContainerLihMp8X;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68cfd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22f92 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaf630 = [
        
    ];

    public function getConnection()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getConnection', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getMetadataFactory', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getExpressionBuilder', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'beginTransaction', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getCache', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'transactional', array('func' => $func), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'commit', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->commit();
    }

    public function rollback()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'rollback', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getClassMetadata', array('className' => $className), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'createQuery', array('dql' => $dql), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'createNamedQuery', array('name' => $name), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'createQueryBuilder', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'flush', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'clear', array('entityName' => $entityName), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->clear($entityName);
    }

    public function close()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'close', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->close();
    }

    public function persist($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'persist', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'remove', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'refresh', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'detach', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'merge', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'contains', array('entity' => $entity), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getEventManager', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getConfiguration', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'isOpen', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getUnitOfWork', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getProxyFactory', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'initializeObject', array('obj' => $obj), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'getFilters', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'isFiltersStateClean', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'hasFilters', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return $this->valueHolder68cfd->hasFilters();
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

        $instance->initializer22f92 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder68cfd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68cfd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder68cfd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__get', ['name' => $name], $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        if (isset(self::$publicPropertiesaf630[$name])) {
            return $this->valueHolder68cfd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68cfd;

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

        $targetObject = $this->valueHolder68cfd;
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
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68cfd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68cfd;
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
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__isset', array('name' => $name), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68cfd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68cfd;
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
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__unset', array('name' => $name), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68cfd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68cfd;
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
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__clone', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        $this->valueHolder68cfd = clone $this->valueHolder68cfd;
    }

    public function __sleep()
    {
        $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, '__sleep', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;

        return array('valueHolder68cfd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22f92 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22f92;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22f92 && ($this->initializer22f92->__invoke($valueHolder68cfd, $this, 'initializeProxy', array(), $this->initializer22f92) || 1) && $this->valueHolder68cfd = $valueHolder68cfd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68cfd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68cfd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
