<?php

session_start();
if (!isset($_SESSION['roundNumber'])){
    $_SESSION['roundNumber'] = array();
}
require 'creationSuperhero.php';
$round = 2;


if (isset($_POST["hpHero1"])){
    $hero[($_SESSION['inputs']['customRadio1'])]->hp = $_POST["hpHero1"];
}

if (isset($_POST["hpHero2"])){
    $hero[($_SESSION['inputs']['customRadio2'])]->hp = $_POST["hpHero2"];
}

if (isset($_POST["submit1"])) {
   $round = 2;
   ($hero[($_SESSION['inputs']['customRadio2'])])->punch($hero[($_SESSION['inputs']['customRadio1'])]);
   $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio1'])]->hp);
   //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio1'])]->hp));
}

if (isset($_POST["submit2"])) {
    $round = 1;
    ($hero[($_SESSION['inputs']['customRadio1'])])->punch($hero[($_SESSION['inputs']['customRadio2'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio2'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit3"])) {
    $round = 2;
    ($hero[($_SESSION['inputs']['customRadio2'])])->kick($hero[($_SESSION['inputs']['customRadio1'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio1'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit4"])) {
    $round = 1;
    ($hero[($_SESSION['inputs']['customRadio1'])])->kick($hero[($_SESSION['inputs']['customRadio2'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio2'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit5"])) {
    $round = 2;
    ($hero[($_SESSION['inputs']['customRadio2'])])->combo($hero[($_SESSION['inputs']['customRadio1'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio1'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit6"])) {
    $round = 1;
    ($hero[($_SESSION['inputs']['customRadio1'])])->combo($hero[($_SESSION['inputs']['customRadio2'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio2'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit7"])) {
    $round = 2;
    ($hero[($_SESSION['inputs']['customRadio2'])])->falconPunch($hero[($_SESSION['inputs']['customRadio1'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio1'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if (isset($_POST["submit8"])) {
    $round = 1;
    ($hero[($_SESSION['inputs']['customRadio1'])])->falconPunch($hero[($_SESSION['inputs']['customRadio2'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio2'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if ($hero[($_SESSION['inputs']['customRadio1'])]->hp === 0) {
    header("location:resume_du_combat.php");
}

if ($hero[($_SESSION['inputs']['customRadio2'])]->hp === 0) {
    header("location:resume_du_combat.php");
}

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php if ($round === 1){?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1>Attaquant: <?php echo ($hero[($_SESSION['inputs']['customRadio2'])]->name)?></h1>
                    <p><?=$hero[($_SESSION['inputs']['customRadio2'])]?></p>
                    <img src="<?=$hero[($_SESSION['inputs']['customRadio2'])]->image?>">
                </div>
                <div class="col-md-4">
                    <img src="img/versus.png">
                </div>
                <div class="col-md-4">
                    <h1>Defenseur: <?php echo ($hero[($_SESSION['inputs']['customRadio1'])]->name)?></h1>
                    <p><?=$hero[($_SESSION['inputs']['customRadio1'])]?></p>
                    <img src="<?=$hero[($_SESSION['inputs']['customRadio1'])]->image?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <form action="" method="post">
                        <input type="hidden" name="hpHero1" value="<?=$hero[($_SESSION['inputs']['customRadio1'])]->hp?>">
                        <input type="hidden" name="hpHero2" value="<?=$hero[($_SESSION['inputs']['customRadio2'])]->hp?>">
                        <input type="submit" value="Punch" name="submit1">
                        <input type="submit" value="Kick" name="submit3">
                        <input type="submit" value="Combo" name="submit5">
                        <input type="submit" value="Falcon Punch" name="submit7">
                    </form>
                </div>
            </div>
        </div>
            <?php }else {?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1>Defenseur: <?php echo ($hero[($_SESSION['inputs']['customRadio2'])]->name)?></h1>
                    <p><?=$hero[($_SESSION['inputs']['customRadio2'])]?></p>
                    <img src="<?=$hero[($_SESSION['inputs']['customRadio2'])]->image?>">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="img/versus.png">
                </div>
                <div class="col-md-4">
                    <h1>Attaquant: <?php echo ($hero[($_SESSION['inputs']['customRadio1'])]->name)?></h1>
                    <p><?=$hero[($_SESSION['inputs']['customRadio1'])]?></p>
                    <img src="<?=$hero[($_SESSION['inputs']['customRadio1'])]->image?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <form action="" method="post">
                        <input type="hidden" name="hpHero1" value="<?=$hero[($_SESSION['inputs']['customRadio1'])]->hp?>">
                        <input type="hidden" name="hpHero2" value="<?=$hero[($_SESSION['inputs']['customRadio2'])]->hp?>">
                        <input type="submit" value="Punch" name="submit2">
                        <input type="submit" value="Kick" name="submit4">
                        <input type="submit" value="Combo" name="submit6">
                        <input type="submit" value="Falcon Punch" name="submit8">
                    </form>
                </div>
            </div>
        </div>
            <?php }?>
    </body>
</html>

