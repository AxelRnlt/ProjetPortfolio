<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYCSgqla\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYCSgqla/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYCSgqla.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYCSgqla\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYCSgqla\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YCSgqla',
    'container.build_id' => '0432fa73',
    'container.build_time' => 1582281847,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYCSgqla');
