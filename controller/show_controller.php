<?php

include '../model/recette.php';

$idrecette = htmlentities($_POST['id']);
$reecette = getrecette($idrecette);

include '../vue/show.php';


?>