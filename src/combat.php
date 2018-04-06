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
   ($hero[($_SESSION['inputs']['customRadio2'])])->atk($hero[($_SESSION['inputs']['customRadio1'])]);
   $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio1'])]->hp);
   //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio1'])]->hp));
}

if (isset($_POST["submit2"])) {
    $round = 1;
    ($hero[($_SESSION['inputs']['customRadio1'])])->atk($hero[($_SESSION['inputs']['customRadio2'])]);
    $_SESSION['roundNumber'][] = ($hero[($_SESSION['inputs']['customRadio2'])]->hp);

    //array_push($roundNumber,($hero[($_SESSION['inputs']['customRadio2'])]->hp));
}

if ($hero[($_SESSION['inputs']['customRadio1'])]->hp === 0) {
    echo $hero[($_SESSION['inputs']['customRadio2'])]->name . " a tue " . $hero[($_SESSION['inputs']['customRadio1'])]->name . " en combat singulier.";
    header("refresh:3;url=resume_du_combat.php");
    die;
}

if ($hero[($_SESSION['inputs']['customRadio2'])]->hp === 0) {
    echo $hero[($_SESSION['inputs']['customRadio1'])]->name . " a tue " . $hero[($_SESSION['inputs']['customRadio2'])]->name . " en combat singulier.";
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
        <h1>Attaquant: <?php echo ($hero[($_SESSION['inputs']['customRadio2'])]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[($_SESSION['inputs']['customRadio1'])]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[($_SESSION['inputs']['customRadio1'])]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[($_SESSION['inputs']['customRadio2'])]->hp?>">
            <input type="submit" value="Attaque" name="submit1">
        </form>
    <?php }else {?>
        <h1>Attaquant: <?php echo ($hero[($_SESSION['inputs']['customRadio1'])]->name)?></h1>
        <h1>Defenseur: <?php echo ($hero[($_SESSION['inputs']['customRadio2'])]->name)?></h1>
        <form action="" method="post">
            <input type="hidden" name="hpHero1" value="<?=$hero[($_SESSION['inputs']['customRadio1'])]->hp?>">
            <input type="hidden" name="hpHero2" value="<?=$hero[($_SESSION['inputs']['customRadio2'])]->hp?>">
            <input type="submit" value="Attaque" name="submit2">
        </form>
    <?php }?>
    </body>
</html>
<?php

echo $hero[($_SESSION['inputs']['customRadio1'])] . '<br>';
echo $hero[($_SESSION['inputs']['customRadio2'])] . '<br>';



?>


