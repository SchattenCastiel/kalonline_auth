<?php

namespace ContainerX6uJk3f;
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/symfony-extension/src/Mink/MinkParameters.php';

class MinkParametersProxy6635e3f extends \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'minkParameters' => [parent::class, 'minkParameters', null],
        'minkParameters' => [parent::class, 'minkParameters', null],
    ];

    #[\ReturnTypeWillChange] public function offsetExists($offset): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetExists(...\func_get_args());
        }

        return parent::offsetExists(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function offsetSet($offset, $value): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetSet(...\func_get_args());
        } else {
            parent::offsetSet(...\func_get_args());
        }
    }

    #[\ReturnTypeWillChange] public function offsetUnset($offset): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetUnset(...\func_get_args());
        } else {
            parent::offsetUnset(...\func_get_args());
        }
    }

    #[\ReturnTypeWillChange] public function count(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->count(...\func_get_args());
        }

        return parent::count(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('MinkParametersProxy6635e3f', false)) {
    \class_alias(__NAMESPACE__.'\\MinkParametersProxy6635e3f', 'MinkParametersProxy6635e3f', false);
}
