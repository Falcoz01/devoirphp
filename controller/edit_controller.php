<?php

$titrecode= htmlentities($_POST['titre']);
$descriptioncode= htmlentities($_POST['description']);
$levelcode= htmlentities($_POST['level']);
$publiccode= htmlentities($_POST['public']);
$idrecette = htmlentities($_POST['id']);

include '../model/recette.php';


$Recette=updaterecette($titrecode ,$descriptioncode ,$levelcode ,$publiccode ,$idrecette );


// include '../vue/update.php';

header('Location: index_controller.php');
?>