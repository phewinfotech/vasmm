<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.2.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Alumni Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'naveen.mcts2008@gmail.com',
		'to' => 'naveen.mcts2008@gmail.com'
	),
	'fields' => array(
		'custom_U478449' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Father\'s Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Father\'s Name\' is required.',
				'format' => 'Field \'Father\'s Name\' has an invalid email.'
			)
		),
		'custom_U478432' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Mother\'s Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Mother\'s Name\' is required.'
			)
		),
		'custom_U478428' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Work Address',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Work Address\' is required.'
			)
		),
		'custom_U478418' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Email ID',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email ID\' is required.'
			)
		),
		'custom_U478422' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Contact No',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Contact No\' is required.'
			)
		),
		'custom_U478453' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Course & Batch',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Course & Batch\' is required.'
			)
		),
		'custom_U478436' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Company or Business Details',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company or Business Details\' is required.'
			)
		),
		'custom_U478441' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Whether Enrolled in any course Presently (for post graduation etc)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Whether Enrolled in any course Presently (for post graduation etc)\' is required.'
			)
		)
	)
);

process_form($form);
?>
