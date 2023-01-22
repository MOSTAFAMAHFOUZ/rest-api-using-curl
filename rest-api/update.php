<?php 

// delete category

$ch = curl_init();
$payload = [
    "name"=>"update category",
    "_method"=>"PUT"
];
curl_setopt_array($ch,[
    CURLOPT_URL=>"http://127.0.0.1:8000/api/categories/15",
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_CUSTOMREQUEST=>"POST",
    CURLOPT_POSTFIELDS=>$payload,
]);

$respons = json_decode(curl_exec($ch),true);
$content_type = curl_getinfo($ch,CURLINFO_CONTENT_TYPE);
$status = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);
echo "\n";
echo $content_type . "\n";
echo $status . "\n";
echo "\n";
print_r($respons);