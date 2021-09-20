<?php

use Symfony\Component\HttpClient\HttpClient;

require_once "vendor/autoload.php";

$client = HttpClient::create();

$request = $client->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/about/');

$status = $request->getStatusCode();

echo $status . PHP_EOL;