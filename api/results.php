<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$keyId = $_GET['keyid'] ?? '';
$key = $_GET['key'] ?? '';

if (empty($keyId) || empty($key)) {
echo json_encode(['error' => 'Missing parameters']);
exit;
}

$response = [
'keys' => [
[
'kty' => 'oct',
'kid' => base64_encode(hex2bin($keyId)),
'k' => base64_encode(hex2bin($key))
]
]
];

echo json_encode($response);
