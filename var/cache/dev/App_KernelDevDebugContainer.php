<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLihMp8X\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLihMp8X/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLihMp8X.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLihMp8X\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLihMp8X\App_KernelDevDebugContainer([
    'container.build_hash' => 'LihMp8X',
    'container.build_id' => '83ea5330',
    'container.build_time' => 1644317592,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLihMp8X');
