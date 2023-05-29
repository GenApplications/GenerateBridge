<?php
// WHM API SERVER EMULATOR 
include 'config.php';
include 'servers/' . $reseller_server . '.php';
include 'servers/bridge.php';

// Set the content type to XML
header('Content-Type: application/xml');

// Get the value of 'function' from the GET parameters
$fake_endpoint = isset($_GET['function']) ? $_GET['function'] : '';

// Sanitize the input
$fake_endpoint = strip_tags($fake_endpoint); // Remove any HTML or PHP tags
$fake_endpoint = htmlspecialchars($fake_endpoint, ENT_QUOTES, 'UTF-8'); // Convert special characters to their HTML entities

// Remove the file extension from the variable
$endpoint = pathinfo($fake_endpoint, PATHINFO_FILENAME);
	// Define the arguments dynamically
$arguments = ['arg1', 'arg2', 'arg3'];
if ($endpoint === "createacct" && function_exists($endpoint)) {

	// call_user_func_array($endpoint, $arguments);
    echo '<createacct>';
    echo '   <result>';
    echo '      <options>';
    echo '         <ip>192.168.0.1</ip>';
    echo '         <nameserver>ns1.example-host.com</nameserver>';
    echo '         <nameserver2>ns2.example-host.com</nameserver2>';
    echo '         <nameserver3/>';
    echo '         <nameserver4/>';
    echo '         <nameservera/>';
    echo '         <nameservera2/>';
    echo '         <nameservera3/>';
    echo '         <nameservera4/>';
    echo '         <nameserverentry/>';
    echo '         <nameserverentry2/>';
    echo '         <nameserverentry3/>';
    echo '         <nameserverentry4/>';
    echo '         <package>package_name</package>';
    echo '      </options>';
    echo '      <rawout></rawout>';
    echo '      <status>1</status>';
    echo '      <statusmsg>Account Creation Ok</statusmsg>';
    echo '   </result>';
    echo '</createacct>';
} elseif ($endpoint === "removeacct" && function_exists($endpoint)) {
    echo '<removeacct>';
    echo '   <result>';
    echo '      <status>1</status>';
    echo '      <statusmsg>Account Removal Ok</statusmsg>';
    echo '   </result>';
    echo '</removeacct>';
} elseif ($endpoint === "detect_cpanel_bridge" && function_exists($endpoint)) {
echo "<detect_cpanel_bridge>";
echo "<result>";
echo "<detected> true </detected>";
echo "</result>";
echo "</detect_cpanel_bridge>";
} elseif (!function_exists($endpoint)) {
    // Invalid endpoint or endpoint not implemented
    http_response_code(501); // Set HTTP status code to 501 Not Implemented
    echo '<error>';
    echo '   <message>Endpoint Not Implemented</message>';
    echo '</error>';
} else {
    // Invalid endpoint or endpoint not implemented
    http_response_code(501); // Set HTTP status code to 501 Not Implemented
    echo '<error>';
    echo '   <message>Endpoint Not Implemented</message>';
    echo '</error>';
}
?>
