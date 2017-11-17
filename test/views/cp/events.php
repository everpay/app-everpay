<?=$this->load->view(branded_view('cp/header'));?>

<div id="latest-activity">

<div class="col-md-12">
<div class="row-fluid clearfix">

	<h3>
		
		<small></small>
	</h3>
	<div class="moment">
		<div class="row event clearfix">
		
				<? if (!empty($log)) { ?>
            <div class="col-sm-1">
				<div class="icon">
					<i class="fa fa-comment"></i>
				</div>
			</div>
			<div class="col-sm-11 message"> <div class="">
			 <? foreach ($log as $line) { ?>	
<div class="item-details" style="padding:5px;"> <?=$line;?></div>
                                 <? } ?>

<? } else { ?>
<div class="alert alert-info" role="alert"><p class="lead text-center">You have <strong>no</strong> events or webhooks to display.</p> </div>

<? } ?>
</div><!-- END content -->
			
	</div><!-- END /.col-sm-11 message -->

</div><!-- END /.row event clearfix-->
</div><!-- END /.moment -->

</div><!-- END /.col-md-12 -->
</div><!-- END ROW -->

</div><!-- END /.col-md-12 -->

</div><!-- END #latest activity -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script type="text/javascript">
   jQuery(document).ready(function() {
     $("time.timeago").timeago();
   });
</script>
<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>