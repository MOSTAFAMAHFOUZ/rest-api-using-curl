<?php

require_once '../vendor/autoload.php';
use GuzzleHttp\Exception\ClientException;

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:8000/api/']);
// $payload = json_encode(["name"=>""]); // to test response with validation errors 
try {
    $response = $client->request("DELETE",'categories/11',[
        "headers"=>["Accept"=>"application/json",
        "Content-Type"=>"application/json"],
    ]);

    echo $response->getBody();
    echo "\n";
    echo $response->getStatusCode();
    // echo "\n";
    // print_r($response->getHeaders());
}catch(ClientException $e){
    echo $e->getMessage();
}