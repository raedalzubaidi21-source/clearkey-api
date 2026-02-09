<?php
header('Content-Type: application/json');

$keyid = isset($_GET['keyid']) ? $_GET['keyid'] : 'ab081a704aad41829b1123b09b6ecafd';
$key = isset($_GET['key']) ? $_GET['key'] : 'dd51609092fff15e68b91debf5d591f9';

// تحويل HEX إلى Base64
function hex2base64($hex) {
    return base64_encode(pack('H*', $hex));
}

echo json_encode([
    "keys" => [
        [
            "kty" => "oct",
            "kid" => hex2base64($keyid),
            "k" => hex2base64($key)
        ]
    ]
]);
?>
