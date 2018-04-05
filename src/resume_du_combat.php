<?php
$Player1 = 'Jean';
$LifePoint1 = '100';
$Attack1 = '10';

$Player2 = 'Pierre';
$LifePoint2 = '100';
$Attack2 = '15';

$roundNumber = [
    '90', '80', '70', '60',
];

$compteur = 1;

foreach ($roundNumber as $key => $valeur){
    if ($key%2){
        $result = $Player1.' a infligé '.$Attack1.' de dégâts à '.$Player2.'. Il reste '.$valeur.' points de vie à '.$Player2.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    } else {
        $result = $Player2.' a infligé '.$Attack2.' de dégâts à '.$Player1.'. Il reste '.$valeur.' points de vie à '.$Player1.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    }
}












