<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$keyId = $_GET['keyid'];
$key = $_GET['key'];
$jsonData = array(
'keys' => array(
array(
'kty' => 'oct',
'k' => base64_encode(hex2bin($key)),
'kid' => base64_encode(hex2bin($keyId))
)
)
);
echo json_encode($jsonData);
