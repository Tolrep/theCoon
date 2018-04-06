<?php
                session_start();
                require 'creationSuperhero.php';

                $compteur = 1;
                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="resumeStyle.css" />
    <title>Résumé du combat</title>


</head>

<body>



    <div class="bg"></div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-4 offset-md-1"><img class="img-fluid Luigi fixed-right" src="img/Luigi.png"></div>
            <div class="col-md-4 offset-md-3"><img class="img-fluid Mario" src="img/Mario.png"></div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img class="victory" src="img/victory.png">
                <?php

                if (count($_SESSION['roundNumber']%2)) {
                    $result = $hero[($_SESSION['inputs']['customRadio2'])]->name . " a tue " . $hero[($_SESSION['inputs']['customRadio1'])]->name . " en combat singulier.<br><br>";
                    ?><img class="winner" src="<?=$hero[($_SESSION['inputs']['customRadio2'])]->image?>"><?php

                    ?><p class="text-center gg"><?= $result?></p><?php
                } else {

                    $result = $hero[($_SESSION['inputs']['customRadio1'])]->name . " a tue " . $hero[($_SESSION['inputs']['customRadio2'])]->name . " en combat singulier.<br><br>";
                    ?><img class="winner" src="<?=$hero[($_SESSION['inputs']['customRadio2'])]->image?>"><?php
                    ?><p class="text-center"><?= $result?></p><?php
                }

                foreach ($_SESSION['roundNumber'] as $key => $valeur){
                    if ($key%2){
                        $result = $hero[($_SESSION['inputs']['customRadio1'])]->name.' a infligé '.$hero[($_SESSION['inputs']['customRadio1'])]->force.' de dégâts à '.$hero[($_SESSION['inputs']['customRadio2'])]->name.'. Il reste '.$valeur.' points de vie à '.$hero[($_SESSION['inputs']['customRadio2'])]->name.'.<br><br>';
                        $round = 'Round '.$compteur.'<br>';
                        $compteur = $compteur + 1;
                        ?><p class="text-center round rounded border-left-0"><?= $round?></p><?php
                        ?><p class="justify-content"><?= $result?></p><?php
                    } else {
                        $result = $hero[($_SESSION['inputs']['customRadio2'])]->name.' a infligé '.$hero[($_SESSION['inputs']['customRadio2'])]->force.' de dégâts à '.$hero[($_SESSION['inputs']['customRadio1'])]->name.'. Il reste '.$valeur.' points de vie à '.$hero[($_SESSION['inputs']['customRadio1'])]->name.'.<br><br>';
                        $round = 'Round '.$compteur.'<br>';
                        $compteur = $compteur + 1;
                        ?><p class="text-center round rounded border-left-0"><?= $round?></p><?php
                        ?><p class="justify-content"><?= $result?></p><?php
                    }
                }


                ?>
                <a href="Form.php" type="button" class="btn btn-light winner newGame">NEW GAME</a>

            </div>
        </div>
    </div>


</body>

<?php session_destroy()?>
