<?php
require('config.php');
require('Form.php');
require('Livre.php');

if (
  !isset($_POST['id'])
  || !isset($_POST['titre'])
  || !isset($_POST['resume'])
  || !isset($_POST['parution'])
  || !isset($_POST['type'])
  || !isset($_POST['cote'])
  || !isset($_POST['auteur'])
  || !isset($_POST['nbExemplaire'])
) {
  echo ('Il manque des informations pour permettre la modification du livre');
  return;
}


$data = [
  'titre' => $_POST['titre'],
  'resume' => $_POST['resume'],
  'parution' => $_POST['parution'],
  'type' => $_POST['type'],
  'cote' => $_POST['cote'],
  'auteur' => $_POST['auteur'],
  'nbExemplaire' => $_POST['nbExemplaire'],
  'id' => $_POST['id'],
];

$sql = "UPDATE Livre SET
  titre =:titre,
  resume =:resume,
  parution =:parution,
  type =:type,
  cote =:cote,
  auteur =:auteur,
  nbExemplaire =:nbExemplaire
  WHERE id_livre =:id";
$insertBookStatement = $pdo->prepare($sql);
$insertBookStatement->execute($data);

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
    <h4 class="alert alert-success" style="margin:100px auto 50px; padding: 10px 20px;">Livre modifié avec succès!</h4>
    <a href="index.php" class="btn btn-outline-secondary" style="margin-top:50px">Retour à l'accueil</a>
  </div>
</body>

</html>