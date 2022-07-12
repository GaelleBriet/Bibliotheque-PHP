<?php
require('config.php');
require('Form.php');
require('Livre.php');

if (!isset($_POST['id'])) {
  echo ('Il faut un identifiant valide pour supprimer une recette.');
  return;
}

$id = $_POST['id'];

$sql = 'DELETE FROM Livre WHERE id_livre = :id';
$deleteBookStatement = $pdo->prepare($sql);
$deleteBookStatement->execute([
  'id' => $id,
]);


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
  <div style="max-width:50%; margin: 150px auto;">
    <div class="alert alert-success" role="alert">
      <h4>Livre supprimé avec succès!</h4>
    </div>
    <a href="index.php" class="btn btn-outline-secondary" style="margin-top:50px">Retour à l'accueil</a>
  </div>

</body>

</html>