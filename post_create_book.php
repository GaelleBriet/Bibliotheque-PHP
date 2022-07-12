<?php
require('Form.php');
require('Livre.php');

if (
  !isset($_POST['titre'])
  || !isset($_POST['parution'])
  || !isset($_POST['resume'])
  || !isset($_POST['type'])
  || !isset($_POST['cote'])
  || !isset($_POST['auteur'])
  || !isset($_POST['nbExemplaire'])
) {
  echo 'Il faut remplir tous les champs pour ajouter un livre.';
  return;
}

$postBook = new Livre;
$postBook->createBook($pdo);

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
  <?php include('navbar.php'); ?>

  <div class="card">
    <div class="card-body">
      <div class="alert alert-success" style="max-width:50%; margin: 150px auto;">Livre ajouté avec succès! </div>
      <h4 class="text-center text-dark" style="margin:100px auto 50px">Liste des livres présents dans la bibliothèque :
      </h4>

      <table class="table table-bordered table-striped w-75 p-3 mt-5" style="margin: 0 auto 100px">

        <tr>
          <th scope="col" class="table-dark">Titre</th>
          <th scope="col" class="table-dark">Auteur</th>
          <th scope="col" class="table-dark">Année de publication</th>
          <th scope="col" class="table-dark">Nombre d'exemplaires</th>
          <th scope="col" class="table-dark">Type</th>
          <th scope="col" class="table-dark">Cote</th>
          <th scope="col" class="table-dark">Résumé</th>
        </tr>


        <?php
        $stmt = $pdo->query('SELECT * FROM Livre');
        foreach ($stmt as $cat) {
          echo '
            <tr><td>' . $cat['titre'] . '</td>
            <td>' . $cat['auteur'] . '</td>
            <td>' . $cat['parution'] . '</td>
            <td>' . $cat['nbExemplaire'] . '</td>
            <td>' . $cat['type'] . '</td>
            <td>' . $cat['cote'] . '</td>
            <td>' . $cat['resume'] . '</td></tr>';
        }

        ?>
      </table>
    </div>
  </div>
</body>

</html>