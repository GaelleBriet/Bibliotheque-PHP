<?php require('config.php');



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

  <h4 class="text-center text-dark" style="margin:100px auto 50px">Livres référencés dans la bibliothèque</h4>
  <table class="table table-bordered table-striped w-75 p-3 mt-5" style="margin: 0 auto 100px">

    <tr>
      <th scope=" col" class="table-dark">Titre</th>
      <th scope="col" class="table-dark">Auteur</th>
      <th scope="col" class="table-dark">Année de publication</th>
      <th scope="col" class="table-dark">Nombre d'exemplaires</th>
      <th scope="col" class="table-dark">Type</th>
      <th scope="col" class="table-dark">Cote</th>
      <th scope="col" class="table-dark">Résumé</th>
      <th scope="col" class="table-dark">Edition</th>
      <th scope="col" class="table-dark">Suppression</th>
    </tr>


    <?php
    $stmt = $pdo->query('SELECT * FROM Livre');
    foreach ($stmt as $row) {
      echo '
    <tr><td>' . $row['titre'] . '</td>
    <td>' . $row['auteur'] . '</td>
    <td>' . $row['parution'] . '</td>
    <td>' . $row['nbExemplaire'] . '</td>
    <td>' . $row['type'] . '</td>
    <td>' . $row['cote'] . '</td>
    <td>' . $row['resume'] . '</td>
    <td><a href="update_book.php?id=' . $row['id_livre'] . '" class="btn btn-outline-secondary btn-sm">Editer</a></td>
    <td><a class="btn btn-outline-danger btn-sm" href="delete_book.php?id=' . $row['id_livre'] . '">Supprimer</a></td>
    </tr>';
    }

    ?>

  </table>
</body>

</html>