<?php

include '../model/recette.php';

$titrerecette= htmlentities($_POST['titre']);
$descriptionrecette= htmlentities($_POST['description']);
$publicrecette= htmlentities($_POST['public']);
$levelrecette= htmlentities($_POST['level']);
$url= htmlentities($_POST['url_image']);

$recette = createrecette($titrerecette ,$descriptionrecette ,$levelrecette ,$publicrecette ,$url);

header('Location: index_controller.php');


?>