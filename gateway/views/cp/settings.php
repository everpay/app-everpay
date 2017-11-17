<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>


	<link rel="stylesheet" href="//elektropay.com/assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="//elektropay.com/assets/css/chosen.css" />
	<link rel="stylesheet" href="//elektropay.com/assets/css/datepicker.css" />
	<link rel="stylesheet" href="//elektropay.com/assets/css/bootstrap-timepicker.css" />
	<link rel="stylesheet" href="//elektropay.com/assets/css/daterangepicker.css" />
	<link rel="stylesheet" href="//elektropay.com/assets/css/bootstrap-datetimepicker.css" />

 <header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"><strong class="text-primary"> <?=$form_title;?></strong></h1>
</div>
</div>
             </div>
             </header>


<div class="row">

<div class="col-lg-7 col-md-7 col-sm-12">
<form class="form well" id="form_account" method="post" action="<?=site_url($form_action);?>">
<fieldset>
	<legend>System Information</legend>
	<ul class="form">
		<li>
			<label for="username">Username</label><?=$form['username'];?>
		</li>
		<li>
			<label for="email">Email Address</label>
			<input type="text" autocomplete="off" class="text required email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
		</li>
		<li>
			<label for="password">Password</label>
			<input type="password" autocomplete="off" class="text" id="password" name="password" value="" />
		</li>
		<li>
			<label for="password2">Repeat Password</label>
			<input type="password" autocomplete="off" class="text" id="password2" name="password2" value="" />
		</li>
		<li>
			<div class="help">Leave password fields blank to keep your current password.</div>
		</li>
	</ul>
</fieldset>
<fieldset>
	<legend>Personal Information</legend>
	<ul class="form">
		<li>
			<label for="first_name">Name</label>
			<input class="text required mark_empty" class="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
		</li>
		<li>
			<label for="company">Company</label>
			<input type="text" class="text required" id="company" name="company" value="<?=$form['company'];?>" />
		</li>
		<li>
			<label for="address_1">Street Address</label>
			<input type="text" class="text required" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
		</li>
		<li>
			<label for="address_2">Address Line 2</label>
			<input type="text" class="text" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
		</li>
		<li>
			<label for="city">City</label>
			<input type="text" class="text required" name="city" id="city" value="<?=$form['city'];?>" />
		</li>
		<li>
			<label for="Country">Country</label>
			<select id="country" name="country" class="required"><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
		</li>
		<li>
			<label for="state">Region</label>
			<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
		</li>
		<li>
			<label for="postal_code">Postal Code</label>
			<input type="text" class="text required" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
		</li>
		<li>
			<label for="phone">Phone</label>
			<input type="text" class="text" id="phone" name="phone" value="<?=$form['phone'];?>" />
		</li>
		<li>
			<label for="timezone">Timezone</label>
			<?=timezone_menu($form['gmt_offset']);?>
		</li>
	</ul>
</fieldset>
<div class="submit col-lg-10 col-offset-2" style="text-align: center; margin-top:20px;">
	<input type="submit" class="btn btn-primary btn-lg btn-block" name="go_account" value="<?=ucfirst($form_title);?>" />
</div>
</form>

             </div>

<div class="col-lg-5 col-md-5 col-sm-12">
</div>

</div>

<script src="//elektropay.com/assets/js/jquery-ui.custom.min.js"></script>
<script src="//elektropay.com/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="//elektropay.com/assets/js/chosen.jquery.min.js"></script>
<script src="//elektropay.com/assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="//elektropay.com/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="//elektropay.com/assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="//elektropay.com/assets/js/date-time/moment.min.js"></script>
<script src="//elektropay.com/assets/js/date-time/daterangepicker.min.js"></script>
<script src="//elektropay.com/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>
<script src="//elektropay.com/assets/js/bootstrap-colorpicker.min.js"></script>
<script src="//elektropay.com/assets/js/jquery.knob.min.js"></script>
<script src="//elektropay.com/assets/js/jquery.autosize.min.js"></script>
<script src="//elektropay.com/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="//elektropay.com/assets/js/jquery.maskedinput.min.js"></script>
<script src="//elektropay.com/assets/js/bootstrap-tag.min.js"></script>
<script src="//elektropay.com/assets/js/typeahead.jquery.min.js"></script>

<!-- ace scripts -->
<script src="//elektropay.com/assets/js/ace-elements.min.js"></script>
<script src="//elektropay.com/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
jQuery(function($) {
	$('#id-disable-check').on('click', function() {
		var inp = $('#form-input-readonly').get(0);
		if(inp.hasAttribute('disabled')) {
			inp.setAttribute('readonly' , 'true');
			inp.removeAttribute('disabled');
			inp.value="This text field is readonly!";
		}
		else {
			inp.setAttribute('disabled' , 'disabled');
			inp.removeAttribute('readonly');
			inp.value="This text field is disabled!";
		}
	});


	$('.chosen-select').chosen({allow_single_deselect:true});
	//resize the chosen on window resize

	$(window)
			.off('resize.chosen')
			.on('resize.chosen', function() {
				$('.chosen-select').each(function() {
					var $this = $(this);
					$this.next().css({'width': $this.parent().width()});
				})
			}).trigger('resize.chosen');


	$('#chosen-multiple-style').on('click', function(e){
		var target = $(e.target).find('input[type=radio]');
		var which = parseInt(target.val());
		if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
		else $('#form-field-select-4').removeClass('tag-input-style');
	});


	$('[data-rel=tooltip]').tooltip({container:'body'});
	$('[data-rel=popover]').popover({container:'body'});

	$('textarea[class*=autosize]').autosize({append: "\n"});
	$('textarea.limited').inputlimiter({
		remText: '%n character%s remaining...',
		limitText: 'max allowed : %n.'
	});

	$.mask.definitions['~']='[+-]';
	$('.input-mask-date').mask('99/99/9999');
	$('.input-mask-phone').mask('(999) 999-9999');
	$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
	$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



	$( "#input-size-slider" ).css('width','200px').slider({
		value:1,
		range: "min",
		min: 1,
		max: 8,
		step: 1,
		slide: function( event, ui ) {
			var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
			var val = parseInt(ui.value);
			$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
		}
	});

	$( "#input-span-slider" ).slider({
		value:1,
		range: "min",
		min: 1,
		max: 12,
		step: 1,
		slide: function( event, ui ) {
			var val = parseInt(ui.value);
			$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
		}
	});



	//"jQuery UI Slider"
	//range slider tooltip example
	$( "#slider-range" ).css('height','200px').slider({
		orientation: "vertical",
		range: true,
		min: 0,
		max: 100,
		values: [ 17, 67 ],
		slide: function( event, ui ) {
			var val = ui.values[$(ui.handle).index()-1] + "";

			if( !ui.handle.firstChild ) {
				$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
						.prependTo(ui.handle);
			}
			$(ui.handle.firstChild).show().children().eq(1).text(val);
		}
	}).find('a').on('blur', function(){
		$(this.firstChild).hide();
	});


	$( "#slider-range-max" ).slider({
		range: "max",
		min: 1,
		max: 10,
		value: 2
	});

	$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
		// read initial values from markup and remove that
		var value = parseInt( $( this ).text(), 10 );
		$( this ).empty().slider({
			value: value,
			range: "min",
			animate: true

		});
	});

	$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'No File ...',
		btn_choose:'Choose',
		btn_change:'Change',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
	//pre-show a file name, for example a previously selected file
	//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


	$('#id-input-file-3').ace_file_input({
		style:'well',
		btn_choose:'Drop files here or click to choose',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'small'//large | fit
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
		/**,before_remove : function() {
						return true;
					}*/
		,
		preview_error : function(filename, error_code) {
			//name of the file that failed
			//error_code values
			//1 = 'FILE_LOAD_FAILED',
			//2 = 'IMAGE_LOAD_FAILED',
			//3 = 'THUMBNAIL_FAILED'
			//alert(error_code);
		}

	}).on('change', function(){
		//console.log($(this).data('ace_input_files'));
		//console.log($(this).data('ace_input_method'));
	});


	//dynamically change allowed formats by changing allowExt && allowMime function
	$('#id-file-format').removeAttr('checked').on('change', function() {
		var whitelist_ext, whitelist_mime;
		var btn_choose
		var no_icon
		if(this.checked) {
			btn_choose = "Drop images here or click to choose";
			no_icon = "ace-icon fa fa-picture-o";

			whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
			whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
		}
		else {
			btn_choose = "Drop files here or click to choose";
			no_icon = "ace-icon fa fa-cloud-upload";

			whitelist_ext = null;//all extensions are acceptable
			whitelist_mime = null;//all mimes are acceptable
		}
		var file_input = $('#id-input-file-3');
		file_input
				.ace_file_input('update_settings',
				{
					'btn_choose': btn_choose,
					'no_icon': no_icon,
					'allowExt': whitelist_ext,
					'allowMime': whitelist_mime
				})
		file_input.ace_file_input('reset_input');

		file_input
				.off('file.error.ace')
				.on('file.error.ace', function(e, info) {
					//console.log(info.file_count);//number of selected files
					//console.log(info.invalid_count);//number of invalid files
					//console.log(info.error_list);//a list of errors in the following format

					//info.error_count['ext']
					//info.error_count['mime']
					//info.error_count['size']

					//info.error_list['ext']  = [list of file names with invalid extension]
					//info.error_list['mime'] = [list of file names with invalid mimetype]
					//info.error_list['size'] = [list of file names with invalid size]


					/**
					 if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
					 */


					//if files have been selected (not dropped), you can choose to reset input
					//because browser keeps all selected files anyway and this cannot be changed
					//we can only reset file field to become empty again
					//on any case you still should check files with your server side script
					//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
				});

	});

	$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
			.on('change', function(){
				//alert(this.value)
			});
	$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up', icon_down:'ace-icon fa fa-caret-down'});
	$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
	//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
	//or
	//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
	//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


	//datepicker plugin
	//link
	$('.date-picker').datepicker({
		autoclose: true,
		todayHighlight: true
	})
		//show datepicker when clicking on the icon
			.next().on(ace.click_event, function(){
				$(this).prev().focus();
			});

	//or change it into a date range picker
	$('.input-daterange').datepicker({autoclose:true});


	//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
	$('input[name=date-range-picker]').daterangepicker({
		'applyClass' : 'btn-sm btn-success',
		'cancelClass' : 'btn-sm btn-default',
		locale: {
			applyLabel: 'Apply',
			cancelLabel: 'Cancel',
		}
	})
			.prev().on(ace.click_event, function(){
				$(this).next().focus();
			});


	$('#timepicker1').timepicker({
		minuteStep: 1,
		showSeconds: true,
		showMeridian: false
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});

	$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
		$(this).prev().focus();
	});


	$('#colorpicker1').colorpicker();

	$('#simple-colorpicker-1').ace_colorpicker();
	//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
	//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
	//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
	//picker.pick('red', true);//insert the color if it doesn't exist


	$(".knob").knob();


	var tag_input = $('#form-field-tags');
	try{
		tag_input.tag(
				{
					placeholder:tag_input.attr('placeholder'),
					//enable typeahead by specifying the source array
					source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
					/**
					 //or fetch data from database, fetch those that match "query"
					 source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
					 */
				}
		)

		//programmatically add a new
		var $tag_obj = $('#form-field-tags').data('tag');
		$tag_obj.add('Programmatically Added');
	}
	catch(e) {
		//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
		tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
		//$('#form-field-tags').autosize({append: "\n"});
	}


	//////////

	//typeahead.js
	//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
	var substringMatcher = function(strs) {
		return function findMatches(q, cb) {
			var matches, substringRegex;

			// an array that will be populated with substring matches
			matches = [];

			// regex used to determine if a string contains the substring `q`
			substrRegex = new RegExp(q, 'i');

			// iterate through the pool of strings and for any string that
			// contains the substring `q`, add it to the `matches` array
			$.each(strs, function(i, str) {
				if (substrRegex.test(str)) {
					// the typeahead jQuery plugin expects suggestions to a
					// JavaScript object, refer to typeahead docs for more info
					matches.push({ value: str });
				}
			});

			cb(matches);
		}
	}

	$('input.typeahead').typeahead({
		hint: true,
		highlight: true,
		minLength: 1
	}, {
		name: 'states',
		displayKey: 'value',
		source: substringMatcher(ace.vars['US_STATES'])
	});



	/////////
	$('#modal-form input[type=file]').ace_file_input({
		style:'well',
		btn_choose:'Drop files here or click to choose',
		btn_change:null,
		no_icon:'ace-icon fa fa-cloud-upload',
		droppable:true,
		thumbnail:'large'
	})

	//chosen plugin inside a modal will have a zero width because the select element is originally hidden
	//and its width cannot be determined.
	//so we set the width after modal is show
	$('#modal-form').on('shown.bs.modal', function () {
		$(this).find('.chosen-container').each(function(){
			$(this).find('a:first-child').css('width' , '210px');
			$(this).find('.chosen-drop').css('width' , '210px');
			$(this).find('.chosen-search input').css('width' , '200px');
		});
	})
	/**
	 //or you can activate the chosen plugin after modal is shown
	 //this way select element becomes visible with dimensions and chosen works as expected
	 $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
	 */

});
</script>

<?=$this->load->view(branded_view('cp/footer'));?>