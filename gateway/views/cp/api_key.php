<?=$this->load->view(branded_view('cp/header'));?>


 <header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"> API <strong class="text-primary"> Access</strong></h1>
</div>
</div>
             </div>
             </header>

<div class="row-fluid">

<div class="widget-main">
<div class="alert alert-warning fade in margin-top-40" role="alert">
  <button type="button" class="close" data-dismiss="alert"> <i class="fa fa-times fa-lg"></i></button>
  <ul>
  <li><strong>Here are some things you can do to get started:</strong></li>
    <li>Try sending a payment using the javascript or curl command below</li>
    <li>Build the next generation payment app!</li>
  </ul>
  <p>Take a look at our <a href="//everpayinc.com/docs/merchant/"><b>docs</b></a> and some demos of Everpay in the wild</a> for inspiration!</p>
</div>
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6">

<div class="creds">
  <p>
    These credentials give you access to the Elektrolite API. For more information check the documentation on<a href="//everpayinc.com/docs/merchant/"/> how to use these</a>.
  </p>

    <h2>Access Tokens</h2>
<p></p>
<hr>
<h4>Your Current Access Information</h4>
     <pre>
<code class="javascript">
<span class="key_name"><b style="color:#444; font-weight: 800;">api_id:</b> </span><span class="key_value"><?=$api_id;?></span>
<p>
<span class="key_name"><b style="color:#444;font-weight: 800;">secret_key:</b> </span><span class="key_value"><?=$secret_key;?></span>
</code>
</pre>

<p></p>
<hr>
 <h4>Keep Your API ID and Secret Key Private</h4>  

<p>Store it safely and do not share it with anyone who does not need to know it.
If you believe it has been compromised, generate a new access key below.</p>

       <!-- <p>Alternatively, if your server library supports it, configure via a URL:</p>
      <pre><code class="no-highlight">http://<span class="key_value"><?=$api_id;?></span>:<span class="key_value"><?=$secret_key;?></span>@everpayinc.com/api/<?=$user_id;?></code></pre> -->

    <p>
    <a id="generate_new_api" class="col-md-6 btn btn-primary btn-flat btn-lg btn-block pull-right" data-method="post" rel="nofollow" href="<?=site_url('settings/regenerate_api');?>">Create New Token</a>
    </p>
</div>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 hidden-phone">
</div>


</div><!-- END WIDGET MAIN -->
</div><!-- END ROW -->
</div><!-- END ROW-FLUID -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>