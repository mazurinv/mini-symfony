<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZiCzM7a\App_AppDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZiCzM7a/App_AppDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZiCzM7a.legacy');

    return;
}

if (!\class_exists(App_AppDevDebugContainer::class, false)) {
    \class_alias(\ContainerZiCzM7a\App_AppDevDebugContainer::class, App_AppDevDebugContainer::class, false);
}

return new \ContainerZiCzM7a\App_AppDevDebugContainer([
    'container.build_hash' => 'ZiCzM7a',
    'container.build_id' => 'f809e9c9',
    'container.build_time' => 1614151538,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZiCzM7a');
