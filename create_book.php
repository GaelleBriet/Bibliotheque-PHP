<?php
require('Form.php');
require('variables.php');
?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- <title>< ?= App::getInstance()->title; ?></title> -->
  <title>Bibliothèque</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include('navbar.php'); ?>
  <h4 class="text-center text-dark" style="margin:100px auto">Ajouter un livre</h4>
  <?php
  $action = 'post_create_book.php';

  $form = new Form($action);

  $form->setTitle();
  $form->setAuthor();
  $form->setResume();
  $form->setYear();
  $form->setQuantity();
  $form->setType();
  $form->setCote();
  $form->setSubmit();

  echo $form->getForm();

  ?>
</body>

</html>










































<!-- <form action="" method="post" class="position-absolute top-50 start-50 translate-middle w-50 p-3">

  <h4 class="ms-2 mb-4">Ajouter un livre </h4>

  <div class="row mb-3">
    <label for="inputTitre" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" name="" id="inputTitre" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputAuteur" class="col-sm-2 col-form-label">Auteur</label>
    <div class="col-sm-10">
      <input type="text" name="" id="inputAuteur" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputDate" class="col-sm-2 col-form-label">Parution</label>
    <div class="col-sm-4">
      <input type="number" min="1000" max="2030" step="1" name="" id="inputDate" class="form-control" placeholder="Année">
    </div>
    <label for="inputExemplaire" class="col-sm-2 col-form-label">Exemplaires</label>
    <div class="col-sm-4">
      <input type="number" name="" id="inputExemplaire" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputType" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-4">
      <input type="text" name="" id="inputType" class="form-control" placeholder="Exemple : 834">
    </div>
    <label for="inputCote" class="col-sm-2 col-form-label">Cote</label>
    <div class="col-sm-4">
      <input type="text" name="" id="inputCote" class="form-control" placeholder="Exemple : RP843DAN">
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary mt-4" type="submit">Submit form</button>
  </div>
</form> -->