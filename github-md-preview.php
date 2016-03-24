<?php

require __DIR__ . '/vendor/autoload.php';

$md = file_get_contents("php://stdin");

$client = new GuzzleHttp\Client();
$res = $client->request('POST', 'https://api.github.com/markdown', [
    "json" => [
        "text" => $md,
        "mode" => "markdown"
    ],
    "verify" => false
]);
echo $res->getBody();
