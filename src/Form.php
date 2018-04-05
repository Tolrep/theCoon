<?php


?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="style.css" />



    <title>Choix des personnages</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<?php session_start();?>
<body>

<!-- Page Content -->
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (array_key_exists('errors', $_SESSION)):?>
                    <div class="alert alert-danger">
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




        <div class="row">
            <div class="col-md-6">
                <form action="post_verif.php" method="POST">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input" <?php if ($_SESSION['inputs']['customRadio1']==1){echo ("checked");} ?> value="1">
                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input" <?php if ($_SESSION['inputs']['customRadio1']==2){echo ("checked");} ?> value="2">
                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                    </div>


            </div>
            <div class="col-md-6">

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input" <?php if ($_SESSION['inputs']['customRadio2']==3){echo ("checked");} ?> value="3">
                        <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input" <?php if ($_SESSION['inputs']['customRadio2']==4){echo ("checked");} ?> value="4">
                        <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                    </div>


            </div>
        </div>
    <img src="/img/versus.png" class="versus">

    <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block">LET'S FIGHT</button>
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

