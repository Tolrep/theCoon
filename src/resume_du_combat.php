<?php
session_start();
require 'creationSuperhero.php';

$compteur = 1;

foreach ($_SESSION['roundNumber'] as $key => $valeur){
    if ($key%2){
        $result = $hero[100]->name.' a infligé '.$hero[100]->force.' de dégâts à '.$hero[53]->name.'. Il reste '.$valeur.' points de vie à '.$hero[53]->name.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    } else {
        $result = $hero[53]->name.' a infligé '.$hero[53]->force.' de dégâts à '.$hero[100]->name.'. Il reste '.$valeur.' points de vie à '.$hero[100]->name.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    }
}

?>

<a href="Form.php" type="button">Form</a>
<?php session_destroy();?>














