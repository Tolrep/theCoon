<?php

session_start();
if (!isset($_SESSION['roundNumber'])){
    $_SESSION['roundNumber'] = array();
}
require 'creationSuperhero.php';
$round = 2;


if (isset($_POST["hpHero1"])){
    $hero[53]->hp = $_POST["hpHero1"];
}

if (isset($_POST["hpHero2"])){
    $hero[100]->hp = $_POST["hpHero2"];
}

if (isset($_POST["submit1"])) {
   $round = 2;
   ($hero[100])->atk($hero[53]);
   $_SESSION['roundNumber'][] = ($hero[53]->hp);
   //array_push($roundNumber,($hero[53]->hp));
}

if (isset($_POST["submit2"])) {
    $round = 1;
    ($hero[53])->atk($hero[100]);
    $_SESSION['roundNumber'][] = ($hero[100]->hp);

    //array_push($roundNumber,($hero[100]->hp));
}

if ($hero[53]->hp === 0) {
    echo $hero[100]->name . "a tue " . $hero[53]->name . " en combat singulier.";
    header("refresh:3;url=resume_du_combat.php");
    die;
}

if ($hero[100]->hp === 0) {
    echo $hero[53]->name . "a tue " . $hero[100]->name . " en combat singulier.";
    header("refresh:3;url=resume_du_combat.php");
    die;
}

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php if ($round === 1){?>
        <h1>Attaquant: <?php echo ($hero[100]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[53]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[53]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[100]->hp?>">
            <input type="submit" value="Attaque" name="submit1">
        </form>
    <?php }else {?>
        <h1>Attaquant: <?php echo ($hero[53]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[100]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[53]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[100]->hp?>">
            <input type="submit" value="Attaque" name="submit2">
        </form>
    <?php }?>
    </body>
</html>
<?php
echo $hero[100] . '<br>';
echo $hero[53] . '<br>';


print_r($_SESSION);

?>


