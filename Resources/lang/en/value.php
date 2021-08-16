<?php 

return [

	# General
	'dashboard' => 'Dashboard', 
	'enabled' => 'Enabled', 
	'disabled' => 'Disabled', 
	'preview' => 'Preview', 
	'view' => 'View', 
	'create' => 'Create', 
	'export' => 'Export', 
	'import' => 'Import', 
	'download' => 'Download', 
	'delete' => 'Delete', 
	'cancel' => 'Cancel', 
	'responses' => 'Responses', 
	'editor' => 'Editor', 
	'integrations' => 'Integrations', 
	'privacy' => 'Privacy', 
	'data_manager' => 'Data Manager', 
	'customizer' => 'Customizer', 
	'live_customizer' => 'Live Customizer', 
	'count_responses' => ':count responses', 

	# Home
	'all_feedback' => 'All Feedback', 
	'my_feedback' => 'My Feedback', 
	'new_feedback' => 'New Feedback', 
	'new_feedback_desc' => 'This is only used internally when you need to identify the feedback.', 
	'delete_feedback' => 'Delete Feedback', 

	# Customizer
	'send_feedback' => 'Send feedback', 
	'tell_us' => 'Tell us what you think...', 
	'enter_title' => 'Enter a title here', 
	'enter_subtitle' => 'Enter a subtitle here', 
	'enter_message' => 'Enter a message here', 
	
	'form' => 'Form', 
	'confirmation' => 'Confirmation', 
	'rate_exp' => 'Rate your experience', 
	'feedback_name' => 'Feedback Name', 
	'feedback_name_desc' => 'Only used for when you need to identify this feedback.', 
	'accent_color' => 'Accent color', 
	'position' => 'Position', 
	'left' => 'Left', 
	'right' => 'Right', 
	'widget_type' => 'Widget Type', 
	'floating' => 'Floating', 
	'sidebar' => 'Sidebar', 
	'floating' => 'Floating', 
	'fullscreen' => 'Fullscreen',
	'enable_rating' => 'Enable ratings',
	'enable_rating_desc' => 'Give users the ability to provide a rating, along with additional feedback.',
	'enable_email' => 'Email field required',
	'enable_email_desc' => 'Require users to provide an email address before submitting feedback.',
	'widget_button' => "Button text",
	'whats_this' => "(What's this?)",

	# Header
	'help' => 'Need help?', 
	'profile' => 'Profile', 
	'logout' => 'Logout', 

	# Footer
	'documentation' => 'Documentation', 
	'support' => 'Support', 
	'copyright' => '&copy; :year :title. Some Rights Reserved.', 

	# Profile
	'your_profile' => 'Your Profile', 
	'account_settings' => 'Account Settings', 
	'change_password' => 'Change Password', 
	'name' => 'Name', 
	'email' => 'Email Address', 
	'email_desc' => 'Once you make account changes, you will be required to log back in.', 
	'new_password' => 'New Password', 
	'new_password_desc' => 'Once you submit, you will need to re-login with your new password.', 
	'save_changes' => 'Save changes', 

	# Editor
	'launch_editor' => 'Launch Editor', 
	'feedback_editor' => 'Feedback Editor', 
	'editor_line_1' => '<p><b>:name</b> makes it quick and easy to build and modify your feedbacks, <br/>using the live feedback customizer.</p>', 

	# Privacy
	'privacy_line_1' => "<p>:name gives you the ability to disable the collection of user-indentifiable data for each feedback. This feature allows all collected feedback to remain anonymous and non-trackable.</p>
		<strong>When enabled...</strong>
		<ul>
			<li>Email collection is turned off</li>
			<li>IP addresses are not tracked</li>
		</ul>
		<strong>Important:</strong> Any feedback that was collected when privacy mode was enabled will still remain anonymous, even if turned off.",

	# Data Manager
	'import_disabled' => 'Importing data is disabled.', 
	'data_line_1' => 'In order for you to back up and manage your data, :name provides the ability to export your feedback responses as a <strong>.CSV</strong> file. <br/>You also have the ability to import data from a previous export.', 
	'data_line_2' => '<strong>Notice:</strong> There are currently <b>:count rows</b> of feedback data.', 

	# Delete
	'delete_line_1' => 'Are you sure you want to delete this feedback? All data, including feedback responses, will be permanently deleted.', 
	'delete_line_2' => "If you'd like, you can export your responses as a <strong>.CSV</strong> file before you delete this feedback.", 

	# Responses
	'response_empty' => 'No responses, yet.', 
	'response_setup' => "Click <a href=':route'>here</a> to set up integrations, if you haven't already.", 
	'rating' => 'Rating', 
	'message' => 'Message', 
	'ip_address' => 'IP Address', 
	'created' => 'Created', 
	'actions' => 'Actions', 
	'not_provided' => '(Not provided)', 
	'unknown' => 'Unknown',
	'are_you_sure' => 'Are you sure?', 
	'delete_response_desc' => "You're about to delete a response from this feedback.<br><br><strong>This action cannot be undone.</strong>", 

	# Integration
	'widget_embed' => 'Widget Embed', 
	'standalone_page' => 'Standalone Page', 
	'copy_your_code' => 'Copy your code', 
	'copy_code' => 'Copy Code ', 
	'copy_url' => 'Copy URL', 
	'send_to_developer' => 'Send this to my developer', 
	'integration_line_1' => "<p>Copy the following code and paste it right before the <code>&lt;/body&gt;</code> tag on every page you'd like the widget to display.</p>", 
	'integration_line_2' => "<p>Instead of embedding :name on your website, you can supply your users with a standalone page where they can submit feedback.</p>", 

	'email_subject' => ':name Widget Installation', 
	'email_body' => 'Hi,

Can you please help me install the :name feedback widget on our site.
It will help us capture customer feedback on our website.
Add the following bit of Javascript right before the closing </head> of each page.

<!-- Start :name Widget -->
<script type="text/javascript" src=":route"></script>
<!-- End :name -->', 

	# Notification
	'deleted_feedback' => 'Your feedback was deleted successfully.', 
	'deleted_response' => 'Success, response was deleted successfully.', 
	'updated_profile' => 'Your profile was updated successfully.',

];