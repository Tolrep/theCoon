<?php
session_start();
require 'creationSuperhero.php';

$compteur = 1;

foreach ($_SESSION['roundNumber'] as $key => $valeur){
    if ($key%2){
        $result = $hero[($_SESSION['inputs']['customRadio1'])]->name.' a infligé '.$hero[($_SESSION['inputs']['customRadio1'])]->force.' de dégâts à '.$hero[($_SESSION['inputs']['customRadio2'])]->name.'. Il reste '.$valeur.' points de vie à '.$hero[($_SESSION['inputs']['customRadio2'])]->name.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    } else {
        $result = $hero[($_SESSION['inputs']['customRadio2'])]->name.' a infligé '.$hero[($_SESSION['inputs']['customRadio2'])]->force.' de dégâts à '.$hero[($_SESSION['inputs']['customRadio1'])]->name.'. Il reste '.$valeur.' points de vie à '.$hero[($_SESSION['inputs']['customRadio1'])]->name.'.<br><br>';
        $round = 'Round '.$compteur.'<br>';
        $compteur = $compteur + 1;
        echo $round.$result;
    }
}

?>

<a href="Form.php" type="button">Form</a>
<?php session_destroy();?>














