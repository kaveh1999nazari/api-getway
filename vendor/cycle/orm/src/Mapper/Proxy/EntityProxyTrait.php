<?php

declare(strict_types=1);

namespace Cycle\ORM\Mapper\Proxy;

use Cycle\ORM\Mapper\Proxy\Hydrator\PropertyMap;
use Cycle\ORM\Reference\ReferenceInterface;
use Cycle\ORM\RelationMap;

/**
 * @internal
 */
trait EntityProxyTrait
{
    public RelationMap $__cycle_orm_rel_map;
    public PropertyMap $__cycle_orm_relation_props;
    public array $__cycle_orm_rel_data = [];

    public function __get(string $name)
    {
        $relation = $this->__cycle_orm_rel_map->getRelations()[$name] ?? null;
        if ($relation === null) {
            return \method_exists(parent::class, '__get')
                ? parent::__get($name)
                : $this->$name;
        }

        $value = $this->__cycle_orm_rel_data[$name] ?? null;
        if ($value instanceof ReferenceInterface) {
            $value = $relation->collect($relation->resolve($value, true));
            $this->$name = $value;
            unset($this->__cycle_orm_rel_data[$name]);
            return $value;
        }

        throw new \RuntimeException(\sprintf('Property %s.%s is not initialized.', \get_parent_class(static::class), $name));
    }

    public function __unset(string $name): void
    {
        if (\array_key_exists($name, $this->__cycle_orm_rel_map->getRelations())) {
            $propertyClass = $this->__cycle_orm_relation_props->getPropertyClass($name);
            if ($propertyClass === PropertyMap::PUBLIC_CLASS) {
                unset($this->$name);
            } else {
                \Closure::bind(static function (object $object, string $property): void {
                    unset($object->{$property});
                }, null, $propertyClass)($this, $name);
            }
        }
        if (\method_exists(parent::class, '__unset')) {
            parent::__unset($name);
        }
    }

    public function __set(string $name, $value): void
    {
        if (!\array_key_exists($name, $this->__cycle_orm_rel_map->getRelations())) {
            if (!\method_exists(parent::class, '__set')) {
                throw new \Error(\sprintf(
                    'Cannot access non-public property %s::$%s',
                    \get_parent_class(static::class),
                    $name,
                ));
            }

            parent::__set($name, $value);
            return;
        }

        if ($value instanceof ReferenceInterface) {
            $this->__cycle_orm_rel_data[$name] = $value;
            return;
        }
        unset($this->__cycle_orm_rel_data[$name]);

        $propertyClass = $this->__cycle_orm_relation_props->getPropertyClass($name);
        if ($propertyClass === PropertyMap::PUBLIC_CLASS) {
            $this->$name = $value;
        } else {
            \Closure::bind(static function (object $object, string $property, $value): void {
                $object->{$property} = $value;
            }, null, $propertyClass)($this, $name, $value);
        }
    }

    public function __debugInfo(): array
    {
        $result = \method_exists(parent::class, '__debugInfo') ? parent::__debugInfo() : (array) $this;
        unset($result['__cycle_orm_rel_map'], $result['__cycle_orm_rel_data'], $result['__cycle_orm_relation_props']);
        return $result;
    }
}
