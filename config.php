<?php
$config = array(
    'reseller_server' => 'mofh',
    'reseller_api_hostname' => 'optional',
    'reseller_api_username' => 'optional',
    'reseller_api_password' => 'optional',
    'reseller_api_port' => 'optional',
    'reseller_api_key' => 'optional',
    'reseller_api_token' => 'optional',
    'reseller_api_secret' => 'optional',
    'reseller_api_endpoint' => 'optional',
    'ifttt_webhook_key' => 'optional',
    'whm_api_username' => 'optional',
    'whm_api_password' => 'optional'
);


// Backwards Compatiablity
$reseller_server = $config['reseller_server'];
$reseller_api_hostname = $config['reseller_api_hostname']; // change optional to API hostname
$reseller_api_username = $config['reseller_api_username']; // change username to API username
$reseller_api_password = $config['reseller_api_password']; // change password to API password
$reseller_api_port = $config['reseller_api_port']; // API port number, if applicable
$reseller_api_key = $config['reseller_api_key']; // API key, if required
$reseller_api_token = $config['reseller_api_token']; // API token, if required
$reseller_api_secret = $config['reseller_api_secret']; // API secret key, if required
$reseller_api_endpoint = $config['reseller_api_endpoint']; // API endpoint URL, if different from the default
?>