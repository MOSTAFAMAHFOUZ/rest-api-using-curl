<?php 
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->get("https://jsonplaceholder.typicode.com/users");

echo $response->getBody();
echo "\n";
echo $response->getStatusCode();

echo "\n";
print_r($response->getHeaders());
