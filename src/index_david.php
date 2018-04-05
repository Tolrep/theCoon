<?php

require '../vendor/autoload.php';



//Create a client with a base URI
$client = new GuzzleHttp\Client([
        'base_uri' => 'https://akabab.github.io/superhero-api/api/',
    ]
);




 // Send a request to https://foo.com/api/test
$response = $client->request('GET', 'powerstats/1.json');

/*or
// Send request https://foo.com/api/test?key=maKey&name=toto
$response = $client->request('GET', 'test', [
'key'  => 'maKey',
'name' => 'toto',
]
);
*/

$body = $response->getBody();
$json=  $body->getContents();

$arrayAll= json_decode($json);

foreach ($arrayAll as $key => $value){
    if (($key) == 'intelligence') {
    echo ($value) . '<br>';
}





