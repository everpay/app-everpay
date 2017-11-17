<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config->item('server_name');?> | Returning Users Login Here</title>
<link rel="shortcut icon" href="https://db.tt/xketQSS3" />

		                         <!-- GOOGLE FONTS -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                             <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="//cdn.everpayinc.com/assets/css/new-login-signup_v-0.2.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://cdn.everpayinc.com/assets/css/app.min-v1.523.css" type="text/css" rel="stylesheet" />


<style rel="stylesheet" type="text/css">

#notices div {
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 0px;
    padding: 15px 35px 15px 35px;
    font-size: 16px;
    text-align: center;
    display: inline;
    position: absolute;
    left: 23%;
    top: 0%;
    z-index: 5;
    vertical-align: middle;
    width: 50%;
    height: 58px;
    margin: auto 0px;
}

</style>

	<!-- BEGIN CORE PLUGINS -->	

	<script type="text/javascript" src="https://cdn.everpayinc.com/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=branded_include('js/universal.js');?>"></script>


</head>
<body class="login-page">

 <div id="notices"><?=get_notices();?></div>
<div class="panel-wrapper">

		<a href="//everpayinc.com" class="everpay-logo">Everpay</a>

		<div class="feature-panel feature-panel--enterprise">
			<div class="enterprise-panel__content">
				<h2 class="enterprise-panel__header">
					<small class="enterprise-panel__subheader">
						EverPay Enterprise Edition
					</small>
					Customized cloud powered commerce for you
				</h2>
				<p class="enterprise-panel__caption">
					Unlimited users. Unlimited gateways. Unlimited connectivity.
				</p>
				<a href="https://everpayinc.com/trial/enterprise?link=login-offer" target="_blank" class="enterprise-panel__button">
					Start your free trial
				</a>
			</div>
			<div class="enterprise-panel__footer">
				<p class="enterprise-panel__footer__lead">
					TRUSTED BY THE WORLD'S SMARTEST COMPANIES
				</p>
		<img src="https://cdn.everpayinc.com/assets/img/login-signup/enterprise-logos.png" class="hidden enterprise-panel__logos" />
			</div>
		</div>

		<div class="main-panel">

			<div class="main-panel__table">
				<div class="main-panel__table-cell">

					<div class="main-panel__switch">
						<span class="main-panel__switch__text">
							Don't have an account?
						</span>
						<a href="//id.everpayinc.com/signup" class="main-panel__switch__button">
							Get Started
						</a>
					</div>

					<div class="main-panel__content">

						<h1 class="main-panel__heading">
							Sign in to EverPay.
							<small class="main-panel__subheading">
								Enter your details below.
							</small>
						</h1>

						
                    <form class="main-panel__form Bizible-Exclude" id="login_form" action="<?=site_url('dashboard/do_login');?>" method="post">
				
		
                                              <div class="field">
							<div class="form__group">
						<label for="emailAddress" class="form__label">Email Address</label>
	<input id="username" type="text" name="username" class="form__input" placeholder="* Username" />
							</div>
                                               </div>

                                               <div class="field">
							<div class="form__group">
							<label for="password" class="form__label">Password</label>
                         <input type="password" name="password" id="password" class="form__input" placeholder="* Password"/>
                               <a href="//id.everpayinc.com/forgot_password" class="form__help">Forgot password?</a>
							</div>
                                               </div>

							<div class="text--center">
                                     <input type="submit" class="form__button" name="login_button" value="Login" />
							</div>
						</form>


					</div>

				</div>
			</div>

		</div>
	</div>






</body>
</html>