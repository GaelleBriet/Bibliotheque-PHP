<?php

require('config.php');
include_once('Livre.php');
include_once('Form.php');
include_once('variables.php');

if (!isset($_GET['id']) && is_numeric($_GET['id'])) {
  echo ('Il faut un identifiant de live pour le modifier');
  return;
}

$bookStatement = $pdo->prepare('SELECT * FROM Livre WHERE id_livre = :id');
$bookStatement->execute([
  'id' => $_GET['id'],
]);

$book = $bookStatement->fetch(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="fr">

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
  <h4 class="text-center text-dark" style="margin:100px auto 50px">Mettre à jour le livre : <?php echo ($book['titre']); ?> </h4>

  <?php
  // $action = "post_update_book.php?id={$book['id_livre']}";
  $action = "post_update_book.php";

  $form = new Form($action);

  $form->setId($book['id_livre']);
  $form->modifyTitle($book['titre']);
  $form->modifyAuthor($book['auteur']);
  $form->modifyResume($book['resume']);
  $form->modifyYear($book['parution']);
  $form->modifyQuantity($book['nbExemplaire']);
  $form->modifyType($book['type']);
  $form->modifyCote($book['cote']);
  $form->setSubmit();

  echo $form->getForm();
  ?>



</body>

</html>