<?php

include '../model/recette.php';
$idrecette = htmlentities($_POST['id']);
$recettee = deleterecette($idrecette);

header('Location: index_controller.php');


?>