<?php

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client([
    'base_uri'=> 'https://akabab.github.io/superhero-api/api/',
    ]
);

$reponse = $client->request('GET', 'biography/1.json', [
    'id' => '1',
    ]

);

$body = $reponse->getBody();
$json = $body->getContents();
$json = json_decode($json);
//var_dump($json);

foreach ($json as $key => $value){
    if ($key == "fullName"){
        echo ($value);
    }
}
