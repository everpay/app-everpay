<?=$this->load->view(branded_view('cp/header'));?>



<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Cron <strong class="text-primary"> Jobs</strong></h1>


</div>
</div>
             </div>
             </header>



 <div class="clearfix" style="height:40px;"></div>

<div class="container-960 center">

<div class="widget-main">
<div class="portlet">					
<!-- BEGIN PORTLET-->
<div class="portlet-body">

	 <!-- Start SignUp Block
	================================================== -->
	 <section id="" class="section">

<?php if (!isset($dates)) : ?>
<p class="warning"><span>Your cronjobs appear to have never been run! This is not good - we need these scripts to run at least once per day.  You must configure the cronjobs below to run at least once per day, or ask your system administrator to do the same.</span></p>
<?php endif; ?>

<p><b>Notifications Cronjob Last Run:</b> <?php echo $dates->cron_last_run_notifications ? date('D M j, Y g:i A', strtotime($dates->cron_last_run_notifications)) : 'Never' ?></p>
<p><b>Subscriptions Cronjob Last Run:</b> <?php echo $dates->cron_last_run_subs ? date('D M j, Y g:i A', strtotime($dates->cron_last_run_subs)) : 'Never' ?></p>

<p><b>Cronjob Commands for *nix Servers:</b></p>

<p>The following cronjobs should be setup in your web hosting control panel. If you are unsure how of how to do this, please contact your web host
or your server administrator.</p>

<pre class="code">
*/5 * * * * wget -q -O /dev/null <?=rtrim($cp_link, '/');?>/cron/sendnotifications/<?=$cron_key;?> >/dev/null 2>&1
5 5 * * * wget -q -O /dev/null <?=rtrim($cp_link, '/');?>/cron/subscriptionmaintenance/<?=$cron_key;?> >/dev/null 2>&1
</pre>

</section>

</div>
             </div>
             </div>

 </div>
<?=$this->load->view(branded_view('cp/footer'));?>