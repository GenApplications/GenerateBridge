<?php
include 'config.php';

    $api = isset($_GET['api']) ? $_GET['api'] : '';

    if ($api === 'xml') {
        // Include code for your "xml-api" functionality
        include 'apis/xml-api.php';
    } elseif ($api === 'json') {
        // Include code for your "json-api" functionality
        include 'apis/json-api.php';
    } elseif ($api === '') {
        // Handle the case when the API parameter is blank
        // Include code for your default functionality or display an error message
        echo 'API Parameter is blank';
    } else {
        // Invalid API or API not implemented
        http_response_code(404); // Set HTTP status code to 404 Not Found
        echo 'API Not Found';
    }
?>
