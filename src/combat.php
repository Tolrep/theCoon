<?php
require 'creationSuperhero.php';
$roundNumber = [];
$round = 2;

if (isset($_POST["hpHero1"])){
    $hero[2]->hp = $_POST["hpHero1"];
}

if (isset($_POST["hpHero2"])){
    $hero[1]->hp = $_POST["hpHero2"];
}

if (isset($_POST["submit1"])) {
   $round = 2;
   ($hero[1])->atk($hero[2]);
}

if (isset($_POST["submit2"])) {
    $round = 1;
    ($hero[2])->atk($hero[1]);
}

if ($hero[2]->hp === 0) {
    echo $hero[1]->name . "a tue " . $hero[2]->name . " en combat singulier.";
    die;
}

if ($hero[1]->hp === 0) {
    echo $hero[2]->name . "a tue " . $hero[1]->name . " en combat singulier.";
    die;
}

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php if ($round === 1){?>
        <h1>Attaquant: <?php echo ($hero[1]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[2]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[2]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[1]->hp?>">
            <input type="submit" value="Attaque" name="submit1">
        </form>
    <?php }else {?>
        <h1>Attaquant: <?php echo ($hero[2]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[1]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[2]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[1]->hp?>">
            <input type="submit" value="Attaque" name="submit2">
        </form>
    <?php }?>
    </body>
</html>
<?php
echo $hero[1] . '<br>';
echo $hero[2] . '<br>';

