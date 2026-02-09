<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$kid = "PUT_BASE64_KID";
$key = "PUT_BASE64_KEY";

echo json_encode([
 "keys"=>[
  [
   "kty"=>"oct",
   "kid"=>$kid,
   "k"=>$key
  ]
 ]
]);
