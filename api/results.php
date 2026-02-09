<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$keyid = $_GET['keyid'] ?? '';
$key = $_GET['key'] ?? '';

$response = [
'keys' => [[
'kty' => 'oct',
'kid' => base64_encode(hex2bin($keyid)),
'k' => base64_encode(hex2bin($key))
]]
];

echo json_encode($response);
