<?php
function createacct($user,$pass,$email,$domain,$plan){
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://panel.myownfreehost.net/xml-api/createacct.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "api_user=$api_username&api_key=$api_password&username=$user&password=$pass&contactemail=$email&domain=$domain&plan=$plan");
curl_setopt($ch, CURLOPT_USERPWD, 'username' . ':' . 'password');

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
};
?>