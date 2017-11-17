<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
<style type="text/css">


select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 44px;
font-size: 16px;
}

form label {
transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
position: relative!important;
color: #999;
padding: 7px 6px;
float: left;
padding-right: 40px;
margin-top: 5px;
margin-bottom: 5px;
}
.map_canvas {display:none;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}

</style>


<div class="row-fluid">


<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"> <strong class="text-primary"><?=$form_title;?></strong></h1>
</div>
</div>
             </div>
             </header>

<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">
<div class="row">


<div class="col-lg-8 col-md-8 col-sm-12">

<form class="form-horizontal well" id="form_customer" method="post" action="<?=site_url($form_action);?>">

<div class="widget-box">
			<div class="widget-header">
				
	<legend>System Information</legend>
			</div>

			<div class="widget-body">
				<div class="widget-main">
<fieldset>
	<ul class="form">
		<li>
			<label for="email">Email Address</label>
			<input type="text" autocomplete="off" class="text email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
		</li>
<hr>
		<li>
			<label for="internal_id">Internal Identifier</label>
			<input type="text" class="text" id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
		</li>

		<li>
			<div class="help">
This identifier can be a username or account ID for your internal systems.  It can be used via the API to
			synchronize customer data on our system with other software by providing a cross-system unique identifier.</div>
		</li>
<hr>
		<li>
			<label for="phone">Contact Number</label>
			<input type="text" class="text" id="phone" name="phone" value="<?=$form['phone'];?>" />
		</li>
<hr>
	</ul>
</fieldset>
 
	

<fieldset><legend>Personal Information</legend>
	<ul class="form">
		<li>
			<label for="first_name">Name</label>
			<input class="text required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
		</li>
<hr>
		<li>
			<label for="company">Company</label>
			<input type="text" class="text" id="company" name="company" value="<?=$form['company'];?>" />
		</li>
<hr>
		<li>
			<label for="address_1">Street Address</label>
			<input type="text" class="text" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
		</li>
<hr>
		<li>
			<label for="address_2">Address Line 2</label>
			<input type="text" class="text" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
		</li>
<hr>
		<li>
			<label for="city">City</label>
			<input type="text" class="text" name="city" id="city" value="<?=$form['city'];?>" />
		</li>
<hr>
		<li>
			<label for="Country">Country</label>
			<select id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
		</li>
<hr>
		<li>
			<label for="state">Region</label>
			<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
		</li>
<hr>
		<li>
			<label for="postal_code">Postal Code</label>
			<input type="text" class="text" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
		</li>
	</ul>
</fieldset>
<hr>
<div id="complete" class="submit margin-top-20 center">
	<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />

</div>
</form>


				</div>
			</div>
		</div>
</div><!--/col-lg-6-->

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="widget-box">
			
		</div>
</div><!--/col-lg-6-->

</div><!--/row -->



</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->


</div><!--/row -->
<?=$this->load->view(branded_view('cp/footer'));?>