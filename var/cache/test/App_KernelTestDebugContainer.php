<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX6uJk3f\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX6uJk3f/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerX6uJk3f.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerX6uJk3f\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerX6uJk3f\App_KernelTestDebugContainer([
    'container.build_hash' => 'X6uJk3f',
    'container.build_id' => 'f41fc04d',
    'container.build_time' => 1723044515,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX6uJk3f');