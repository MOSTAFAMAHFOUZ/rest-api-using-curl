<?php 

$ch = curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL=>"http://127.0.0.1:8000/api/categories",
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($ch);

$response = json_decode($response,true);

print_r($response);