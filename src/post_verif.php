<?php


$message = $_POST['message'];
$errors =[];

if (!array_key_exists('customRadio1', $_POST) || $_POST ['customRadio1'] == ""){
    $errors['customRadio1'] = "Vous n'avez pas choisi votre personnage";
}


if (!array_key_exists('customRadio2', $_POST) || $_POST ['customRadio2'] == ""){
    $errors['customRadio2'] = "Vous n'avez pas choisi votre adversaire";
}

if ($_POST ['customRadio1'] == $_POST ['customRadio2']){
    $errors['customRadio3'] = "Vous devez choisir deux personnages différents";
}

session_start();

if(!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] =$_POST;
    var_dump($_POST);
    header('location:Form.php');




} else {
    $_SESSION['success'] = 1;
    $_SESSION['inputs'] =$_POST;
    header('location:combat.php');
    $message =$_POST['message'];


    }




