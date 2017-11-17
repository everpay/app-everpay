<?=$this->load->view(branded_view('cp/header'));?>
<style>
.form-control {
    margin-bottom: 5px;
    margin-top: 5px;
    border: 0px solid #CCC;
    color: #000;
    font-weight: 400;
    width: 99%;
    padding: 15px 15px 15px 60px;
    border-radius: 4px;
    height: 40px;
    font-size: 16px;
	background-color: #fff;
}

</style>


<div class="row">

<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
<br/>
 <p class="lead">Your API Id and Secret Key are your access credentials.</p>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
				
<p class="api_definition"></p>
        <form action="#" class="form" method="/">
                    <div class="form-group float-label-control">
                        <label for="" class="col-sm-3 control-label">API Identifier</label>
						<span class="col-sm-2"><i class="fa fa-user fa-3x"></i></span>
                        <div class="col-sm-9">
                     <input type="text" name="api_id" id="api_id" class="form-control disabled" value="<?=$api_id;?>"/>
                        </div>
                    </div>
                    <div class="form-group float-label-control">
                        <label for="" class="col-sm-3 control-label">Secret Key *</label> 
						<span class="col-sm-2"><i class="fa fa-key fa-3x"></i></span> 
                        <div class="col-sm-10">
                        <input type="password" name="password" id="password" class="form-control js-example-disabled" value="<?=$secret_key;?>"/>
                        </div>
                    </div> 
          <pre id="formData"></pre>
        </form>
		<div class="col-md-9 col-md-offset-2">
		<a id="generate_new_api" class="text-center section__btn section__btn--round" href="<?=site_url('settings/regenerate_api');?>">Get A New Key</a></div>
</div>
</div>

<div id="api_keys" class=" hidden api_keys">

            <fieldset>
                	<h2>Current Access Information</h2>
				<label for="key_value">API Identifier</label>
                <input type="text" name="api_id" id="api_id" class="form-control" value="<?=$api_id;?>"/>
                <label for="password">Secret Key *</label>
                <input type="password" name="password" id="password" class="form-control" value="<?=$secret_key;?>"/>
                <button class="hidden btn btn-link"> Show</button>
				<br>
            </fieldset>
	
</div>

</div><!-- END/ .col-xs-6-->

<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
<br/>
<div class="alert alert-warning">
            <h4>Keep your API ID and Secret Key secret</h4>
            Store it safely and do not share it with anyone who does not need to know it.
If you believe it has been compromised, generate new access information below.
        </div>

</div><!-- END/ .col-xs-6-->

</div><!-- END/ .row-->


<script type="text/javascript" src="<?=branded_include('js/pass-peek.js');?>"></script>

<script type="text/javascript">
        
            jQuery(function(){
               
               jQuery(':password').passPeek({
                   strict: false,
                   labels: ['Show key', 'Hide key']
               });
               
               jQuery('form').on('submit', function(e){
                  
                    e.preventDefault();
                    
                    jQuery('#formData').html(jQuery(this).serialize());
                   
               });
        
            });
    
        </script>

<script type="text/javascript">
		f.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        $('.float-label-control').floatLabels();
    });
})(jQuery);
		
		</script>
		
<?=$this->load->view(branded_view('cp/footer'));?>