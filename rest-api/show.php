<?php 

$ch = curl_init();
$headers = [
    "Authorization: Bearer 123456789"
];

$response_header = [];
$header_callback = function($ch,$header) use(&$response_header){
    $len = strlen($header);
    $response_header[] = $header;
    return $len;
};
curl_setopt_array($ch,[
    CURLOPT_URL=>"http://127.0.0.1:8000/api/categories/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER=>$headers,
    CURLOPT_HEADERFUNCTION => $header_callback
]);

$response = curl_exec($ch);
// $headers = curl_getinfo($ch,);

$response = json_decode($response,true);

print_r($response_header);
echo "\n";
print_r($response);