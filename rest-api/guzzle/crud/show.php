<?php

require_once '../vendor/autoload.php';
use GuzzleHttp\Exception\ClientException;

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:8000/api/']);

try {
    $response = $client->get('categories/10',[
        "headers"=>[
            "Accept"=>"application/json",
            "Content-Type"=>"application/json",
            "Authorization"=>"Bearer 123456789"
        ]
    ]);

    echo $response->getBody();
    echo "\n";
    echo $response->getStatusCode();
    // echo "\n";
    // print_r($response->getHeaders());
}catch(ClientException $e){
    echo $e->getMessage();
}