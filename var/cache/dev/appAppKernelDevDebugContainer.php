<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9BZoWDg\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9BZoWDg/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9BZoWDg.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\Container9BZoWDg\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \Container9BZoWDg\appAppKernelDevDebugContainer([
    'container.build_hash' => '9BZoWDg',
    'container.build_id' => 'bae2880d',
    'container.build_time' => 1709736021,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9BZoWDg');