<?php 

// delete category

$ch = curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL=>"http://127.0.0.1:8000/api/categories/9",
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_CUSTOMREQUEST=>"DELETE",
]);

$respons = json_decode(curl_exec($ch));
$status = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);
echo $status;
echo "\n";
print_r($respons);