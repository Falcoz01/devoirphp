<?php

include '../vue/create2';

$titrerecette= htmlentities($_POST['titre']);
$descriptionrecette= htmlentities($_POST['description']);
$publicrecette= htmlentities($_POST['public']);
$levelrecette= htmlentities($_POST['level']);
$url= htmlentities($_POST['url_image']);

include 'create_controller.php';

?>