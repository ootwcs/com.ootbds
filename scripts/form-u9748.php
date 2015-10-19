<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('recaptchalib.php');
require_once('form_process.php');

$form = array(
	'subject' => 'OoTBDS Upgrade Form Submission',
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
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'admin@ootwcs.com',
		'to' => 'admin@ootwcs.com'
	),
	'recaptcha' => array(
		'private_key' => '6LfkkgITAAAAAOAkk34BXXh1D2EyqqgLK9Jg7VH6'
	),
	'fields' => array(
		'custom_U9751' => array(
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
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'recaptcha_response_field' => array(
			'order' => 3,
			'type' => 'recaptcha',
			'label' => 'Image Verification',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Image Verification\' is required.',
				'format' => 'Incorrect reCAPTCHA value.'
			)
		)
	)
);

process_form($form);
?>
