<?php

$idrecette = htmlentities($_POST['id']);


include '../model/recette.php';


$row=getrecette($idrecette);


include '../vue/update2.php';


?>