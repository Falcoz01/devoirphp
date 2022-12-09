<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php

$o= $row['titre'];
$p = $row['description'];

$n = $row['level'];
$pu= $row['is_public'];
$i = $row['id'];

echo '<form action="../controller/edit_controller.php" method="POST">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >titre</label>
    <input type="text" class="form-control" name="titre" value="' . $o . '">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="prenom">description</label>
    <input type="text" class="form-control"  name="description" value="' . $p . '">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="prenom">level</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="level" value=' . $n . '>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="prenom">Public</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="public" value=' . $pu . '>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="prenom">id</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="id" value=' . $i. '>
  </div>
  <button type="submit" class="btn btn-primary" name="button5" value="button5">Submit</button>
</form>';

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>