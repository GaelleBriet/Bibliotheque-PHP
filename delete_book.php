<?php

require('config.php');
include_once('Livre.php');
include_once('Form.php');
include_once('variables.php');

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bibliothèque</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include_once('navbar.php'); ?>
  <div class="card">
    <h4 class="text-center text-dark " style="margin:100px auto 300px">Supprimer le livre ? </h4>

    <?php
    $action = "post_delete_book.php";
    $form = new Form($action);

    $form->setId($_GET['id']);
    $form->setDanger();
    echo $form->getForm();
    ?>
  </div>