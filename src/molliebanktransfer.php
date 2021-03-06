<?php

require_once __DIR__ . '/mollie/mollie.php';

function molliebanktransfer_config() {
	$config = mollie_config();

	$config = array_merge($config, array(
		'FriendlyName' => array(
			'Type' => 'System',
			'Value'=> 'Mollie Bank Transfer'
		)
	));

	return $config;
}

function molliebanktransfer_link($params) {
	return mollie_link($params, Mollie_API_Object_Method::BANKTRANSFER);
}
