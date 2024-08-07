<?php

namespace ContainerX6uJk3f;
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterfaceProxyE087c98 implements \Symfony\Component\DependencyInjection\ContainerInterface, \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function initializeLazyObject(): \Symfony\Component\DependencyInjection\ContainerInterface
    {
        if ($state = $this->lazyObjectState ?? null) {
            return $state->realInstance ??= ($state->initializer)();
        }

        return $this;
    }

    public function set(string $id, ?object $service): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
        } else {
            throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::set()".');
        }
    }

    public function get(string $id, int $invalidBehavior = \Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE): ?object
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::get()".');
    }

    public function has(string $id): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->has(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::has()".');
    }

    public function initialized(string $id): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->initialized(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::initialized()".');
    }

    public function getParameter(string $name): \UnitEnum|array|bool|float|int|null|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getParameter(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::getParameter()".');
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasParameter(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::hasParameter()".');
    }

    public function setParameter(string $name, \UnitEnum|array|bool|float|int|null|string $value): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setParameter(...\func_get_args());
        } else {
            throw new \BadMethodCallException('Cannot forward abstract method "Symfony\Component\DependencyInjection\ContainerInterface::setParameter()".');
        }
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ContainerInterfaceProxyE087c98', false)) {
    \class_alias(__NAMESPACE__.'\\ContainerInterfaceProxyE087c98', 'ContainerInterfaceProxyE087c98', false);
}
