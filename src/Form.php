<?php
require 'creationSuperhero.php';

?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>




    <title>Choix des personnages</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styleForm.css" />
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<?php session_start();?>
<body>

    <!-- Page Content -->
    <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h1 class="Choississez">Choose your Fighter</h1>
                    <?php if (array_key_exists('errors', $_SESSION)):?>
                        <div class="alert alert-danger role="alert"">
                            <?= implode('<br>',$_SESSION['errors'])?>
                        </div>

                    <?php endif; ?>

                    <?php if (array_key_exists('success', $_SESSION)):?>
                        <div class="alert alert-success">
                            Le combat va commencer
                        </div>
                    <?php endif; ?>
                </div>
            </div>

    </div>
    <div class="container">
        <form action="post_verif.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hero">Player1</h1>
                    <?php for($i=1; $i<5; $i++){
                        $idHero= rand(0, 731);
                        if (!array_key_exists($idHero, $hero)){
                            $idHero= rand(0, 731);
                            if (!array_key_exists($idHero, $hero)){
                                $idHero= rand(0, 731);
                                if (!array_key_exists($idHero, $hero)){
                                    $idHero= rand(0, 731);}
                            }
                        };?>


                            <h2><?=$hero[$idHero]->name?></h2>
                            <img class="img-thumbnail" src="<?=($hero[$idHero])->image?>" alt="photo hero">
                            <div class="custom-control custom-radio radioDav">
                                <input type="radio" id="customRadio<?=$i?>" name="customRadio1" class="custom-control-input" value="<?=($hero[$idHero])->id?>">
                                <label class="custom-control-label selectHero" for="customRadio<?=$i?>">Select this hero</label>
                            </div>
                            <p><?=$hero[$idHero]?></p>


                    <?php }?>
                </div>
                <div class="col-md-6">
                    <h1 class="enemy">Player2</h1>





                    <?php for($l=11; $l<15; $l++){
                        $idAd = rand(0, 731);
                        if (!array_key_exists($idAd, $hero)) {
                            $idAd = rand(0, 731);
                            if (!array_key_exists($idAd, $hero)) {
                                $idAd = rand(0, 731);
                                if (!array_key_exists($idAd, $hero)) {
                                    $idAd = rand(0, 731);                               }
                            }
                        };?>
                        <h2><?=$hero[$idAd]->name?></h2>
                        <img class="img-thumbnail" src="<?=($hero[$idAd])->image?>" alt="photo hero">
                        <div class="custom-control custom-radio radioDav">
                            <input type="radio" id="customRadio<?=$l?>" name="customRadio2" class="custom-control-input" value="<?=($hero[$idAd])->id?>">
                            <label class="custom-control-label selectEnemy" for="customRadio<?=$l?>">Select this enemy</label>
                        </div>
                        <p><?=$hero[$idHero]?></p>




                    <?php }?>

                </div>
            </div>
            <div class="text-center Fight">
                <button type="submit" class="btn btn-primary text-center bouton">let's Fight</button>
            </div>

        </form>
    </div>







    <?php

    //var_dump($_POST);
    ?>


</body>
</html>


<?php

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);


