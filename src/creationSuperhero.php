<?php
require '../vendor/autoload.php';
require 'superhero.php';

$client = new GuzzleHttp\Client([
        'base_uri' => 'https://akabab.github.io/superhero-api/api/',
    ]
);

$response = $client->request('GET', "all.json");
$infoJson = $response->getBody();
$allHeroInfo = json_decode($infoJson->getContents());
$hero = [];

$roundNumber = [];

foreach ($allHeroInfo as $idHero => $heroInfo) {
    $id = $heroInfo->id;
    $name = $heroInfo->name;
    $hp = $heroInfo->powerstats->durability;
    $force = $heroInfo->powerstats->strength;
    $image = $heroInfo->images->sm;
    $hero[$id] = new Superhero($name, $hp , $force, $id, $image);

}
