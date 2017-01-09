<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.1.363
*/

require_once('recaptchalib.php');
require_once('form_process.php');

$form = array(
	'subject' => 'Refer a Friend Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'refer-a-friend-thank-you.html',
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
		'from' => 'admin@ootbds.com',
		'to' => 'admin@ootbds.com'
	),
	'recaptcha' => array(
		'private_key' => '6Lc_jRITAAAAAPLCx1Ct3Uovs1M-_9xCCsS--B_J'
	),
	'fields' => array(
		'custom_U12726' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Your User Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Your User Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 8,
			'type' => 'email',
			'label' => 'Your Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Your Email\' is required.',
				'format' => 'Field \'Your Email\' has an invalid email.'
			)
		),
		'custom_U12739' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Friend 1',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Friend 1\' is required.'
			)
		),
		'custom_U12743' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Friend 2',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Friend 2\' is required.'
			)
		),
		'custom_U12747' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Friend 3',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Friend 3\' is required.'
			)
		),
		'custom_U12751' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Friend 4',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Friend 4\' is required.'
			)
		),
		'custom_U12755' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'Friend :5',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Friend :5\' is required.'
			)
		),
		'custom_U12762' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U12766' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U12770' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U12774' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U12778' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U12782' => array(
			'order' => 14,
			'type' => 'checkbox',
			'label' => 'Agree to our Privacy, Terms of Service',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Agree to our Privacy, Terms of Service\' is required.'
			)
		),
		'recaptcha_response_field' => array(
			'order' => 11,
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
