<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEEYCK2C\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEEYCK2C/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEEYCK2C.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEEYCK2C\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEEYCK2C\App_KernelDevDebugContainer([
    'container.build_hash' => 'EEYCK2C',
    'container.build_id' => 'e8973735',
    'container.build_time' => 1671459324,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEEYCK2C');
